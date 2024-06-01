{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
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
    
    <title>:: NHK networking:: Signup</title>
    <link rel="icon" href="../favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <!-- project css file  -->
    <link rel="stylesheet" href="{{ asset('assets/css/my-task.style.min.css') }}">

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
                                <img src="{{ asset('assets/images/logo2.jpeg') }}" alt="LOGO NHK networking"> 
                            </div>
                            <div class="mb-5">
                                <h2 class="color-900 text-center">NHK networking</h2>
                            </div>
                            <!-- Image block -->
                            <div class="">
                                <img src="{{ asset('assets/images/login-img.svg') }}" alt="login-img">
                            </div>
                        </div>
                    </div> --}}
                  
                    <div class="col-lg-12 d-flex justify-content-center align-items-center border-0 rounded-lg auth-h100">
                        <div class="w-100 p-3 p-md-5 card border-0 bg-dark text-light" style="max-width: 32rem;">
                            <!-- Form -->
                            <form class="row g-1 p-3 p-md-4">
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1>Créer un compte</h1>
                                   
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label class="form-label">Nom et Prénom</label>
                                        <input type="text" name="firstname"  class="form-control form-control-lg" placeholder="Entrez votre nom" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label class="form-label">&nbsp;</label>
                                        <input type="text" name="lastname" class="form-control form-control-lg" placeholder="Entrez votre prénom" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control form-control-lg" placeholder="name@example.com" required>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" name="phone_number" class="form-control form-control-lg" placeholder="+228 70851235" >
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" name="adresse" class="form-control form-control-lg" placeholder="Rue Eyedema">
                                    </div>
                                </div>
                            
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            J'accepte <a href="#" title="Terms and Conditions" class="text-secondary">les  Termes et Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <a href="auth-signin.html" class="btn btn-lg btn-block btn-light lift text-uppercase" alt="SIGNUP">S'incrire</a>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span class="text-muted">Avez vous déjà un compte? <a href="auth-signin.html" title="Sign in" class="text-secondary">Se connecter</a></span>
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

</body>
</html>