<div class="main-modal-add-book fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster hidden"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class=" py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Add Book</p>
                <div class="modal-close cursor-pointer z-50">
                    <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                        viewBox="0 0 18 18">
                        <path
                            d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                        </path>
                    </svg>
                </div>
            </div>
            <!--Body-->
            <div class="modal-content-container my-5">
                <div class="main-modal-add-book__modal-content">
                    <div class="main-modal-add-book__input-container" style="overflow-y:scroll; height:500px;">

                        <form class="main-modal-add-book__form" action="{{route('book.create')}}" method="POST">
                            @csrf
                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-title">Title</label>
                                </div>
                                <input class="modal-input" name="title" id="book-title" type="text" placeholder="Enter Book Title">
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-author">Author</label>
                                </div>
                                <input class="modal-input" name="author" id="book-author" type="text" placeholder="Enter Book Author">
                            </div>
                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-author">ISBN</label>
                                </div>
                                <input class="modal-input" name="isbn" id="isbn" type="text" placeholder="Enter Book ISBN">
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-description">Description</label>
                                </div>
                                <textarea name="description" id="book-description" placeholder="Enter Book Description"></textarea>
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-publish">Date of Publication</label>
                                </div>
                                <input class="modal-input" name="date_published" id="book-publish" type="text" onclick="(this.type='date')" onblur="this.type = (this.value == '') ? 'text' : 'date';" placeholder="Enter Publication Date" >
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-college">College</label>
                                </div>
                                <select class="modal-input" name="college" id="book-college">
                                    <option selected disabled>Choose a College</option>
                                    <option value="College of Engineering and Technology">College of Engineering and
                                        Technology</option>
                                    <option value="College of Industrial Technology">College of Industrial Technology
                                    </option>
                                    <option value="College of Business Management and Accountancy">College of Business
                                        Management and Accountancy</option>
                                    <option value="College of Teacher Education">College of Teacher Education</option>
                                    <option value="College of Computer Studies">College of Computer Studies</option>
                                    <option value="College of Nursing and Allied Health">College of Nursing and Allied
                                        Health</option>
                                    <option value="College of Criminal Justice Education">College of Criminal Justice
                                        Education</option>
                                    <option value="College of Arts and Sciences">College of Arts and Sciences</option>
                                    <option value="College of Hospitality Management and Tourism">College of Hospitality
                                        Management and Tourism</option>
                                </select>
                            </div>
                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-genre">Genre</label>
                                </div>
                                <input class="modal-input" name="genre" id="book-genre" type="text">
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-status">Status</label>
                                </div>
                                <input class="modal-input" name="status" id="book-status" type="text">
                            </div>

                            <div class="main-modal-add-book__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-stock">Stock</label>
                                </div>
                                <input class="modal-input" name="stock" id="book-stock" type="text">
                            </div>

                            <div class="main-modal-add-book__input-group flex justify-end items-center">
                                <button class="main-modal-add-book__btn-submit">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>