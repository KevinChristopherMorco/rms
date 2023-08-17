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
</head>

<body>
@if (!Route::is('login', 'register', 'resetPassword'))
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