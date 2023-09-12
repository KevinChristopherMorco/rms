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
                        <p class="text-white text-2xl font-bold mb-2">Hi {{ Auth::user()->first_name }}, Welcome to your
                            dashboard!</p>
                        <p class="text-white text-base font-500">We've added some recommendations based on your goals and
                            interests.</p>
                        <p class="text-white text-base font-500">Try out a course or path now — you can always start a new
                            one later.</p>
                    </div>
                </div>
                <p class="text-4xl font-bold mb-4">My Books</p>
                <div class="book-view">
                    <div class="grid grid-cols-2 gap-4">
                        @foreach ($books as $book)
                            <div class="col-span-1">
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{ $book->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $book->title }}</p>
                                        <p class="text-sm text-center pt-8">{{ $book->description }}</p>
                                    </div>
                                    <div class="card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="text-center">View</button>
                                            <div class="add-favorite flex justify-center items-center">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                            <div class="feedback flex justify-center items-center">
                                                <i class="fa-regular fa-comments"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
