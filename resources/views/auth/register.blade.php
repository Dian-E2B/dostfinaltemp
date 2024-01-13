<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <link rel="icon" href="\icons\DOSTLOGOsmall.png" type="image/x-icon" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>DOST</title>
    </head>

    <body data-theme="default" data-layout="fluid" data-sidebar-position="left" data-sidebar-layout="default">
        <main class="d-flex w-100 h-100">
            <div class="container d-flex flex-column">
                <div class="row vh-100">
                    <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5 mx-auto d-table h-100">
                        <div class="d-table-cell align-middle">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="{{ route('register') }}">
                                        @csrf

                                        <!-- Name -->
                                        <div>
                                            <label class="form-label">Role:</label>
                                            <select id="role" class="form-control form-control-lg" name="role" required autofocus autocomplete="role">
                                                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                                <option value="staff" {{ old('role') == 'staff' ? 'selected' : '' }}>Staff</option>
                                            </select>
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <label class="form-label">Email:</label>
                                            <input id="email" class="form-control form-control-lg" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <label class="form-label">Password:</label>
                                            <input id="password" class="form-control form-control-lg" type="password" name="password" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <label class="form-label">Confirm Password:</label>

                                            <input id="password_confirmation" class="form-control form-control-lg full" type="password" name="password_confirmation" required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>

                                        <div class="flex items-center justify-end mt-4">
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                                {{ __('Already registered?') }}
                                            </a>

                                            <x-primary-button class="ml-4 btn btn-primary">
                                                {{ __('Register') }}
                                            </x-primary-button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

    </body>

</html>
