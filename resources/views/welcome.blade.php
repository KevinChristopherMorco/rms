@extends('layouts.app')

@section('title', 'RMS')

@section('content')
    <section class="start-up-container px-5">
        <div class="text-center md:mt-20 md:text-start">
            <p class="text-4xl md:text-5xl text-white font-bold py-4">Discover a World of Knowledge and Imagination</p>
            <p class="text-lg md:text-xl text-gray-500 py-4">Explore our extensive catalog, check out the latest releases,
                and embark on a
                journey of learning and exploration</p>
            <div class="start-up-container__input-container flex py-8">
                <input type="text" placeholder="Search for your favorite book" name="" id="">
                <input type="submit" value="Let's Search">
            </div>
        </div>

        <div class="flex items-center justify-center text-white md:justify-start mt-40 py-10">
            <p class="text-xl">Trusted by the world’s leading organizations</p><i class="fa-solid fa-arrow-turn-down"></i>
        </div>
        <div class="md:flex md:justify-center md:items-center">
            <div class="flex justify-center items-center py-4 md:px-10">
                <img class="" src="/pictures/ala.png" width="300" height="150" alt="">
            </div>
            <div class="flex justify-center items-center py-4 md:px-10">
                <img class="" src="/pictures/who.png" width="150" height="150" alt="">
            </div>
            <div class="flex justify-center items-center py-4 md:px-10">
                <img class="" src="/pictures/cfla.png" width="150" height="150" alt="">
            </div>
            <div class="flex justify-center items-center py-4 md:px-10">
                <img class="" src="/pictures/nlm.png" width="250" height="150" alt="">
            </div>
        </div>
    </section>
@endsection
