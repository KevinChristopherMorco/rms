@extends('layouts.app')
@section('title', 'Browse Books')

@section('content')
    <section class="guest-browse-container py-20">
        <div class="guest-browse-container__guest-browse-books">
            <div class="grid md:grid-cols-4 gap-4">
                <div class="md:col-span-1">
                    <div class="guest-browse-books__filter-container hidden md:block">
                        <p class="text-lg text-center font-bold py-4">Filter books</p>
                        <div class="px-2 py-2">
                            <div class="guest-browse-books__filter-base-container flex justify-between items-center px-2">
                                <p class="guest-browse-books__filter-base text-base font-bold py-2">Colleges</p> <i
                                    class="fa-solid fa-arrow-down"></i>
                            </div>
                            <ul
                                class="guest-browse-books__category-list guest-browse-books__category-list--college hidden px-2">
                                <form id="filter-form">
                                    @csrf
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of engineering">
                                            College of Engineering
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of industrial technology">
                                            College of Industrial Technology
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of business management and accountancy">
                                            College of Business Management and Accountancy
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of teacher education">
                                            College of Teacher Education
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of computer studies">
                                            College of Computer Studies
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of nursing and allied health">
                                            College of Nursing and Allied Health
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of arts and sciences">
                                            College of Arts and Sciences
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of criminal justice education ">
                                            College of Criminal Justice Education
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of hospitality management and tourism">
                                            College of Hospitality Management and Tourism
                                        </label>
                                    </li>
                            </ul>

                            <div class="guest-browse-books__filter-base-container flex justify-between items-center px-2">
                                <p class="guest-browse-books__filter-base text-base font-bold py-2">Genre</p> <i
                                    class="fa-solid fa-arrow-down"></i>
                            </div>
                            <ul
                                class="guest-browse-books__category-list guest-browse-books__category-list--genre hidden px-2">
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Biography/Authobiography">
                                        Biography/Authobiography
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Comics">
                                        Comics
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Cookbook">
                                        Cookbook
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Fantasy">
                                        Fantasy
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="History">
                                        History
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Horror">
                                        Horror
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Mathematics">
                                        Mathematics
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Mystery">
                                        Mystery
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Poetry">
                                        Poetry
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Religious/Spiritual">
                                        Religious/Spiritual
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Science">
                                        Science
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="category" value="Thriller">
                                        Thriller
                                    </label>
                                </li>
                            </ul>

                            <div class="guest-browse-books__filter-base-container flex justify-between items-center px-2">
                                <p class="guest-browse-books__filter-base text-base font-bold py-2">Availability</p> <i
                                    class="fa-solid fa-arrow-down"></i>
                            </div>

                            <ul
                                class="guest-browse-books__category-list guest-browse-books__category-list--availability hidden px-2">
                                <li>
                                    <label>
                                        <input type="checkbox" name="availability" value="in stock">
                                        In stock
                                    </label>
                                </li>

                                <li>
                                    <label>
                                        <input type="checkbox" name="availability" value="limited stock">
                                        Limited Stock
                                    </label>
                                </li>
                                <li>
                                    <label>
                                        <input type="checkbox" name="availability" value="out of stock">
                                        Out of Stock
                                    </label>
                                </li>

                            </ul>

                        </div>
                        <div class="px-6 py-6">
                            <button class="bg-violet-800 text-white p-2" type="submit">Filter</button>
                        </div>
                        </form>
                    </div>

                    <div class="guest-browse-books__filter-phone-container hidden">
                        <div class="guest-browse-books__phone-filter">
                            <p class="text-lg text-center font-bold py-4">Filter books</p>
                            <div class="px-2 py-2">
                                <div
                                    class="guest-browse-books__filter-base-phone-container flex justify-between items-center px-2">
                                    <p class="guest-browse-books__filter-base-phone text-base font-bold py-2">Colleges</p>
                                    <i class="fa-solid fa-arrow-down"></i>
                                </div>
                                <ul
                                    class="guest-browse-books__category-list-phone guest-browse-books__category-list-phone--college hidden px-2">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of engineering">
                                            College of Engineering
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of industrial technology">
                                            College of Industrial Technology
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of business management and accountancy">
                                            College of Business Management and Accountancy
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of teacher education">
                                            College of Teacher Education
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of computer studies">
                                            College of Computer Studies
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of nursing and allied health">
                                            College of Nursing and Allied Health
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college" value="college of arts and sciences">
                                            College of Arts and Sciences
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of criminal justice education ">
                                            College of Criminal Justice Education
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="college"
                                                value="college of hospitality management and tourism">
                                            College of Hospitality Management and Tourism
                                        </label>
                                    </li>
                                </ul>

                                <div
                                    class="guest-browse-books__filter-base-phone-container flex justify-between items-center px-2">
                                    <p class="guest-browse-books__filter-base-phone text-base font-bold py-2">Genre</p> <i
                                        class="fa-solid fa-arrow-down"></i>
                                </div>

                                <ul
                                    class="guest-browse-books__category-list-phone guest-browse-books__category-list-phone--genre hidden px-2">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Biography/Authobiography">
                                            Biography/Authobiography
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Comics">
                                            Comics
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Cookbook">
                                            Cookbook
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Fantasy">
                                            Fantasy
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="History">
                                            History
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Horror">
                                            Horror
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Mathematics">
                                            Mathematics
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Mystery">
                                            Mystery
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Poetry">
                                            Poetry
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Religious/Spiritual">
                                            Religious/Spiritual
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Science">
                                            Science
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="category" value="Thriller">
                                            Thriller
                                        </label>
                                    </li>
                                </ul>

                                <div
                                    class="guest-browse-books__filter-base-phone-container flex justify-between items-center px-2">
                                    <p class="guest-browse-books__filter-base-phone text-base font-bold py-2">Availability
                                    </p> <i class="fa-solid fa-arrow-down"></i>
                                </div>
                                <ul
                                    class="guest-browse-books__category-list-phone guest-browse-books__category-list-phone--availability hidden px-2">
                                    <li>
                                        <label>
                                            <input type="checkbox" name="availability" value="in stock">
                                            In stock
                                        </label>
                                    </li>

                                    <li>
                                        <label>
                                            <input type="checkbox" name="availability" value="limited stock">
                                            Limited Stock
                                        </label>
                                    </li>
                                    <li>
                                        <label>
                                            <input type="checkbox" name="availability" value="out of stock">
                                            Out of Stock
                                        </label>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="md:col-span-3">
                    <div class="guest-browse-container__guest-book-view">
                        <div class="grid md:grid-cols-3 gap-4">
                            @foreach ($books as $book)
                                <div class="home-container__card">
                                    <div class="home-container__card-header">
                                        <img src="{{ $book->book_image }}" alt="">
                                    </div>
                                    <div class="home-container__card-body">
                                        <p class="text-base font-bold text-center">{{ $book->title }}</p>
                                        <div class="flex justify-center items-center">
                                            <p class="text-sm text-center pt-4">{{ $book->description }}</p>
                                        </div>

                                    </div>
                                    <div class="home-container__card-footer px-4 ">
                                        <div class="flex justify-center items-center gap-4">
                                            <button class="view-book-btn text-center" data-book-id="{{ $book->id }}"
                                                data-user-id="{{ Auth::user()->id }}">View</button>
                                            <div class="home-container__add-favorite flex justify-center items-center">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
                                            <div class="home-container__feedback flex justify-center items-center">
                                                <i class="fa-regular fa-comments"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    {{ $books->links() }}
                </div>
            </div>
            <div class="flex justify-center items-center guest-browse-books__filter-icon-container mr-2 md:hidden">
                <i class="fa-solid fa-gears text-white"></i>
            </div>
        </div>
    </section>



    {{-- reserve modal --}}
    @include('modal.reserveBook')

    @if (session('success'))
        <script>
            window.addEventListener('load', () => {
                Swal.fire({
                    icon: 'success',
                    title: 'Reservation request successful!',
                    text: 'You may check the status of this request on your dashboard.',
                })
            })
        </script>
    @endif

    @if (session('error'))
        <script>
            window.addEventListener('load', () => {
                Swal.fire({
                    icon: 'error',
                    title: 'Invalid request!',
                    text: 'We cannot proceed to your request',
                })
            })
        </script>
    @endif
    @if (session('notFound'))
    <script>
        window.addEventListener('load', () => {
            Swal.fire({
                icon: 'error',
                title: 'Invalid request!',
                text: 'We cannot proceed to your request',
            })
        })
    </script>
@endif



    <script>
        const modal = document.querySelectorAll('.main-modal')
        const viewBtn = document.querySelectorAll('.view-book-btn')
        const modalClose = document.querySelectorAll('.modal-close')
        const modalContent = document.querySelectorAll('.modal-content-container');
        const loadingIndicators = document.querySelectorAll('.loading-indicator');
        const modalText = document.querySelectorAll('.modal-text');
        const navbar = document.querySelectorAll('.navbar')


        modal.forEach((modalEl) => {
            modalEl.classList.add('hidden')
        })


        // Function to generate modal content
        const generateModalContent = (bookData, userId) => {
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



<form action='{{ route('catalog.reserve') }}' method="POST">
    @csrf
    <input type="hidden" name="user_id" value="${userId}">
    <input type="hidden" name="book_id" value="${bookData.id}">
    <div class="reserve-post-input py-2">
    <p class="py-2 text-base font-bold">Reservation Date:</p>
    <div class="flex justify-center items-center">
        <label class="font-bold px-4" for="reserve_start"> Start Date </label>
        <input type="text" class="reserve-input p-2" id="reserve_start" name="reserve_start" onfocus="{this.type='date'}" onblur="if(this.value == '') {this.type='text'}" placeholder="Enter date here" required>
        <label class="font-bold px-4" for="reserve_end"> End Date </label>
        <input type="text" class="reserve-input p-2" id="reserve_end" name="reserve_end" onfocus="{this.type='date'}" onblur="if(this.value == '') {this.type='text'}" placeholder="Enter date here" required disabled>
    </div>
    
    <!--Footer-->
    <div class="flex justify-end mt-14">
        <button
            class="focus:outline-none px-4 bg-purple-500 p-3 ml-3 rounded-lg text-white hover:bg-purple-400">Reserve</button>
    </div>
</div>

</form>
<!-- Add more book data here -->
        `;
        }

        // this function is used for viewing the content through modal it includes the ID of the item as well as the endpoint

        const viewButtonFunction = () => {
            viewBtn.forEach((viewBtnEl, viewBtnIndex) => {
                viewBtnEl.addEventListener('click', (e) => {
                    modal.forEach((modalEl) => {
                        // if the viewbutton is clicked show the modal
                        modalEl.style.display = 'flex'
                        modalEl.classList.add('show')

                        // Hide the navbar if modal is opened
                        if (modalEl.classList.contains('show')) {
                            navbar.forEach((navbarEl) => {
                                navbarEl.classList.add('hidden')
                            })
                        }
                    })

                    // when modal is closed

                    modalClose.forEach((modalCloseEl) => {
                        modalCloseEl.addEventListener('click', (e) => {
                            modal.forEach((modalEl) => {
                                modalEl.style.display = 'none'
                                modalEl.classList.remove('show')

                            })
                            navbar.forEach((navbarEl) => {
                                navbarEl.classList.remove('hidden')
                            })
                        })
                    })


                    // get the book-id attribute through the button
                    const bookId = viewBtnEl.getAttribute('data-book-id');


                    // show a loader in modal when opened
                    loadingIndicators.forEach((loadingIndicator) => {
                        loadingIndicator.style.display = 'block'
                    });

                    // set the modal text to display none
                    modalText.forEach((modalTextEl) => {
                        modalTextEl.style.display = 'none'

                    });

                    // Make an Axios GET request to fetch data based on the book ID
                    axios.get(`/api/books/${bookId}`)
                        .then(response => {
                            const bookData = response.data;
                            const userId = viewBtnEl.getAttribute('data-user-id')

                            // generate the fetched data in the html of modalText
                            modalText.forEach((modalTextEl) => {
                                modalTextEl.innerHTML = generateModalContent(bookData,
                                    userId);
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

                            let reservePostRequest = document.querySelectorAll(
                                '.reserve-post-input')



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



                            const reserveStart = document.getElementById('reserve_start')
                            //get the current date through the constructor
                            reserveStart.min = new Date().toISOString().split("T")[0]

                            const reserveEnd = document.getElementById('reserve_end')

                            reserveStart.addEventListener('change', (e) => {
                                let reserveStartDate = reserveStart.value

                                let date = new Date(reserveStart.value);
                                let checkDay = date.getDay();
                                if (checkDay == 0 || checkDay == 6) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Weekends not allowed!',
                                        text: 'Please select weekdays only.',
                                    })
                                    reserveStart.value = ""
                                    reserveStart.type = "text"
                                    reserveStart.placeholder = "Enter date here"
                                }

                                if (reserveStart.value === "") {
                                    reserveEnd.disabled = true
                                    reserveEnd.value = ""
                                    reserveEnd.type = "text"
                                    reserveEnd.placeholder = "Enter date here"
                                } else {
                                    reserveEnd.disabled = false

                                    //set the date of the end date that will depend on the start date 
                                    let minEndDate = new Date(reserveStartDate);
                                    minEndDate.setDate(minEndDate.getDate() + 7);
                                    reserveEnd.min = minEndDate.toISOString().split("T")[0]
                                }
                            })

                            reserveEnd.addEventListener('change', (e) => {
                                let reserveEndDate = reserveEnd.value
                                let date = new Date(reserveEndDate)
                                let checkDay = date.getDay()

                                if (checkDay == 0 || checkDay == 6) {
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'Weekends not allowed!',
                                        text: 'Please select weekdays only.',
                                    })
                                    reserveEnd.value = ""
                                    reserveEnd.type = "text"
                                    reserveEnd.placeholder = "Enter date here"
                                }
                            })

                            //hide the loading indicator
                            loadingIndicators.forEach((loadingIndicator) => {
                                loadingIndicator.style.display = 'none'
                            });

                            //show modal text inner html
                            modalText.forEach((modalTextEl) => {
                                modalTextEl.style.display = 'block'

                            });

                        })
                        .catch(error => {
                            console.error('Error fetching book data:', error);
                        });



                })
            })
        }

        viewButtonFunction();
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
        document.getElementById('filter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            // Get selected filters
            const selectedFilters = Array.from(document.querySelectorAll('input[type=checkbox]:checked'))
                .map(checkbox => checkbox.value);

            // Make an Axios request to your Laravel backend
            axios.get(`/api/catalog/${selectedFilters}`)
                .then(response => {
                    console.log(response.data)
                })
                .catch(error => {
                    // Handle errors
                });
        });
    </script>

    <script>
        const filterBookGuest = document.querySelectorAll('.guest-browse-books__filter-icon-container')
        const filterBookIcon = document.querySelectorAll('.guest-browse-books__filter-icon-container i')
        const showFilterBook = document.querySelectorAll('.guest-browse-books__filter-phone-container')

        filterBookGuest.forEach((filterBookEl) => {
            filterBookEl.addEventListener('click', (e) => {
                showFilterBook.forEach((showFilterEl) => {
                    showFilterEl.classList.toggle('hidden')
                })
                filterBookIcon.forEach((filterBookIconEl) => {

                    if (filterBookIconEl.classList.contains('fa-gears')) {
                        filterBookIconEl.classList.remove('fa-gears')
                        filterBookIconEl.classList.add('fa-x')
                    } else {
                        filterBookIconEl.classList.add('fa-gears')
                        filterBookIconEl.classList.remove('fa-x')
                    }
                })

            })
        })

        const filterBase = document.querySelectorAll('.guest-browse-books__filter-base-container')
        const filterBasePhone = document.querySelectorAll('.guest-browse-books__filter-base-phone-container')
        const categoryList = document.querySelectorAll('.guest-browse-books__category-list')
        const categoryListPhone = document.querySelectorAll('.guest-browse-books__category-list-phone')
        const arrowIcon = document.querySelectorAll('.guest-browse-books__filter-base-container i')
        const arrowIconPhone = document.querySelectorAll('.guest-browse-books__filter-base-phone-container i')

        filterBase.forEach((filterBaseEl, filterBaseIndex) => {
            filterBaseEl.addEventListener('click', (e) => {

                arrowIcon.forEach((arrowIconEl, arrowIconIndex) => {
                    arrowIconEl.classList.add('fa-arrow-down')
                    arrowIconEl.classList.remove('fa-arrow-up')
                })
                arrowIcon[filterBaseIndex].classList.add('fa-arrow-up')


                categoryList.forEach((categoryListEl) => {
                    categoryListEl.classList.add('hidden')
                })

                categoryList[filterBaseIndex].classList.toggle('hidden')

            })
        })

        filterBasePhone.forEach((filterBasePhoneEl, filterBasePhoneIndex) => {
            filterBasePhoneEl.addEventListener('click', (e) => {

                arrowIconPhone.forEach((arrowIconPhoneEl, arrowIconIndex) => {
                    arrowIconPhoneEl.classList.add('fa-arrow-down')
                    arrowIconPhoneEl.classList.remove('fa-arrow-up')
                })
                arrowIconPhone[filterBasePhoneIndex].classList.add('fa-arrow-up')

                categoryListPhone.forEach((categoryListPhoneEl) => {
                    categoryListPhoneEl.classList.add('hidden')
                })

                categoryListPhone[filterBasePhoneIndex].classList.toggle('hidden')

            })
        })
    </script>

@endsection
