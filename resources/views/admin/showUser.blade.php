@extends('layouts.app')
@section('title', 'User Management')
@section('content')


    <section class="admin-container">
        <div class="admin-content-container">
            <div class="grid grid-cols-5 h-full">
                <div class="col-span-1">
                    @include('partials.sidebar')
                </div>
                <div class="col-span-4">
                    <div style="background-color: #4976E7; width:100%; height:20%;"></div>

                    <div class="table-container">
                        <p class="text-lg font-bold pb-4">User Information</p>
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Library Card Number</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $user->first_name }}</td>
                                        <td>{{ $user->middle_name }}</td>
                                        <td>{{ $user->last_name }}</td>
                                        <td>{{ $user->card_number }}</td>
                                        <td class="action-btn"><i class="fa-solid fa-eye px-2"></i>
                                            <i class="fa-solid fa-pen-to-square px-2"></i>
                                            <i class="fa-solid fa-trash px-2"></i>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
