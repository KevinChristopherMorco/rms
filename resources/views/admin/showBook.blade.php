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
                    <div class="flex justify-between items-center w-full">
                        <p class="text-lg font-bold">Book Catalog</p>
                        <button class="admin-container__add-book-btn p-2"><i class="fa-solid fa-circle-plus"></i> Add
                            Book</button>
                    </div>
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
                            @forelse ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->isbn }}</td>
                                <td class="action-btn book flex justify-center items-center" style="width: 100%;"><i
                                        class="fa-regular fa-eye px-2" data-book-id="{{$book->id}}"></i>
                                    <i class="fa-regular fa-pen-to-square px-2" data-book-id="{{$book->id}}"></i>
                                    <form class="delete-book-form"
                                        action="{{route('book.delete', ['book' => $book->id])}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button data-book-id="{{$book->id}}" class="btn-delete"> <i
                                                class="fa-solid fa-box-archive px-2"></i></button>
                                    </form>
                                </td>

                            </tr>
                            @empty
                            <td class="table__no-record" colspan="5">
                                <p class="text-xl font-bold"><i class="fa-solid fa-circle-exclamation"></i> No records
                                    found</p>
                            </td>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="py-6">
                        {{ $books->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('modal.admin.bookDetail')
    @include('modal.admin.editBookDetail')
    @include('modal.admin.add.addBook')

    @if(session('success'))
    <script>
        window.addEventListener('load', (e) =>{
        Swal.fire({
            icon: 'success',
            title: 'Changes were saved',
            customClass: {
            confirmButton: 'swal2-confirm-custom',
            cancelButton: 'swal2-cancel-custom',
                },
            })
        })
    </script>
    @endif

    @if(session('add'))
    <script>
        window.addEventListener('load', (e) =>{
        Swal.fire({
            icon: 'success',
            title: 'New Book Added',
            customClass: {
            confirmButton: 'swal2-confirm-custom',
            cancelButton: 'swal2-cancel-custom',
                },
            })
        })
    </script>
    @endif

    @if(session('archive'))
    <script>
        window.addEventListener('load', (e) =>{
    Swal.fire({
        icon: 'warning',
        title: 'Book Archived',
        text: 'Book was transferred to the archive module',
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
        const viewModal = document.querySelectorAll('.main-modal-view')
        const modalClose = document.querySelectorAll('.modal-close')
        const modalViewContent = document.querySelectorAll('.main-modal-view__modal-content');

        const modalContent = document.querySelectorAll('.modal-content-container');
        const loadingIndicators = document.querySelectorAll('.loading-indicator');
        const navbar = document.querySelectorAll('.navbar')
        const viewBook = document.querySelectorAll('.action-btn.book .fa-eye')
        const editBook = document.querySelectorAll('.action-btn.book .fa-pen-to-square')

        const editModal = document.querySelectorAll('.main-modal-edit')
        const modalEditContent = document.querySelectorAll('.main-modal-edit__modal-content');

        const archiveBook = document.querySelectorAll('.action-btn.book .btn-delete')
        const deleteForm = document.querySelectorAll('.delete-book-form')



        modalClose.forEach((modalCloseEl) => {
            modalCloseEl.addEventListener('click', (e) => {
                viewModal.forEach((viewModalEl) => {
                    viewModalEl.classList.add('hidden')
                })
            })
        })

        modalClose.forEach((modalCloseEl) => {
            modalCloseEl.addEventListener('click', (e) => {
                editModal.forEach((editModalEl) => {
                    editModalEl.classList.add('hidden')
                })
            })
        })

        viewBook.forEach((viewBookEl) => {
            viewBookEl.addEventListener('click', (e) => {
                viewModal.forEach((viewModalEl) => {
                    viewModalEl.classList.remove('hidden')
                })

                const bookId = viewBookEl.getAttribute('data-book-id')
                loadingIndicators.forEach((loadingIndicatorsEl) => {
                    loadingIndicatorsEl.style.display = 'block'
                })
                modalViewContent.forEach((modalViewContentEl) => {
                    modalViewContentEl.style.display = 'none'
                })
                axios.get(`/api/books/${bookId}`)
                    .then((response) => {
                        const bookData = response.data;

                        document.getElementById('title-row').innerHTML = bookData.title
                        document.getElementById('author-row').innerHTML = bookData.author
                        document.getElementById('isbn-row').innerHTML = bookData.isbn
                        document.getElementById('publish-row').innerHTML = bookData.date_published
                        document.getElementById('college-row').innerHTML = bookData.college
                        document.getElementById('genre-row').innerHTML = bookData.genre
                        document.getElementById('status-row').innerHTML = bookData.status
                        document.getElementById('stock-row').innerHTML = `${bookData.stock} copies`

                        loadingIndicators.forEach((loadingIndicatorsEl) => {
                            loadingIndicatorsEl.style.display = 'none'
                        })
                        modalViewContent.forEach((modalViewContentEl) => {
                            modalViewContentEl.style.display = 'block'
                        })

                    })
                    .catch((error) => {
                        console.log(error);

                    })

            })
        })
    </script>

    <script>
        const addBook = document.querySelectorAll('.admin-container__add-book-btn')
        const modalAddBook = document.querySelectorAll('.main-modal-add-book')
        const modalAddBookContent = document.querySelectorAll('.main-modal-add-book__modal-content')

        
        modalClose.forEach((modalCloseEl) => {
            modalCloseEl.addEventListener('click', (e) => {
                modalAddBook.forEach((modalAddBookEl) => {
                    modalAddBookEl.classList.add('hidden')
                })
            })
        })

        addBook.forEach((addBookEl) => {
            addBookEl.addEventListener('click', (e) => {
                modalAddBook.forEach((modalAddBookEl) => {
                    modalAddBookEl.classList.remove('hidden')
                })

              

            })
        })
    </script>

    <script>
        editBook.forEach((editBookEl) => {
            editBookEl.addEventListener('click', (e) => {
                editModal.forEach((editModalEl) => {
                    editModalEl.classList.remove('hidden')
                })

                const bookId = editBookEl.getAttribute('data-book-id')
                loadingIndicators.forEach((loadingIndicatorsEl) => {
                    loadingIndicatorsEl.classList.remove('hidden')
                })
                modalEditContent.forEach((modalEditContent) => {
                    modalEditContent.classList.add('hidden')
                })

                axios.get(`/api/books/${bookId}/edit`)
                    .then((response) => {
                        const bookData = response.data

                        document.getElementById('book-id').value = bookData.id;
                        document.getElementById('book-title').value = bookData.title;
                        document.getElementById('book-author').value = bookData.author;
                        document.getElementById('book-description').value = bookData.description;
                        document.getElementById('book-publish').value = bookData.date_published;
                        document.getElementById('book-college').value = bookData.college;
                        document.getElementById('book-genre').value = bookData.genre;
                        document.getElementById('book-status').value = bookData.status;
                        document.getElementById('book-stock').value = bookData.stock;




                            const modalEditBtn = document.querySelectorAll('.main-modal-edit__form')
                          

                            modalEditBtn.forEach((modalEditBtnEl) => {
                                modalEditBtnEl.addEventListener('submit', (e) => {
                                    e.preventDefault()
                                    Swal.fire({
                                        icon: 'warning',
                                        title: 'Modify Book Detail',
                                        text: 'Do you want to proceed?',
                                        showCancelButton: true,
                                        reverseButtons: true,
                                        customClass: {
                                            confirmButton: 'swal2-confirm-custom',
                                            cancelButton: 'swal2-cancel-custom',
                                        },
                                    }).then((result) => {
                                        if (result.value) {
                                         modalEditBtnEl.submit();

                                        }
                                    })
                                })
                            })
                            

                        loadingIndicators.forEach((loadingIndicatorsEl) => {
                            loadingIndicatorsEl.classList.add('hidden')
                        })
                        modalEditContent.forEach((modalEditContent) => {
                            modalEditContent.classList.remove('hidden')
                        })
                    })
            })
        })
    </script>

    <script>
        deleteForm.forEach((deleteFormEl) => {
        deleteFormEl.addEventListener('submit', (e) => {
            e.preventDefault()
            Swal.fire({
                icon: 'warning',
                title: 'Archive Book Information',
                text: 'Book data will be moved to the archive book page',
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