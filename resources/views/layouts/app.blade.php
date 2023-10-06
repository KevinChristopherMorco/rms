<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="https://images.squarespace-cdn.com/content/v1/64400fe934265712f946d45f/3452728a-1b44-41e6-b979-5bff0e2d096a/sundayPSLlogo-color.png"
        type="image/x-icon">
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    @viteReactRefresh
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    @if (!Route::is('login', 'register', 'resetPassword', 'admin', 'admin.showUser', 'admin.showBook', 'admin.showReservation', 'admin.suspend', 'book.archive'))
        <header>
            @auth
                @include('partials.navAuth')
            @else
                @include('partials.navGuest')
            @endauth
        </header>
    @endif

    @yield('content')

    @vite('resources/js/app.js')

</body>

</html>
