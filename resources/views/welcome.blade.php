@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
<section class="start-up">
    <div>
        <h1>Discover a World of Knowledge and Imagination</h1>
        <h4>Explore our extensive catalog, check out the latest releases, and embark on a journey of learning and exploration</h4>
        <div class="input-container flex">
            <input type="text" placeholder="Search for your favorite book" name="" id="">
            <input type="submit" value="Let's Search">
        </div>
    </div>

    <div class="flex items-center justify-center md:justify-start">
        <h3>Trusted by the world’s leading organizations</h3><i class="fa-solid fa-arrow-turn-down"></i>
    </div>
    <div class="flex flex-col justify-center items-center sm:flex-row">
        <img src="/pictures/ala.png" width="300" height="150" alt="">
        <img src="/pictures/who.png" width="150" height="150" alt="">
        <img src="/pictures/cfla.png" width="150" height="150" alt="">
        <img src="/pictures/nlm.png" width="250" height="150" alt="">
    </div>
</section>


@endsection