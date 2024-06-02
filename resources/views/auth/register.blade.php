
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
                            <form class="row g-1 p-3 p-md-4" action="{{ route('register') }}" method="POST">
                                @csrf
                                <div class="col-12 text-center mb-1 mb-lg-5">
                                    <h1>Créer un compte</h1>
                                   
                                </div>
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label class="form-label">Nom et Prénom</label>
                                        <input type="text" name="firstname"  class="form-control form-control-lg @error('firstname')
                                            is-invalid
                                        @enderror" placeholder="Entrez votre nom" required>
                                    </div>
                                </div>
                                @error('firstname')
                                <div class="col-6">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-6">
                                    <div class="mb-2">
                                        <label class="form-label">&nbsp;</label>
                                        <input type="text" name="lastname" class="form-control form-control-lg @error('lastname')
                                            is-invalid
                                        @enderror" placeholder="Entrez votre prénom" required>
                                    </div>
                                </div>
                                @error('lastname')
                                <div class="col-6">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Email </label>
                                        <input type="email" name="email" class="form-control form-control-lg @error('email')
                                            is-invalid
                                        @enderror" placeholder="name@example.com" required>
                                    </div>
                                </div>
                                @error('email')
                                <div class="col-12">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Téléphone</label>
                                        <input type="text" name="phone_number" class="form-control form-control-lg @error('phone_number')
                                            is-invalid
                                        @enderror" placeholder="+228 70851235" >
                                    </div>
                                </div>
                                @error('phone_number')
                                <div class="col-12">
                                    {{ $message }}
                                </div>
                                @enderror
                                <div class="col-12">
                                    <div class="mb-2">
                                        <label class="form-label">Adresse</label>
                                        <input type="text" name="adresse" class="form-control form-control-lg @error('adresse')
                                            is-invalid
                                        @enderror" placeholder="Rue Eyedema">
                                    </div>
                                </div>
                                @error('adresse')
                                <div class="col-12">
                                    {{ $message }}
                                </div>
                                @enderror
                            
                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            J'accepte <a href="#" title="Terms and Conditions" class="text-secondary">les  Termes et Conditions</a>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <button type="submit" class="btn btn-lg btn-block btn-light lift text-uppercase" atl="signin">S'incrire</a></button>
                                </div>
                                <div class="col-12 text-center mt-4">
                                    <span class="text-muted">Avez vous déjà un compte? <a href="{{ route('login') }}" title="Sign in" class="text-secondary">Se connecter</a></span>
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