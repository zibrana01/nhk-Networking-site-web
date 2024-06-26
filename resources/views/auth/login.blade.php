{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


<!doctype html>
<html class="no-js" lang="en" dir="ltr">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <title>:: My-Task:: Signin</title>
        <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
        <!-- project css file  -->
        <link rel="stylesheet" href="{{ asset('assets/css/my-task.style.min.css') }} ">
        <link rel="stylesheet" href="{{ asset('assets/css/verify_password.css') }}">
    </head>

    <style>
        .background {
            background-image: url("assets/images/logo1.png");
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
}

    </style>

    <body>

        <div id="mytask-layout" class="theme-indigo">

            <!-- main body area -->
            <div class="main p-2 py-3 p-xl-5 background">
                
                <!-- Body: Body -->
                <div class="body d-flex p-0 p-xl-5">
                    <div class="container-xxl">

                        <div class="row g-0">
                            {{-- <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center rounded-lg auth-h100">
                                <div style="max-width: 25rem;">
                                     <div class="text-center mb-5">
                                        <svg  width="4rem" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                            <path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                                            <path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                                        </svg>
                                    </div> 
                                    <div class="mb-5">
                                        <h2 class="color-900 text-center"> Welcome To NHKnetworking </h2>
                                    </div>
                                    <!-- Image block -->
                                    <div class="">
                                        <img src="../assets/images/login-img.svg" alt="login-img">
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col-lg-12 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                                <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                                    <!-- Form -->
                                    <form class="row g-1 p-3 p-md-4" method="POST" action="{{ route("login")}}">
                                        @csrf
                                        <div class="col-12 text-center mb-1 mb-lg-5">
                                            <h1>Se connecter</h1>
                                            
                                        </div>
                                        <div class="col-12 text-center mb-4">
                                            <a class="btn btn-lg btn-outline-secondary btn-block" href="{{ route('google.redirect') }}">
                                                <span class="d-flex justify-content-center align-items-center">
                                                    <img class="avatar xs me-2" src="../assets/images/google.svg" alt="Image Description">
                                                    Sign in with Google
                                                </span>
                                            </a>
                                            <span class="dividers text-muted mt-4">OR</span>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label">Email </label>
                                                <input type="email" class="form-control form-control-lg" placeholder="name@example.com" name="email" required >
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <div class="form-label">
                                                    <span class="d-flex justify-content-between align-items-center">
                                                        Mot de Passe
                                                        <a class="text-secondary" href="auth-password-reset.html">Forgot Password?</a>
                                                    </span>
                                                </div>
                                                <input type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control form-control-lg" placeholder="*********" >
                                            </div>
                                        </div>
                                        <div id="password-message" class="col-12"> 
                                            <h6>Le Mot de Passe doit contenir:</h6> 
                                            <p class="password-message-item invalid">Au moins 
                                                <b>1 lettre muniscule</b> 
                                            </p> 
                                            <p class="password-message-item invalid">Au moins 
                                                <b>1 lettre Majuscule</b> 
                                            </p> 
                                            <p class="password-message-item invalid">Au moins 
                                                <b>1 chiffre</b> 
                                            </p> 
                                            <p class="password-message-item invalid">Minimum 
                                                <b>8 caractères</b> 
                                            </p> 
                                        </div> 
                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                                <label class="form-check-label" for="flexCheckDefault">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">SIGN IN</a>
                                        </div>
                                        <div class="col-12 text-center mt-4">
                                            <span class="text-muted">Don't have an account yet? <a href="auth-signup.html" class="text-secondary">Sign up here</a></span>
                                        </div>
                                    </form>
                                    <!-- End Form -->
                                </div>
                            </div>
                        </div> <!-- End Row -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery Core Js -->
        <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/verify_password.js') }}"></script>


    </body>
</html>
