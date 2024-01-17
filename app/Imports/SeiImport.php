<?php

namespace App\Imports;

use App\Models\Gender;
use App\Models\Program;
use App\Models\Scholars;
use App\Models\Sei;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Support\Facades\Redirect;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Facades\dd;
use PhpParser\Node\Stmt\TryCatch;
use PhpParser\Node\Stmt\While_;
use Termwind\Components\Dd as ComponentsDd;

use function Psy\debug;

class SeiImport implements ToModel, WithBatchInserts
{



    public function model(array $row)
    {

        $existingRecord = Sei::where('spasno', $row[0])->first();

        $messageShown = false;
        // Check if the data in the first column (index 0) starts with "U"
        $hasError = false;

        if ((
            $row[0] == "SPAS NO."
            && $row[1] == "AppID"
            && $row[2] == "STRAND"
            && $row[3] == "program"
            && $row[4] == "last name"
            && $row[5] == "first name"
            && $row[6] == "middle name"
            && $row[7] == "suffix"
            && $row[8] == "sex"
            && $row[9] == "birthday"
            && $row[10] == "email address"
            && $row[11] == "contact number"
            && $row[12] == "house number"
            && $row[13] == "street"
            && $row[14] == "village"
            && $row[15] == "barangay"
            && $row[16] == "municipality"
            && $row[17] == "province"
            && $row[18] == "zipcode"
            && $row[19] == "district"
            && $row[20] == "region"
            && $row[21] == "hsname"
            && $row[22] == "lacking"
            && $row[23] == "remarks"
        )) {

            if (!str_starts_with($row[0], 'U')) {
                // If it doesn't start with "U", return null to skip inserting this row
                return null;
            } elseif ($existingRecord) {
                return null;
            }
        } else {
            /*  @dd("saba", $row); */
            session()->flash('error', 'A column has been deleted. Please check the file');
            return null;
        }





        $year = substr($row[0], 2, 4);


        //FOR GENDER
        $genderValue = $row[8]; // Assuming this is the word from the Excel row
        $gender = Gender::where('gendername', $genderValue)->first();
        $genderId = $gender ? $gender->id : null;  // If a gender is found, use its ID; otherwise, use a default value


        //PROGRAM_ID
        $programfindvalue = $row[3]; //excel row
        $programfindvaluetrimmed = $programfindvalue;
        $programgetvalue = Program::whereRaw('TRIM(progname) = ?', $programfindvaluetrimmed)->first();
        $programID = $programgetvalue ? $programgetvalue->id : null;

        //BIRTHDAY
        $serialNumber = $row[9];
        $excelBaseDate = 25569; // Excel's base date (January 1, 1900) EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE

        // Convert Excel serial number to Unix timestamp

        try {
            $unixTimestamp = ($serialNumber - $excelBaseDate) * 86400; // 86400 seconds in a day
        } catch (\Error $e) {
            flash()->addError('A column has been deleted please check the file');
            return redirect()->back();
        }

        // Convert Unix timestamp to a human-readable date
        $excelDate = date('Y-m-d', $unixTimestamp);

        //dd($excelDate);
        $lackingValue = $row[22] !== null && trim($row[22]) !== '' ? $row[22] : null;
        try {
            // SEIS TABLE //MODIFIED NOV 30, 2023
            $sei = new Sei([
                'spasno' => $row[0],
                'app_id' => $row[1],
                'strand' => $row[2],
                'program_id' => $programID,
                'gender_id' => $genderId,
                'province' => $row[17],
                'municipality' => $row[16],
                'barangay' => $row[15],
                'houseno' => $row[12],
                'street' => $row[13],
                'village' => $row[14],
                'zipcode' => $row[18],
                'district' => $row[19],
                'region' => $row[20],
                'hsname' => $row[21],
                'lacking' => $lackingValue,
                'remarks' => $row[23],
                'year' => $year,
                'lname' => $row[4],
                'fname' => $row[5],
                'mname' => $row[6],
                'suffix' => $row[7],
                'bday' => $excelDate,
                'email' => $row[10],
                'mobile' => $row[11],
                'scholar_status_id' => 0,
            ]);

            // if (!empty($row[22])) {
            //     $sei->scholar_status_id = 0; // Set status_id to Lacking
            // } else {
            //     // Set status_id to a default value if needed
            //     $sei->scholar_status_id = 1; //pending
            // }

            $sei->save();
        } catch (\Throwable $t) {
            flash()->addError('An error occurred: ' . $t->getMessage());
            return redirect()->back();
        }




        //MODIFIED NOV 30, 2023
        // SCHOLAR TABLE
        // $scholar = new Scholars([
        //     'spasno' => $sei->spasno,
        //     'lname' => $row[4],
        //     'fname' => $row[5],
        //     'mname' => $row[6],
        //     'suffix' => $row[7],
        //     'bday' => $excelDate,
        //     'email' => $row[10],
        //     'mobile' => $row[11]

        // ]);


        // $scholar->save();
    }


    public function batchSize(): int
    {
        return 100;
    }
}
