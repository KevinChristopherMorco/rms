@extends('layouts.app')
@section('title', 'Home')
@section('content')
    <section class="home-container py-20">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="home-container__book-container md:grid md:grid-cols-3 gap-4">
            <div class="col-span-2 px-8 py-8">
                <div class="home-container__introductory-note flex items-center mb-8">
                    <div class=""><img src="pictures/book-icon.png" alt="loading"></div>
                    <div>
                        <p class="text-white font-bold text-base text-center md:text-start md:text-2xl mb-2">Hi
                            {{ Auth::user()->first_name }}, Welcome to your
                            dashboard!</p>
                        <p class="text-white font-500 text-sm text-center md:text-start md:text-base py-2">We've added some
                            recommendations based on your goals and
                            interests.</p>
                        <p class="text-white font-500 text-sm text-center md:text-start md:text-base ">Try out a course or
                            path now — you can always start a new
                            one later.</p>
                    </div>
                </div>
                <p class="text-4xl font-bold mb-4">My Books</p>
                <div class="home-container__book-view">
                    <div class="grid md:grid-cols-2 gap-4">
                        @foreach ($books as $book)
                            <div class="col-span-1">
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $book->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $book->title }}</p>
                                        <p class="text-sm text-center py-4 px-2">{{ $book->description }}</p>
                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="view-book-btn text-center"
                                                data-book-id="{{ $book->id }}">View</button>
                                            <div class="home-container__add-favorite flex justify-center items-center">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                            <div class="home-container__feedback flex justify-center items-center">
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
            <div class="home-container__goal-interest-container col-span-1 px-8 py-8">
                <p class="text-3xl font-bold">My Goals</p>
                <div class="home-container__goal-interest-item mt-8"></div>
                <p class="text-3xl font-bold mt-8">My Interests</p>
                <div class="home-container__goal-interest-item mt-8"></div>
            </div>
        </div>

        <div class="main-modal fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster"
            style="background: rgba(0,0,0,.7);">
            <div
                class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class=" py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">View Book</p>
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
                            loading...
                        </div>

                        <div class="modal-text">

                        </div>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button
                            class="focus:outline-none modal-close px-4 bg-gray-400 p-3 rounded-lg text-black hover:bg-gray-300">Cancel</button>
                        <button
                            class="focus:outline-none px-4 bg-teal-500 p-3 ml-3 rounded-lg text-white hover:bg-teal-400">Reserve</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <script>
        const modal = document.querySelectorAll('.main-modal')
        const viewBtn = document.querySelectorAll('.view-book-btn')
        const modalClose = document.querySelectorAll('.modal-close')
        const modalContent = document.querySelectorAll('.modal-content-container');
        const loadingIndicators = document.querySelectorAll('.loading-indicator');
        const modalText = document.querySelectorAll('.modal-text');


        modal.forEach((modalEl) => {
            modalEl.style.display = 'none'
        })

        modalClose.forEach((modalCloseEl) => {
            modalCloseEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'none'
                })
            })
        })

        // Function to generate modal content
        const generateModalContent = (bookData) => {
            return `
        <div class="flex justify-between items-center pb-3">
            <p class="text-2xl font-bold">${bookData.title}</p>
        </div>
        <div class="my-5">
            <p>${bookData.description}</p>
        </div>
        <!-- Add more book data here -->
    `;
        }

        viewBtn.forEach((viewBtnEl, viewBtnIndex) => {
            viewBtnEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'flex'
                })
                const bookId = viewBtnEl.getAttribute('data-book-id');

                loadingIndicators.forEach((loadingIndicator, i) => {
                    loadingIndicator.style.display = 'block'
                });

                modalText.forEach((modalTextEl, i) => {
                    modalTextEl.style.display = 'none'

                });
                // Make an Axios GET request to fetch data based on the book ID
                axios.get(`/api/books/${bookId}`)
                    .then(response => {
                        const bookData = response.data;

                        modalText.forEach((modalTextEl) => {
                            modalTextEl.innerHTML = generateModalContent(bookData);
                        })

                        loadingIndicators.forEach((loadingIndicator, i) => {
                            loadingIndicator.style.display = 'none'
                            console.log(loadingIndicator)

                        });

                        modalText.forEach((modalTextEl, i) => {
                            modalTextEl.style.display = 'block'
                            console.log(modalTextEl)

                        });

                    })
                    .catch(error => {
                        console.error('Error fetching book data:', error);
                    });



            })
        })
    </script>

    <script>
        const heartIcon = document.querySelectorAll('.home-container__add-favorite')
        const feedbackIcon = document.querySelectorAll('.home-container__feedback')

        heartIcon.forEach((heartIconEl) => {
            heartIconEl.addEventListener('click', (e) => {
                Swal.fire({
                    icon: 'success',
                    title: 'My favorite!',
                    text: 'Book was added to your list of favorites',
                })
            })
        })

        feedbackIcon.forEach((feedbackIconEl) => {
            feedbackIconEl.addEventListener('click', (e) => {
                Swal.fire({
                    icon: 'success',
                    title: 'We hear you!',
                    text: 'Feedback was successfully added',
                })
            })
        })
    </script>
@endsection
