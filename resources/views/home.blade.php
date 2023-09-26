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
                    <p class="text-sm"><span class="font-bold">Note:</span> Pending requests are subject to reviewed by the
                        library staffs. You may check this dashboard frequently for updates.</p>
                    @forelse ($pending as $pendingBookRequest)
                        <div class="home-container__book-request-container home-container__book-pending py-6 px-2 mt-10"
                            data-book-id="{{ $pendingBookRequest->id }}">
                            <p class="text-l">Book</p>
                            <p class="text-xl font-bold">{{ $pendingBookRequest->title }}</p>
                            <p class="text-lg">{{ $pendingBookRequest->author }}</p>
                            <div class="flex justify-end items-center">
                                <div class="home-container__add-favorite flex justify-center items-center mx-2">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="home-container__feedback flex justify-center items-center">
                                    <i class="fa-regular fa-comments"></i>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-xl font-bold"><i class="fa-solid fa-hourglass-start fa-spin px-2"></i>No
                            pending requests at the
                            moment</p>
                    @endforelse
                    <div class="py-6">
                        {{ $pending->links() }}
                    </div>
                </div>

                <div class="home-container__book-view home-container__book-status bg-white hidden">
                    <p class="text-xl font-bold py-4 mb-4">Approved Request</p>
                    <p class="text-sm"><span class="font-bold">Note:</span> Approved requests are needed to be confirmed by
                        the user for validation.</p>
                    @forelse ($approve as $approveBookRequest)
                        <div class="home-container__book-request-container home-container__book-accept py-6 px-2 mt-10"
                            data-book-id="{{ $approveBookRequest->id }}">
                            <p class="text-l">Book</p>
                            <p class="text-xl font-bold">{{ $approveBookRequest->title }}</p>
                            <p class="text-lg">{{ $approveBookRequest->author }}</p>
                            <div class="flex justify-end items-center">
                                <div class="home-container__add-favorite flex justify-center items-center mx-2">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="home-container__feedback flex justify-center items-center">
                                    <i class="fa-regular fa-comments"></i>
                                </div>
                            </div>
                        </div>
                    @empty

                        <p class="text-center text-xl font-bold"><i class="fa-solid fa-check-to-slot fa-bounce px-2"></i>No
                            approved requests at
                            the moment</p>
                    @endforelse
                    <div class="py-6">
                        {{ $approve->links() }}
                    </div>
                </div>

                <div class="home-container__book-view home-container__book-status bg-white hidden">
                    <p class="text-xl font-bold py-4 mb-4">Declined Request</p>
                    <p class="text-sm"><span class="font-bold">Note:</span> Declined requests are irreversible, you may want
                        to ask a staff why this had happened.</p>

                    @forelse ($decline as $declineBookRequest)
                        <div class="home-container__book-request-container home-container__book-decline py-6 px-2 mt-10"
                            data-book-id="{{ $declineBookRequest->id }}">
                            <p class="text-l">Book</p>
                            <p class="text-xl font-bold">{{ $declineBookRequest->title }}</p>
                            <p class="text-lg">{{ $declineBookRequest->author }}</p>
                            <div class="flex justify-end items-center">
                                <div class="home-container__add-favorite flex justify-center items-center mx-2">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="home-container__feedback flex justify-center items-center">
                                    <i class="fa-regular fa-comments"></i>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p class="text-center text-xl font-bold"><i
                                class="fa-solid fa-rectangle-xmark fa-bounce px-2"></i>No declined requests
                            at the moment</p>
                    @endforelse
                    <div class="py-6">
                        {{ $decline->links() }}
                    </div>
                </div>


                <div class="home-container__book-view mt-10 bg-white">
                    <p class="text-xl font-bold py-4 mb-4">My Books</p>

                    @forelse ($confirm as $confirmBookRequest)
                        <div class="home-container__book-request-container home-container__book-confirm py-6 px-2 mt-10"
                            data-book-id="{{ $confirmBookRequest->id }}">
                            <p class="text-l">Book</p>
                            <p class="text-xl font-bold">{{ $confirmBookRequest->title }}</p>
                            <p class="text-lg">{{ $confirmBookRequest->author }}</p>
                            <div class="flex justify-end items-center">
                                <div class="home-container__add-favorite flex justify-center items-center mx-2">
                                    <i class="fa-solid fa-heart"></i>
                                </div>
                                <div class="home-container__feedback flex justify-center items-center">
                                    <i class="fa-regular fa-comments"></i>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-2">
                            <p class="text-center text-xl font-bold"><i
                                    class="fa-solid fa-book-open-reader fa-beat px-2"></i>Confirm the books in the
                                approved tab to get started</p>
                        </div>
                    @endforelse
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
                class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-4xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
                <div class=" py-4 text-left px-6">
                    <!--Title-->
                    <div class="flex justify-between items-center pb-3">
                        <p class="text-2xl font-bold">Book Details</p>
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
                    {{-- <!--Footer-->
                    <div class="flex justify-end pt-2">
                        <button
                            class="focus:outline-none px-4 bg-purple-500 p-3 ml-3 rounded-lg text-white hover:bg-purple-400">Confirm</button>
                    </div> --}}
                </div>
            </div>
        </div>

    </section>
    <script>
        // variable element declarations

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
        const pendingBookContent = (bookData) => {
            return `
            <div class="flex justify-between items-center pb-3">
    <p class="book-title text-2xl font-bold">${bookData.title}</p>
    <div class="modal-pending-status-container flex justify-center items-center p-2">
    <p class="modal-pending-status text-xs font-bold">Pending</p>
    </div>
</div>
<div class="flex justify-center items-center">
    <p class="home-container__tags home-container__tags-college text-xs text-center px-2 py-2 mx-2 mt-4">${bookData.college}</p>
    <p class="home-container__tags home-container__tags-genre text-xs text-center px-2 py-2 mt-4">${bookData.genre}</p>

</div>
<div class="py-5">
    <p class="text-center text-sm">${bookData.description}</p>
</div>
<div class="py-2">
    <span class="font-bold">Availability:</span> <span class="book-availability text-sm">${bookData.status}</span>
</div>

<div class="py-2">
    <span class="font-bold">Author:</span> <span class="book-isbn text-sm"> ${bookData.author}</span>
</div>

<div class="py-2">
    <span class="font-bold">ISBN:</span> <span class="book-isbn text-sm"> ${bookData.isbn}</span>
</div>`;
        }

        const acceptBookContent = (bookData) => {
            return `
            <div class="flex justify-between items-center pb-3">
    <p class="book-title text-2xl font-bold">${bookData.title}</p>
    <div class="modal-accept-status-container flex justify-center items-center p-2">
    <p class="modal-accept-status text-xs font-bold">Approved</p>
    </div>
</div>
<div class="flex justify-center items-center">
    <p class="home-container__tags home-container__tags-college text-xs text-center px-2 py-2 mx-2 mt-4">${bookData.college}</p>
    <p class="home-container__tags home-container__tags-genre text-xs text-center px-2 py-2 mt-4">${bookData.genre}</p>

</div>
<div class="py-5">
    <p class="text-center text-sm">${bookData.description}</p>
</div>
<div class="py-2">
    <span class="font-bold">Availability:</span> <span class="book-availability text-sm">${bookData.status}</span>
</div>

<div class="py-2">
    <span class="font-bold">Author:</span> <span class="book-isbn text-sm"> ${bookData.author}</span>
</div>

<div class="py-2">
    <span class="font-bold">ISBN:</span> <span class="book-isbn text-sm"> ${bookData.isbn}</span>
</div>
<div class="flex justify-end items-center">
<button
            class="focus:outline-none px-4 bg-purple-500 p-3 ml-3 rounded-lg text-white hover:bg-purple-400">Confirm</button>
</div>
            `;
        }

        const declineBookContent = (bookData) => {
            return `
            <div class="flex justify-between items-center pb-3">
    <p class="book-title text-2xl font-bold">${bookData.title}</p>
    <div class="modal-decline-status-container flex justify-center items-center p-2">
    <p class="modal-decline-status text-xs font-bold">Declined</p>
    </div>
</div>
<div class="flex justify-center items-center">
    <p class="home-container__tags home-container__tags-college text-xs text-center px-2 py-2 mx-2 mt-4">${bookData.college}</p>
    <p class="home-container__tags home-container__tags-genre text-xs text-center px-2 py-2 mt-4">${bookData.genre}</p>

</div>
<div class="py-5">
    <p class="text-center text-sm">${bookData.description}</p>
</div>
<div class="py-2">
    <span class="font-bold">Availability:</span> <span class="book-availability text-sm">${bookData.status}</span>
</div>

<div class="py-2">
    <span class="font-bold">Author:</span> <span class="book-isbn text-sm"> ${bookData.author}</span>
</div>

<div class="py-2">
    <span class="font-bold">ISBN:</span> <span class="book-isbn text-sm"> ${bookData.isbn}</span>
</div>`;
        }

        const confirmBookContent = (bookData) => {
            return `
            <div class="flex justify-between items-center pb-3">
    <p class="book-title text-2xl font-bold">${bookData.title}</p>
   
</div>
<div class="flex justify-center items-center">
    <p class="home-container__tags home-container__tags-college text-xs text-center px-2 py-2 mx-2 mt-4">${bookData.college}</p>
    <p class="home-container__tags home-container__tags-genre text-xs text-center px-2 py-2 mt-4">${bookData.genre}</p>

</div>
<div class="py-5">
    <p class="text-center text-sm">${bookData.description}</p>
</div>
<div class="py-2">
    <span class="font-bold">Availability:</span> <span class="book-availability text-sm">${bookData.status}</span>
</div>

<div class="py-2">
    <span class="font-bold">Author:</span> <span class="book-isbn text-sm"> ${bookData.author}</span>
</div>

<div class="py-2">
    <span class="font-bold">ISBN:</span> <span class="book-isbn text-sm"> ${bookData.isbn}</span>
</div>
<div class="flex justify-end items-center">
<button
            class="focus:outline-none px-4 bg-purple-500 p-3 ml-3 rounded-lg text-white hover:bg-purple-400">Open PDF</button>
</div>

`;
        }
    </script>

    <script>
        const heartIcon = document.querySelectorAll('.home-container__add-favorite')
        const feedbackIcon = document.querySelectorAll('.home-container__feedback')

        heartIcon.forEach((heartIconEl) => {
            heartIconEl.addEventListener('click', (e) => {
                e.stopPropagation()
                Swal.fire({
                    icon: 'success',
                    title: 'My favorite!',
                    text: 'Book was added to your list of favorites',
                })
            })
        })

        feedbackIcon.forEach((feedbackIconEl) => {
            feedbackIconEl.addEventListener('click', (e) => {
                e.stopPropagation()

                Swal.fire({
                    icon: 'success',
                    title: 'We hear you!',
                    text: 'Feedback was successfully added',
                })
            })
        })
    </script>

    <script>
        // function for altering active state of request button
        const requestBtnActiveState = () => {
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
        }
        requestBtnActiveState();
    </script>

    <script>
        let pendingBook = document.querySelectorAll('.home-container__book-pending')
        const navbar = document.querySelectorAll('.navbar')

        pendingBook.forEach((pendingBookEl, i) => {
            pendingBookEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'flex'
                    modalEl.classList.add('show')

                    if (modalEl.classList.contains('show')) {
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.add('hidden')
                        })
                    }
                })

                modalClose.forEach((modalCloseEl) => {
                    modalCloseEl.addEventListener('click', (e) => {
                        modal.forEach((modalEl) => {
                            modalEl.classList.add('hidden')
                            modalEl.classList.remove('show')

                        })
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.remove('hidden')
                        })
                    })
                })

                const bookId = pendingBookEl.getAttribute('data-book-id');

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
                            modalTextEl.innerHTML = pendingBookContent(bookData);
                        })

                        // set the design color tags of colleges
                        const collegeTag = document.querySelectorAll(
                            '.home-container__tags-college')
                        collegeTag.forEach((collegeTagEl) => {
                            if (collegeTagEl.innerHTML ==
                                'College of Computer Studies') {
                                collegeTagEl.style.background = '#640ED8'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Business Management and Accountancy') {
                                collegeTagEl.style.background = '#F7B900'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Nursing and Allied Health') {
                                collegeTagEl.style.background = '#00F700'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Engineering and Technology') {
                                collegeTagEl.style.background = '#F74000'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Industrial Technology') {
                                collegeTagEl.style.background = '#0017A3'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Teacher Education') {
                                collegeTagEl.style.background = '#6363F7'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Criminal Justice Education') {
                                collegeTagEl.style.background = '#525252'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Arts and Sciences') {
                                collegeTagEl.style.background = '#F7007E'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Hospitality Management and Tourism') {
                                collegeTagEl.style.background = '#C00000'
                            } else {
                                collegeTagEl.style.background = '#511D1A'

                            }
                        })

                        // set the design color tags of availability
                        const bookAvailability = document.querySelectorAll('.book-availability')
                        bookAvailability.forEach((bookAvailabilityEl) => {
                            if (bookAvailabilityEl.innerHTML == 'In stock') {
                                bookAvailabilityEl.classList.add('in-stock')
                            } else if (bookAvailabilityEl.innerHTML ==
                                'Limited stock') {
                                bookAvailabilityEl.classList.add('limited-stock')
                            } else {
                                reservePostRequest.forEach((reservePostRequestEl) => {
                                    reservePostRequestEl.classList.add('hidden')
                                })
                                bookAvailabilityEl.classList.add('out-stock')
                            }
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
        let acceptBook = document.querySelectorAll('.home-container__book-accept')

        acceptBook.forEach((acceptBookEl, i) => {
            acceptBookEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'flex'
                    modalEl.classList.add('show')

                    if (modalEl.classList.contains('show')) {
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.add('hidden')
                        })
                    }
                })

                modalClose.forEach((modalCloseEl) => {
                    modalCloseEl.addEventListener('click', (e) => {
                        modal.forEach((modalEl) => {
                            modalEl.classList.add('hidden')
                            modalEl.classList.remove('show')

                        })
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.remove('hidden')
                        })
                    })
                })

                const bookId = acceptBookEl.getAttribute('data-book-id');

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
                            modalTextEl.innerHTML = acceptBookContent(bookData);
                        })

                        // set the design color tags of colleges
                        const collegeTag = document.querySelectorAll(
                            '.home-container__tags-college')
                        collegeTag.forEach((collegeTagEl) => {
                            if (collegeTagEl.innerHTML ==
                                'College of Computer Studies') {
                                collegeTagEl.style.background = '#640ED8'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Business Management and Accountancy') {
                                collegeTagEl.style.background = '#F7B900'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Nursing and Allied Health') {
                                collegeTagEl.style.background = '#00F700'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Engineering and Technology') {
                                collegeTagEl.style.background = '#F74000'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Industrial Technology') {
                                collegeTagEl.style.background = '#0017A3'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Teacher Education') {
                                collegeTagEl.style.background = '#6363F7'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Criminal Justice Education') {
                                collegeTagEl.style.background = '#525252'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Arts and Sciences') {
                                collegeTagEl.style.background = '#F7007E'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Hospitality Management and Tourism') {
                                collegeTagEl.style.background = '#C00000'
                            } else {
                                collegeTagEl.style.background = '#511D1A'

                            }
                        })

                        // set the design color tags of availability
                        const bookAvailability = document.querySelectorAll('.book-availability')
                        bookAvailability.forEach((bookAvailabilityEl) => {
                            if (bookAvailabilityEl.innerHTML == 'In stock') {
                                bookAvailabilityEl.classList.add('in-stock')
                            } else if (bookAvailabilityEl.innerHTML ==
                                'Limited stock') {
                                bookAvailabilityEl.classList.add('limited-stock')
                            } else {
                                reservePostRequest.forEach((reservePostRequestEl) => {
                                    reservePostRequestEl.classList.add('hidden')
                                })
                                bookAvailabilityEl.classList.add('out-stock')
                            }
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
        let declineBook = document.querySelectorAll('.home-container__book-decline')

        declineBook.forEach((declineBookEl, i) => {
            declineBookEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'flex'
                    modalEl.classList.add('show')

                    if (modalEl.classList.contains('show')) {
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.add('hidden')
                        })
                    }
                })

                modalClose.forEach((modalCloseEl) => {
                    modalCloseEl.addEventListener('click', (e) => {
                        modal.forEach((modalEl) => {
                            modalEl.classList.add('hidden')
                            modalEl.classList.remove('show')

                        })
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.remove('hidden')
                        })
                    })
                })

                const bookId = declineBookEl.getAttribute('data-book-id');

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
                            modalTextEl.innerHTML = declineBookContent(bookData);
                        })

                        // set the design color tags of colleges
                        const collegeTag = document.querySelectorAll(
                            '.home-container__tags-college')
                        collegeTag.forEach((collegeTagEl) => {
                            if (collegeTagEl.innerHTML ==
                                'College of Computer Studies') {
                                collegeTagEl.style.background = '#640ED8'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Business Management and Accountancy') {
                                collegeTagEl.style.background = '#F7B900'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Nursing and Allied Health') {
                                collegeTagEl.style.background = '#00F700'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Engineering and Technology') {
                                collegeTagEl.style.background = '#F74000'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Industrial Technology') {
                                collegeTagEl.style.background = '#0017A3'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Teacher Education') {
                                collegeTagEl.style.background = '#6363F7'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Criminal Justice Education') {
                                collegeTagEl.style.background = '#525252'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Arts and Sciences') {
                                collegeTagEl.style.background = '#F7007E'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Hospitality Management and Tourism') {
                                collegeTagEl.style.background = '#C00000'
                            } else {
                                collegeTagEl.style.background = '#511D1A'

                            }
                        })

                        // set the design color tags of availability
                        const bookAvailability = document.querySelectorAll('.book-availability')
                        bookAvailability.forEach((bookAvailabilityEl) => {
                            if (bookAvailabilityEl.innerHTML == 'In stock') {
                                bookAvailabilityEl.classList.add('in-stock')
                            } else if (bookAvailabilityEl.innerHTML ==
                                'Limited stock') {
                                bookAvailabilityEl.classList.add('limited-stock')
                            } else {
                                reservePostRequest.forEach((reservePostRequestEl) => {
                                    reservePostRequestEl.classList.add('hidden')
                                })
                                bookAvailabilityEl.classList.add('out-stock')
                            }
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
        let confirmBook = document.querySelectorAll('.home-container__book-confirm')

        confirmBook.forEach((confirmBookEl, i) => {
            confirmBookEl.addEventListener('click', (e) => {
                modal.forEach((modalEl) => {
                    modalEl.style.display = 'flex'
                    modalEl.classList.add('show')

                    if (modalEl.classList.contains('show')) {
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.add('hidden')
                        })
                    }
                })

                modalClose.forEach((modalCloseEl) => {
                    modalCloseEl.addEventListener('click', (e) => {
                        modal.forEach((modalEl) => {
                            modalEl.classList.add('hidden')
                            modalEl.classList.remove('show')

                        })
                        navbar.forEach((navbarEl) => {
                            navbarEl.classList.remove('hidden')
                        })
                    })
                })

                const bookId = confirmBookEl.getAttribute('data-book-id');

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
                            modalTextEl.innerHTML = confirmBookContent(bookData);
                        })

                        // set the design color tags of colleges
                        const collegeTag = document.querySelectorAll(
                            '.home-container__tags-college')
                        collegeTag.forEach((collegeTagEl) => {
                            if (collegeTagEl.innerHTML ==
                                'College of Computer Studies') {
                                collegeTagEl.style.background = '#640ED8'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Business Management and Accountancy') {
                                collegeTagEl.style.background = '#F7B900'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Nursing and Allied Health') {
                                collegeTagEl.style.background = '#00F700'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Engineering and Technology') {
                                collegeTagEl.style.background = '#F74000'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Industrial Technology') {
                                collegeTagEl.style.background = '#0017A3'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Teacher Education') {
                                collegeTagEl.style.background = '#6363F7'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Criminal Justice Education') {
                                collegeTagEl.style.background = '#525252'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Arts and Sciences') {
                                collegeTagEl.style.background = '#F7007E'
                            } else if (collegeTagEl.innerHTML ==
                                'College of Hospitality Management and Tourism') {
                                collegeTagEl.style.background = '#C00000'
                            } else {
                                collegeTagEl.style.background = '#511D1A'

                            }
                        })

                        // set the design color tags of availability
                        const bookAvailability = document.querySelectorAll('.book-availability')
                        bookAvailability.forEach((bookAvailabilityEl) => {
                            if (bookAvailabilityEl.innerHTML == 'In stock') {
                                bookAvailabilityEl.classList.add('in-stock')
                            } else if (bookAvailabilityEl.innerHTML ==
                                'Limited stock') {
                                bookAvailabilityEl.classList.add('limited-stock')
                            } else {
                                reservePostRequest.forEach((reservePostRequestEl) => {
                                    reservePostRequestEl.classList.add('hidden')
                                })
                                bookAvailabilityEl.classList.add('out-stock')
                            }
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
@endsection
