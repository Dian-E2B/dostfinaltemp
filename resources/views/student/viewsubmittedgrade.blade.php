<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DOST</title>
    </head>

    <body data-theme="light" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">


            <div class="main">
                <main class="content" style="padding: 1rem 1rem 1rem !important;">
                    <div class="container-fluid p-0">
                        <div class="card">
                            <div class="card-body">
                                <table id="thisdatatable" class="hover table table-striped table-hover compact nowrap" style="width:100%;">
                                    <thead>
                                        <tr>
                                            <th>Academic Year</th>
                                            <th>Semester</th>
                                            <th>Subjectname</th>
                                            <th>Grade</th>
                                            <th>Units</th>
                                            <!-- Add other columns as needed -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cogs as $cog)
                                            <tr>
                                                <td>{{ $cog->startyear }} - {{ $cog->startyear + 1 }}</td>
                                                <td>{{ $cog->semester }}</td>
                                                <td>{{ $cog->subjectname }}</td>
                                                <td>{{ $cog->grade }}</td>
                                                <td> {{ $cog->unit }}</td>
                                                <!-- Add other columns as needed -->
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
            </div>
        </div>
        </div>
    </body>

</html>
