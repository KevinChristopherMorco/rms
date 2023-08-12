<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://i.pinimg.com/originals/5f/fb/de/5ffbdeceb84323decd76084b2efca958.png" type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    @viteReactRefresh
    @vite('resources/css/app.css')

    <style>
        @font-face {
            font-family: Mona Sans;
            src: url('/fonts/Mona-Sans-Regular.ttf');
        }

        /*Scroll Bar*/
        /* width */
        ::-webkit-scrollbar {
            width: 3px;
        }

        /* Track */
        ::-webkit-scrollbar-track {
            background: #fff;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: #5B78D6;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: Mona Sans;

        }

        html,
        body {
            overflow-x: hidden;
        }

        a {
            color: black;
        }

        li,
        a {
            text-decoration: none;
        }

        a:hover {
            transition: all .2s ease-in-out;
            opacity: .7;
        }

        nav {
            width: 100%;
            height: 80px;
        }

        nav li,
        a {
            color: white;

        }

        .hamburger-icon {
            display: none;
        }


        .list-item-container1 img {
            margin-right: 40px;

        }

        .list-item-container1 ul {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .list-item-container1 li {
            margin-right: 35px;

        }


        .list-item-container2 li .btn-login {
            margin-right: 35px;
        }

        .list-item-container2 .btn-register {
            margin-right: 15px;
            border: .5px solid white;
            padding: 5px 5px;
        }

        /*
Welcome.blade.php
        */
        .start-up {
            background-image: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, 1)),
                url('/pictures/startup.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 1000px;
            margin-top: -80px;
        }



        .start-up div:nth-of-type(1):not(.input-container) {
            padding-top: 250px;
            padding-left: 75px;
        }

        .start-up h1 {
            color: white;
            font-size: 40px;
            margin-bottom: 5px;

        }

        .start-up h4 {
            color: gray;
            font-size: 20px;
            margin-bottom: 20px;

        }

        .start-up h3 {
            margin-bottom: 10px;
            margin-right: 5px;

        }

        .start-up input[type="text"] {
            font-size: 16px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: #f5f5f5;
            color: #333;
            width: 70%;
            border-radius: 10px 0 0 10px;
        }

        .start-up input[type="text"]:focus {
            border-color: #5B78D6;
            border: .5px solid #5B78D6;
            outline: none;
        }

        .input-container {
            width: 50%;
        }

        .input-container input[type="submit"] {
            margin-left: -5px;
            width: 20%;
            background-color: #5B78D6;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 0 10px 10px 0;
            cursor: pointer;
            font-weight: 600;
        }

        .input-container input[type="submit"]:hover {
            box-shadow: 1px 1px #5B78D6;
        }


        .start-up div:nth-of-type(2) {
            color: #fff;
            padding-top: 125px;
            padding-left: 75px;
        }

        .start-up div:nth-of-type(3) {
            color: #fff;
            margin-top: 50px;

        }

        .start-up div:nth-of-type(3) {
            color: #fff;
            margin-top: 50px;

        }

        .start-up div:nth-of-type(3) img {
            margin-right: 100px;
        }

        .login-page {
            background-image: url('/pictures/wave.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        }

        .register-page {
            background-image: url('/pictures/wave.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            width: 100%;
            height: 100vh;
        }

        /*

        .register-container{
            padding-top: 150px;
            width: 100vw;
            height: 100vh;
        }

        .register-input-container{
            width: 60vw;
            height: 70vh;
            border-radius: 10px;
            background: linear-gradient(rgba(91, 120, 214, .5), rgba(91, 120, 214, .5));
        }

        .register-input-container input[type="text"], .register-input-container input[type="email"], .register-input-container input[type="password"] {
            margin-top: 10px;
            padding: 5px;
            border-radius: 10px;
            width: 25vw;
        }

        .register-input-container label,
        .register-input-container p {
            color: white;
        }

        */
        .home-icon {
            color: white;
            cursor: pointer;
        }

        .register-container {
            padding-top: 100px;
            width: 100vw;
            height: 100vh;
        }

        .register-input-container {
            width: 70vw;
            height: 70vh;
            border-radius: 10px;
            background: white;
            box-shadow: .2px .5px #5B78D6;
        }

        .register-breadcrumb-container {
            margin-bottom: 20px;
        }

        .register-breadcrumb-item li {
            padding: 15px;
            width: 100%;
            background: #ECF1FE;
            color: #BEC8E9;
        }

        .register-breadcrumb-item li div {
            border-radius: 50%;
            background-color: #C1CBEA;
            color: #D9F0FE;
            height: 20px;
            width: 20px;
            font-size: 15px;
        }


        .register-breadcrumb-item li.active {
            padding: 15px;
            border-radius: 0 20px 20px 0;
            background: linear-gradient(90deg, rgba(162, 223, 254, 1) 0%, rgba(127, 203, 252, 1) 49%, rgba(107, 153, 251, 1) 82%);
            width: 100%;
            color: white;
        }

        .register-breadcrumb-item li.active div {
            border-radius: 50%;
            background-color: white;
            color: #BCD0F9;
            height: 20px;
            width: 20px;
            font-size: 15px;

        }

    
        .register-input-container select,
        .register-input-container input:not(input[type=radio]) {
            margin-top: 10px;
            margin-bottom: 20px;
            padding: 3px;
            border-radius: 5px;
            width: 90%;
            border: 1px solid #6BACFB;
        }

       
        .register-input-container select:focus,
        .register-input-container input:focus {
            border: 2px solid #5B78D6;
            outline: none;
        }

        .register-input-container select {
            -webkit-appearance: none;
            -moz-appearance: none;
        }

        .register-input-container .user-registration {
            padding: 10px;
        }

        .register-button a {
            color: #5B78D6;
        }

        .login-container {
            padding-top: 100px;
            width: 100vw;
            height: 100vh;
        }

        .tab{
            display: none;
        }

        .login-input-container {
            background: white;
            padding: 100px;
            width: 50vw;
            height: 50vh;
            border-radius: 10px;
            box-shadow: .2px .5px #5B78D6;

        }

        .login-input-container input[type="submit"],
        .register-input-container button {
            background-color: #5B78D6;
            color: white;
            padding: 5px;
            width: 5vw;
            cursor: pointer;
        }

        .login-input-container input[type="submit"]:hover {
            box-shadow: 1px 1px #5B78D6;
        }

        .login-input-container label,
        .login-input-container p {
            color: black;
        }

        .login-input-container a {
            color: #5B78D6;
        }

        .login-input-container input[type="email"],
        .login-input-container input[type="password"] {
            margin-top: 10px;
            padding: 5px;
            border-radius: 10px;
            width: 40vw;
            border: 1px solid #5B78D6;
            outline: none;

        }

        .login-input-container input[type="email"]:focus,
        .login-input-container input[type="password"]:focus {
            border: 2px solid #6BACFB;

        }


        @media only screen and (max-width: 600px) {
            .navbar ul {
                display: none;
            }

            .logo {
                margin-left: 10px;
            }

            .hamburger-icon {
                display: inline;
                margin-right: 10px;
            }

            .list-item-container1 {
                width: 100%;
            }

            .list-item-container1 img {
                margin-right: 0;
            }

            .start-up div:nth-of-type(1):not(.input-container) {
                padding-left: 5px;
                width: 100vw;
                text-align: center;
            }

            .start-up h1 {
                font-size: 26px;

            }

            .start-up h4 {
                font-size: 16px;

            }

            .input-container {
                width: 100vw;
                padding-left: 5px;

            }

            .start-up input[type="text"] {
                width: 65vw;
            }

            .input-container input[type="submit"] {
                width: 30vw
            }

            .start-up div:nth-of-type(2) {
                padding-top: 150px;
                padding-left: 5px;
            }

            .start-up div:nth-of-type(3) {
                margin-top: 5px;
            }

            .start-up div:nth-of-type(3) img {
                margin-top: 50px;
                margin-left: 20px;
                margin-right: 0;

            }


        }
    </style>
</head>

<body>
    @if (!Route::is('register', 'login'))

    <header>
        <nav class="navbar flex justify-between items-center">
            <div class="list-item-container1 flex justify-between items-center md:justify-around">
                <img class="logo sm:justify-center" src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
                <a href="javascript:void(0);" class="hamburger-icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i>
                </a>
                <ul class="nav-items">
                    <li><a href="/">Browse Books</a></li>
                    <li><a href="/about">Events and Programs</a></li>
                    <li><a href="/services">Policies and Guidelines</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="list-item-container2">
                <ul class="nav-items flex">
                    <li>
                        <a class="btn-login" href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Sign In</a>
                    </li>
                    <li>
                        <a class="btn-register" href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    @endif
    <main>
        @yield('content')
    </main>
    
</body>

</html>