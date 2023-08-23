@extends('layouts.app')
@section('title', 'Admin Home')
@section('content')

<section class="admin-container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
    @endif
    <div class="admin-content-container flex">
        @include('partials.sidebar')
        <div class="stat-container grid grid-cols-2 gap-4 ml-2">
            <div class="col-span-1">
                <div>
                    <div class="chart">
                    </div>
                </div>
            </div>
            <div class="col-span-1">
                <div class="dashboard-card-container flex flex-wrap justify-center content-start text-white gap-4 ">
                    <div class="dashboard-card">
                        <p class="text-xl font-bold">Total Users</p>
                        <p class="">{{$userCount}}</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                    <div class="dashboard-card">
                        <p class="text-xl font-bold">Total Books</p>
                        <p>6574</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                </div>
                <div class="dashboard-card-container flex flex-wrap justify-center content-start text-white mt-4 gap-4 ">
                    <div class="dashboard-card">
                        <p class="text-xl font-bold">Borrowed Books</p>
                        <p>2980</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                    <div class="dashboard-card">
                        <p class="text-xl font-bold">Returned Books</p>
                        <p>2678</p>
                        <p class="text-xs">As of January 1, 2000</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection