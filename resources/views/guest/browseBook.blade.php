@extends('layouts.app')
@section('title', 'Browse Books')

@section('content')

    <section class="guest-browse-container py-20">
        <div class="guest-browse-books">
            <div class="grid md:grid-cols-4 gap-4">
                <div class="md:col-span-1">
                    <div class="guest-browse-books__filter-container hidden md:block">
                        <p class="text-lg text-center font-bold py-4">Filter books</p>
                        <div class="px-2 py-2">
                            <div class="guest-browse-books__filter-base-container flex justify-between items-center px-2">
                                <p class="guest-browse-books__filter-base text-base font-bold py-2">Colleges</p> <i
                                    class="fa-solid fa-arrow-down"></i>
                            </div>
                            <ul class="guest-browse-books__category-list guest-browse-books__category-list--college hidden px-2">
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
                                        <input type="checkbox" name="college" value="college of nursing and allied health">
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
                            <ul class="guest-browse-books__category-list guest-browse-books__category-list--genre hidden px-2">
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
                    <div class="guest-book-view">
                        <div class="grid md:grid-cols-3 gap-4">
                            @foreach ($books as $book)
                                <div class="card">
                                    <div class="card-header">
                                        <img src="{{ $book->book_image }}" alt="">
                                    </div>
                                    <div class="card-body">
                                        <p class="text-base font-bold text-center">{{ $book->title }}</p>
                                        <div class="flex justify-center items-center">
                                            <p class="text-sm text-center pt-8">{{ $book->description }}</p>
                                        </div>
                                    </div>
                                    <div class="card-footer px-4 ">
                                        <div class="flex justify-center items-center gap-4">
                                            <button class="text-center">View</button>
                                            <div class="feedback flex justify-center items-center">
                                                <i class="fa-regular fa-comments"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-center items-center guest-browse-books__filter-settings-container mr-2 md:hidden">
                <i class="fa-solid fa-gears text-white"></i>
            </div>
        </div>
    </section>

    <script>
        const filterBookGuest = document.querySelectorAll('.guest-browse-books__filter-settings-container')
        const filterBookIcon = document.querySelectorAll('.guest-browse-books__filter-settings-container i')
        const showFilterBook = document.querySelectorAll('.guest-browse-books__filter-phone-container')

        filterBookGuest.forEach((filterBookEl) => {
            filterBookEl.addEventListener('click', (e) => {
                showFilterBook.forEach((showFilterEl) => {
                    showFilterEl.classList.toggle('hidden')
                })
                filterBookIcon.forEach((filterBookIconEl)=>{

                    if(filterBookIconEl.classList.contains('fa-gears')){
                        filterBookIconEl.classList.remove('fa-gears')
                        filterBookIconEl.classList.add('fa-x')
                    } else{
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
