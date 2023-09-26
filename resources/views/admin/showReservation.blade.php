@extends('layouts.app')
@section('title', 'Book Reservations')
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
                        <p class="text-lg font-bold pb-4">Book Reservations</p>
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>Status</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $reservation)
                                    <tr>
                                        <td>{{ $reservation->title }}</td>
                                        <td>{{ $reservation->author }}</td>
                                        <td>{{ $reservation->reservation_status }}</td>
                                        <td class="action-btn" style="width: 20%;"><i class="fa-solid fa-eye px-2"></i>
                                            <i class="fa-solid fa-pen-to-square px-2"></i>
                                            <i class="fa-solid fa-trash px-2"></i>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="py-6">
                            {{ $reservations->links() }}
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
