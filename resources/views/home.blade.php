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
                <div class="home-container__btn-group flex justify-start items-center bg-white">
                    <button class="home-container__btn-item home-container__btn-item--active p-2">Pending</button>
                    <button class="home-container__btn-item p-2">Approved</button>
                    <button class="home-container__btn-item p-2">Declined</button>
                </div>
                <hr>

                <div class="home-container__book-view home-container__book-status bg-white">
                    <p class="text-xl font-bold py-4 mb-4">Pending Request</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        @forelse ($pending as $pendingBookRequest)
                            <div class="col-span-1">
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $pendingBookRequest->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $pendingBookRequest->title }}</p>
                                        <p class="text-sm text-center py-4 px-2">{{ $pendingBookRequest->description }}</p>
                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="view-book-btn text-center"
                                                data-book-id="{{ $pendingBookRequest->id }}">View</button>
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
                        @empty
                            <div class="col-span-2">
                                <p class="text-center text-xl font-bold"><i
                                        class="fa-solid fa-hourglass-start fa-spin px-2"></i>No pending requests at the
                                    moment</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="py-6">
                        {{ $pending->links() }} 
                    </div>
                </div>

                <div class="home-container__book-view home-container__book-status bg-white hidden">
                    <p class="text-xl font-bold py-4 mb-4">Approved Request</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        @forelse ($approve as $approveBookRequest)
                            <div class="col-span-1">
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $approveBookRequest->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $approveBookRequest->title }}</p>
                                        <p class="text-sm text-center py-4 px-2">{{ $approveBookRequest->description }}</p>
                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="view-book-btn text-center"
                                                data-book-id="{{ $approveBookRequest->id }}">View</button>
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
                        @empty
                            <div class="col-span-2">

                                <p class="text-center text-xl font-bold"><i
                                        class="fa-solid fa-check-to-slot fa-bounce px-2"></i>No approved requests at
                                    the moment</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="py-6">
                        {{ $approve->links() }}
                    </div>
                </div>

                <div class="home-container__book-view home-container__book-status bg-white hidden">
                    <p class="text-xl font-bold py-4 mb-4">Declined Request</p>
                    <div class="grid md:grid-cols-2 gap-4">
                        @forelse ($decline as $declineBookRequest)
                            <div class="col-span-1">
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $declineBookRequest->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $declineBookRequest->title }}</p>
                                        <p class="text-sm text-center py-4 px-2">{{ $declineBookRequest->description }}</p>
                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="view-book-btn text-center"
                                                data-book-id="{{ $declineBookRequest->id }}">View</button>
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
                        @empty
                            <div class="col-span-2">
                                <p class="text-center text-xl font-bold"><i
                                        class="fa-solid fa-rectangle-xmark fa-bounce px-2"></i>No declined requests
                                    at the moment</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="py-6">
                        {{ $decline->links() }}
                    </div>
                </div>


                <div class="home-container__book-view mt-10 bg-white">
                    <p class="text-xl font-bold py-4 mb-4">My Books</p>

                    <div class="grid md:grid-cols-2 gap-4">
                        @forelse ($confirm as $confirmBookRequest)
                            <div class="col-span-1">
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $confirmBookRequest->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $confirmBookRequest->title }}</p>
                                        <p class="text-sm text-center py-4 px-2">{{ $confirmBookRequest->description }}</p>
                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex items-center gap-4">
                                            <button class="view-book-btn text-center"
                                                data-book-id="{{ $confirmBookRequest->id }}">View</button>
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
                        @empty
                            <div class="col-span-2">
                                <p class="text-center text-xl font-bold"><i class="fa-solid fa-book-open-reader fa-beat px-2"></i>Confirm the books in the approved tab to get started</p>
                            </div>
                        @endforelse
                    </div>
                    <div class="py-6">
                        {{ $confirm->links() }}
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
                        <div class="loading-indicator flex justify-center">
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
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>

                        <div class="modal-text">

                        </div>
                    </div>
                    <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button
                            class="focus:outline-none px-4 bg-purple-500 p-3 ml-3 rounded-lg text-white hover:bg-purple-400">Confirm</button>
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

    <script>
        tabButton = document.querySelectorAll('.home-container__btn-item')
        homeContainer = document.querySelectorAll('.home-container__book-status')

        const removeActiveState = () => {
            tabButton.forEach((tabButtonEl) => {
                tabButtonEl.classList.remove('home-container__btn-item--active')
            })
        }


        tabButton.forEach((tabButtonEl, tabButtonIndex) => {
            tabButtonEl.addEventListener('click', (e) => {
                homeContainer.forEach((homeContainerEl, i) => {
                    homeContainerEl.classList.add('hidden')
                })

                removeActiveState()

                tabButtonEl.classList.add('home-container__btn-item--active')

                homeContainer[tabButtonIndex].classList.remove('hidden')
            })
        })
    </script>
@endsection
