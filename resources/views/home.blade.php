@extends('layouts.app')
@section('title', 'Home')
@section('content')
<section class="home-container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="left-items grid grid-cols-3 h-full gap-4">
        <div class="col-span-2 px-8 py-8">
            <div class="flex items-center introductory-note mb-8">
                <div class=""><img src="pictures/book-icon.png" alt="loading"></div>
                <div>
                    <p class="text-white text-2xl font-bold mb-2">Hi  {{Auth::user()->first_name }}, Welcome to your dashboard!</p>
                    <p class="text-white text-base font-500">We've added some recommendations based on your goals and interests.</p>
                    <p class="text-white text-base font-500">Try out a course or path now — you can always start a new one later.</p>
                </div>
            </div>
            <p class="text-4xl font-bold mb-4">My Books</p>
            <div class="book-view">


            </div>
        </div>
        <div class="col-span-1 px-8 py-8">
           <p class="text-3xl font-bold">My Goals</p>
           <div class="mt-8" style="width: 100%; height:300px; border: 1px solid #150F3B"></div>
           <p class="text-3xl font-bold mt-8">My Interests</p>
           <div class="mt-8" style="width: 100%; height:300px; border: 1px solid #150F3B"></div>

        </div>
    </div>

</section>
@endsection