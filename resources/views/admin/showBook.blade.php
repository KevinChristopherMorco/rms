@extends('layouts.app')
@section('title', 'Book Catalog')
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
                        <p class="text-lg font-bold pb-4">Book Catalog</p>
                        <table class="table-auto">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>ISBN</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td class="action-btn" style="width: 20%;"><i class="fa-solid fa-eye px-2"></i>
                                            <i class="fa-solid fa-pen-to-square px-2"></i>
                                            <i class="fa-solid fa-trash px-2"></i>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="py-6">
                            {{ $books->links() }}
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
