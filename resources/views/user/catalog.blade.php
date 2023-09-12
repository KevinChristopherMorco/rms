@extends('layouts.app')
@section('title', 'Browse Books')

@section('content')

    <section class="browse-container">
        <div class="browse-books">
            <div class="grid grid-cols-4 gap-4">
                <div class="col-span-1">
                    <div class="filter-container">
                        <p class="text-lg text-center font-bold py-4">Filter books</p>
                        <div class="px-2 py-2">
                            <ul class="category-list">
                                <p class="text-base font-bold">Colleges</p>
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
                                <p class="text-base font-bold">Genre</p>
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
                                <p class="text-base font-bold">Availability</p>
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
                <div class="col-span-3">
                    <div class="guest-book-view">
                        <div class="grid grid-cols-3 gap-4">
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
                                            <button class="text-center" data-toggle="modal"
                                                data-target="#reserveModal">View</button>
                                            <div class="add-favorite flex justify-center items-center">
                                                <i class="fa-solid fa-heart"></i>
                                            </div>
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
        </div>
        <script>
            document.getElementById("demo").addEventListener("click", myFunction);

            function myFunction() {
                document.getElementById("demo").innerHTML = "YOU CLICKED ME!";
            }
        </script>
        @include('modal.reserveBook')
    </section>
@endsection
