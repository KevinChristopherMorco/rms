@extends('layouts.app')
@section('title', 'Admin Home')
@section('content')
<section class="home-container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="left-items grid grid-cols-3 gap-4">
        <div class="col-span-2">
            <div class="flex items-center introductory-note mb-8">
                <div class=""><img src="pictures/book-icon.png" alt="loading"></div>
                <div>
                    <p class="text-white text-2xl font-bold mb-2">Welcome to your dashboard</p>
                    <p class="text-white text-base font-500">We've added some recommendations based on your goals and interests.</p>
                    <p class="text-white text-base font-500">Try out a course or path now — you can always start a new one later.</p>
                </div>
            </div>
            <p class="text-4xl font-bold mb-4">My Books</p>
            <div class="book-view">


            </div>
        </div>
        <div class="col-span-1">
            <h1 class="font-bold text-lg">Welcome Back! {{Auth::user()->first_name}} {{Auth::user()->last_name}}</h1>
            <form action="/logout" method="POST">
                @csrf
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 border border-red-700 rounded" role="alert"><i class="fa-solid fa-power-off pr-2"></i>Logout</button>
            </form>
            <p>This is the admin dashboard</p>
        </div>
    </div>

</section>
@endsection