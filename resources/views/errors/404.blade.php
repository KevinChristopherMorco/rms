@viteReactRefresh
@vite('resources/css/app.css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

@section('title', __('Page Not Found'))

<div class="home-icon flex justify-start items-center p-2" style="background-color: #ECF1FE">
    <a class="text-black" href="/"> <i class="fa-solid fa-house mr-2"></i> Return to home</a>
</div>
<div class="flex justify-center items-center  404-error" style="height:100%; width: 100%; background-color: #ECF1FE">
    <img class="px-4" src="/pictures/ghost.png" width="150px" height="150px" alt="">
    <p class="text-center"> <span class="text-2xl font-bold">404 | Page not found </span><br>
        <span class="text-lg">Seems one of the developers fell asleep </span><br>
        For concerns and inquiries you may contact us <a class="text-blue-600 font-bold" href="https://www.facebook.com/kevin.morco.5/">here</a>.
    </p>
</div>
