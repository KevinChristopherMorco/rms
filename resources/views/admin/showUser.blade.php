@extends('layouts.app')
@section('title', 'User Management')
@section('content')


    <section class="admin-container">
        <div class="flex h-full">

            <div class="admin-sidebar-container">
                @include('partials.sidebar')
            </div>
            <div class="w-full">
                @include('partials.navAdmin')
                <div class="flex justify-center">
                    <div class="table-container p-6">
                        <p class="text-lg font-bold pb-4">User Details</p>
                        <table class="table-auto">
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
                        <div class="py-6">
                            {{ $users->links() }}
                        </div>
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
