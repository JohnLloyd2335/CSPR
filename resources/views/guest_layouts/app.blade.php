<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CSPR | Login</title>

    <!-- Fonts -->
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<style>
    .navbar-login {
        background-color: rgb(21, 59, 95);

    }

    .brand-text {
        color: rgb(255, 157, 30);
        font-weight: 700;
    }

    .brand-text:hover {
        color: rgb(255, 157, 30);
        font-weight: 700;
    }

    .text-orange {
        color: rgb(255, 157, 30);
        font-weight: 700;
    }

    .bg-base {
        background-color: rgb(21, 59, 95);
    }

    .btn-base {
        background-color: rgb(255, 157, 30);
        font-weight: 700;
        color: rgb(21, 59, 95);
    }

    .btn-base:hover {
        background-color: rgb(190, 117, 22);
        font-weight: 700;
        color: rgb(21, 59, 95);
    }

    .footer-base {
        background-color: rgb(21, 59, 95);
        color: #fff;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-login shadow shadow-lg">
        <div class="container-fluid">
            <a class="navbar-brand brand-text d-flex gap-2" href="#">
                <img src="{{ asset('images/logo.png') }}" height="40" width="40" alt="Logo">
                <h2>CSPR</h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>


    @yield('content')


    <br>
    <br>


    <footer class="py-2 mt-5 bg-base">
        <p class="text-center text-orange my-2">© Copyright 2023 CSPR</p>
    </footer>



    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body> --}}

</html>
