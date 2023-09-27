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
                                        <td class="action-btn book" style="width: 20%;"><i class="fa-regular fa-eye px-2" data-book-id="{{$book->id}}"></i>
                                            <i class="fa-regular fa-pen-to-square px-2"></i>
                                            <i class="fa-regular fa-trash-can px-2"></i>
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

        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-4xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class=" py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">User Details</p>
                        <div class="modal-close cursor-pointer z-50">
                            <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18"
                                height="18" viewBox="0 0 18 18">
                                <path
                                    d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <!--Body-->
                    <div class="modal-content-container my-5">
                        <div class="loading-indicator">
                            <div role="status">
                                <svg aria-hidden="true"
                                    class="inline w-8 h-8 mr-2 text-gray-200 animate-spin dark:text-gray-600 fill-purple-600"
                                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                                        fill="currentColor" />
                                    <path
                                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                                        fill="currentFill" />
                                </svg>
                            </div>
                        </div>

                        <div class="modal-text">

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

<script>
    const generateBookData = (bookData) => {
        return `
        
        <div style="overflow-y:scroll; height:500px;">
            <table>

<tr>
<td colspan="2" class="table-row-heading text-lg font-bold">Book Information</td>
</tr>
<tr>
<td class="font-bold">Title</td>
<td>${bookData.title}</td>
</tr>
<tr>
<td class="font-bold">Author</td>
<td>${bookData.author}</td>
</tr>
<tr>
<td class="font-bold">ISBN</td>
<td>${bookData.isbn}</td>
</tr>
<tr>
    <td class="font-bold">Date of Publication</td>
<td>${bookData.date_published}</td>
</tr>
<td class="font-bold">College</td>
<td>${bookData.college}</td>
</tr>

<td class="font-bold">Genre</td>
<td>${bookData.genre}</td>
</tr>
<tr>
<td colspan="2" class="table-row-heading text-lg font-bold">Book Status & Stocks</td>
</tr>

<td class="font-bold">Status</td>
<td>${bookData.status}</td>
</tr>

<td class="font-bold">Stock</td>
<td>${bookData.stock} copies</td>
</tr>
</table>

</div>

`

    }
</script>

        <script>
            const modal = document.querySelectorAll('.main-modal')
            const modalClose = document.querySelectorAll('.modal-close')
            const modalContent = document.querySelectorAll('.modal-content-container');
            const loadingIndicators = document.querySelectorAll('.loading-indicator');
            const modalText = document.querySelectorAll('.modal-text');
            const navbar = document.querySelectorAll('.navbar')
            const viewBook = document.querySelectorAll('.action-btn.book .fa-eye')
            const editBook = document.querySelectorAll('.action-btn.book .fa-pen-to-square')
            const archiveBook = document.querySelectorAll('.action-btn.book .fa-trash-can')


            modal.forEach((modalEl) => {
                modalEl.classList.add('hidden')
            })

            modalClose.forEach((modalCloseEl) => {
                modalCloseEl.addEventListener('click', (e) => {
                    modal.forEach((modalEl) => {
                        modalEl.classList.add('hidden')
                    })
                })
            })

            viewBook.forEach((viewBookEl) => {
                viewBookEl.addEventListener('click', (e) => {
                    modal.forEach((modalEl) => {
                        modalEl.classList.remove('hidden')
                    })

                    const bookId = viewBookEl.getAttribute('data-book-id')
                    loadingIndicators.forEach((loadingIndicatorsEl) => {
                        loadingIndicatorsEl.style.display = 'block'
                    })
                    modalText.forEach((modalTextEl) => {
                        modalTextEl.style.display = 'none'
                    })
                    axios.get(`/api/books/${bookId}`)
                        .then(function(response) {
                            const bookData = response.data;

                            modalText.forEach((modalTextEl) => {
                                modalTextEl.innerHTML = generateBookData(bookData)
                            })
                            loadingIndicators.forEach((loadingIndicatorsEl) => {
                                loadingIndicatorsEl.style.display = 'none'
                            })
                            modalText.forEach((modalTextEl) => {
                                modalTextEl.style.display = 'block'
                            })

                        })
                        .catch(function(error) {
                            console.log(error);

                        })

                })
            })
        </script>

        <script>
            editBook.forEach((editBookEl) => {
                editBookEl.addEventListener('click', (e) => {
                    Swal.fire({
                        icon: 'question',
                        title: 'Modify Book Information',
                        text: 'Are you sure you want to proceed?!',
                    })
                })
            })
        </script>

        <script>
            archiveBook.forEach((archiveBookEl) => {
                archiveBookEl.addEventListener('click', (e) => {
                    Swal.fire({
                        icon: 'warning',
                        title: 'Archive Book Information',
                        text: 'Are you sure you want to proceed?!',
                    })
                })
            })
        </script>

    </section>
@endsection
