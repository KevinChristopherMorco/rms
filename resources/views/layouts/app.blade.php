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
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav li,
        a {
            color: white;

        }

        .list-item-container1 {
            display: flex;
            align-items: center;
            justify-content: space-around;
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

        .list-item-container2 {
            display: flex;
            align-items: center;
        }

        .list-item-container2 a:nth-of-type(1) {
            margin-right: 35px;
        }

        .list-item-container2 a:nth-of-type(2) {
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
            margin-bottom: 10px;

        }

        .start-up h4 {
            color: gray;
            font-size: 20px;
            margin-bottom: 10px;

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
            display: flex;
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
            display: flex;
            color: #fff;
            align-items: center;
            padding-top: 125px;
            padding-left: 75px;
        }

        .start-up div:nth-of-type(3) {
            display: flex;
            color: #fff;
            align-items: center;
            justify-content: center;
            margin-top: 50px;

        }

        .start-up div:nth-of-type(3) img {
            margin-right: 100px;
        }



        @media only screen and (max-width: 600px) {
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
                display: flex;
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
                text-align: center;
            }

            .start-up div:nth-of-type(3) {
                display: block;
                text-align: center;
                margin-top: 10px;


            }

            .start-up div:nth-of-type(3) img {
                margin-top: 20px;
                margin-left: 20px;
                margin-right: 0;
                width: 130px;
                height: 100px;
            }

        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="list-item-container1">
                <img src="/pictures/book-logo.png" width="75" height="75" alt="RMS">
                <ul>
                    <li><a href="/">Browse Books</a></li>
                    <li><a href="/about">Events and Programs</a></li>
                    <li><a href="/services">Policies and Guidelines</a></li>
                    <li><a href="/contact">Contact</a></li>
                </ul>
            </div>
            <div class="list-item-container2">
                <a href="{{ route('login') }}"><i class="fa-solid fa-right-to-bracket"></i> Sign In</a>
                <a href="{{ route('register') }}"><i class="fa-solid fa-user-plus"></i> Sign Up</a>
            </div>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>