@extends('layouts.app')
@section('title', 'Admin Home')
@section('content')

    <section class="admin-container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="flex h-full">
            <div class="admin-sidebar-container">
                @include('partials.sidebar')
            </div>
            <div class="w-full">
                @include('partials.navAdmin')
                <div class="admin-container__introductory-note-container flex justify-center items-center">
                    <div class="admin-container__introductory-note flex items-center mb-8 p-4">
                        <div class=""><img src="pictures/book-icon.png" alt="loading"></div>
                        <div>
                            <p class="font-bold text-base text-center md:text-start md:text-2xl mb-2">Hi
                                {{ Auth::user()->first_name }}, Welcome to your
                                dashboard!</p>
                            <p class="font-500 text-sm text-center md:text-start md:text-base py-2">We've added
                                some
                                recommendations based on your goals and
                                interests.</p>
                            <p class="font-500 text-sm text-center md:text-start md:text-base ">Try out a course
                                or
                                path now — you can always start a new
                                one later.</p>
                        </div>
                    </div>
                </div>
                <div class="dashboard-card-container flex flex-wrap justify-center content-start text-white gap-4  ">
                    <div class="dashboard-card bg-red-700">
                        <p class="text-xl font-bold">Total Users</p>
                        <p class="">{{ $userCount }}</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                    <div class="dashboard-card bg-orange-700">
                        <p class="text-xl font-bold">Total Books</p>
                        <p>6574</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                </div>
                <div class="dashboard-card-container flex flex-wrap justify-center content-start text-white mt-4 gap-4 ">
                    <div class="dashboard-card bg-blue-700">
                        <p class="text-xl font-bold">Borrowed Books</p>
                        <p>2980</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                    <div class="dashboard-card bg-yellow-700">
                        <p class="text-xl font-bold">Returned Books</p>
                        <p>2678</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                </div>
            </div>
        </div>
        <script>
            let sidebarContainer = document.querySelector('.admin-sidebar-container')
            let sidebar = document.querySelector('.admin-sidebar')
            let sidebarHeading = document.querySelectorAll('.admin-sidebar-heading')
            let sidebarText = document.querySelectorAll('.admin-sidebar span')
            let sidebarBtn = document.querySelector('.sidebar-btn')
            sidebarBtn.addEventListener('click', (e) => {
                sidebarContainer.classList.toggle('admin-sidebar-container--toggle')

                sidebarHeading.forEach((sidebarHeadingEl) => {
                    sidebarHeadingEl.classList.toggle('hidden')
                })
                sidebarText.forEach((sidebarTextEl) => {
                    sidebarTextEl.classList.toggle('hidden')
                })

            })
        </script>
    </section>

@endsection
