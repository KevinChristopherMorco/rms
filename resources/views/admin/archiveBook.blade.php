@extends('layouts.app')
@section('title', 'Book Archive')
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
                    <p class="text-lg font-bold pb-4">Book Archive</p>
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
                                <td class="action-btn book flex justify-center items-center" style="width: 100%;">
                                    <form class="restore-book-form" action="{{route('book.restore', ['book'=> $book->id])}}" method="POST">
                                        @csrf
                                        <button> <i class="fa-solid fa-rotate-right px-2"></i></button>
                                    </form>
                                    <form class="delete-book-form"
                                        action="{{route('book.delete', ['book' => $book->id])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button data-book-id="{{$book->id}}" class="btn-delete"> <i
                                                class="fa-regular fa-trash-can px-2"></i></button>
                                    </form>
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

    @if(session('restore'))
    <script>
        window.addEventListener('load', (e) =>{
        Swal.fire({
            icon: 'success',
            title: 'Book Information Restored',
            text: 'Book is now available in the catalog',
            customClass: {
            confirmButton: 'swal2-confirm-custom',
            cancelButton: 'swal2-cancel-custom',
                },
            })
        })
    </script>
    @endif

@if(session('delete'))
<script>
    window.addEventListener('load', (e) =>{
    Swal.fire({
        icon: 'success',
        title: 'Book Permanently Deleted',
        customClass: {
        confirmButton: 'swal2-confirm-custom',
        cancelButton: 'swal2-cancel-custom',
            },
         })
    })
</script>
    @endif

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

    <script>
        const restoreForm = document.querySelectorAll('.restore-book-form')
        const deleteForm = document.querySelectorAll('.delete-book-form')

        restoreForm.forEach((restoreFormEl) => {
            restoreFormEl.addEventListener('submit', (e) => {
                e.preventDefault()
                Swal.fire({
                    icon: 'question',
                    title: 'Restore Book Information?',
                    text: 'Are you sure you want to proceed?',
                    showCancelButton: true,
                    reverseButtons: true,
                    allowOutsideClick: false,
                    customClass: {
                        confirmButton: 'swal2-confirm-custom',
                        cancelButton: 'swal2-cancel-custom',
                                },
                })
                .then((response)=>{
                    if(response.value){
                        restoreFormEl.submit()
                    }
                })
               
            })
        })

        deleteForm.forEach((deleteFormEl) => {
            deleteFormEl.addEventListener('submit', (e) => {
                e.preventDefault()
                Swal.fire({
                    icon: 'warning',
                    title: 'Delete Book Information?',
                    text: 'Data will be deleted permanently',
                    showCancelButton: true,
                    reverseButtons: true,
                    allowOutsideClick: false,
                    customClass: {
                        confirmButton: 'swal2-confirm-custom',
                        cancelButton: 'swal2-cancel-custom',
                                },
                })
                .then((response)=>{
                    if(response.value){
                        deleteFormEl.submit()
                    }
                })
               
            })
        })
    </script>


</section>
@endsection