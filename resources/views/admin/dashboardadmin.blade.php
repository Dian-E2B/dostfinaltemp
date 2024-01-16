<!DOCTYPE html>
<html lang="en">

    <head>
        <title>DOST XI</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" href="\icons\DOSTLOGOsmall.png" type="image/x-icon" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
        <link href="{{ asset('css/all.css') }}">
        <style>
            .no-right-click {
                user-select: none;
                -moz-user-select: none;
                /* Firefox */
                -ms-user-select: none;
                /* Internet Explorer/Edge */
                -webkit-user-select: none;
                /* Safari */
            }
        </style>
    </head>

    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <div class="wrapper">

            {{-- SIDEBAR START --}}
            @include('admin.adminsidebar')
            {{-- SIDEBAR END --}}



            <div class="main">
                @include('layouts.header')

                <main style="padding: 0.5rem 0.5rem 0.5rem 0.5rem" class="content">
                    <div class="container-fluid p-0">

                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <div class="card-actions float-end">
                                        <div class="dropdown position-relative">
                                            <a href="#" data-bs-toggle="dropdown" data-bs-display="static">
                                                <i class="align-middle" data-feather="more-horizontal"></i>
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="card-title mb-0">Clients</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-responsive table-striped" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Name</th>
                                                <th class="d-none d-md-table-cell">Company</th>
                                                <th class="d-none d-md-table-cell">Email</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Garrett Winters</td>
                                                <td class="d-none d-md-table-cell">Good Guys</td>
                                                <td class="d-none d-md-table-cell">garrett@winters.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Ashton Cox</td>
                                                <td class="d-none d-md-table-cell">Levitz Furniture</td>
                                                <td class="d-none d-md-table-cell">ashton@cox.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Sonya Frost</td>
                                                <td class="d-none d-md-table-cell">Child World</td>
                                                <td class="d-none d-md-table-cell">sonya@frost.com</td>
                                                <td><span class="badge bg-danger">Deleted</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Jena Gaines</td>
                                                <td class="d-none d-md-table-cell">Helping Hand</td>
                                                <td class="d-none d-md-table-cell">jena@gaines.com</td>
                                                <td><span class="badge bg-warning">Inactive</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Charde Marshall</td>
                                                <td class="d-none d-md-table-cell">Price Savers</td>
                                                <td class="d-none d-md-table-cell">charde@marshall.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Haley Kennedy</td>
                                                <td class="d-none d-md-table-cell">Helping Hand</td>
                                                <td class="d-none d-md-table-cell">haley@kennedy.com</td>
                                                <td><span class="badge bg-danger">Deleted</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-2.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Tatyana Fitzpatrick</td>
                                                <td class="d-none d-md-table-cell">Good Guys</td>
                                                <td class="d-none d-md-table-cell">tatyana@fitzpatrick.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Michael Silva</td>
                                                <td class="d-none d-md-table-cell">Red Robin Stores</td>
                                                <td class="d-none d-md-table-cell">michael@silva.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-3.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Angelica Ramos</td>
                                                <td class="d-none d-md-table-cell">The Wiz</td>
                                                <td class="d-none d-md-table-cell">angelica@ramos.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Jennifer Chang</td>
                                                <td class="d-none d-md-table-cell">Helping Hand</td>
                                                <td class="d-none d-md-table-cell">jennifer@chang.com</td>
                                                <td><span class="badge bg-warning">Inactive</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Brenden Wagner</td>
                                                <td class="d-none d-md-table-cell">The Wiz</td>
                                                <td class="d-none d-md-table-cell">brenden@wagner.com</td>
                                                <td><span class="badge bg-warning">Inactive</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-4.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Fiona Green</td>
                                                <td class="d-none d-md-table-cell">The Sample</td>
                                                <td class="d-none d-md-table-cell">fiona@green.com</td>
                                                <td><span class="badge bg-warning">Inactive</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Prescott Bartlett</td>
                                                <td class="d-none d-md-table-cell">The Sample</td>
                                                <td class="d-none d-md-table-cell">prescott@bartlett.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Gavin Cortez</td>
                                                <td class="d-none d-md-table-cell">Red Robin Stores</td>
                                                <td class="d-none d-md-table-cell">gavin@cortez.com</td>
                                                <td><span class="badge bg-success">Active</span></td>
                                            </tr>
                                            <tr>
                                                <td><img src="img/avatars/avatar-5.jpg" width="32" height="32" class="rounded-circle my-n1" alt="Avatar"></td>
                                                <td>Howard Hatfield</td>
                                                <td class="d-none d-md-table-cell">Price Savers</td>
                                                <td class="d-none d-md-table-cell">howard@hatfield.com</td>
                                                <td><span class="badge bg-warning">Inactive</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                </main>
            </div>
        </div>
    </body>
    {{-- SIDEBAR TOGGLING --}}
    <script src="{{ asset('js/all.js') }}"></script>
    <script>
        var elements = document.getElementsByClassName("no-right-click");

        for (var i = 0; i < elements.length; i++) {
            elements[i].oncontextmenu = function() {
                return false;
            };
        }
    </script>

</html>
