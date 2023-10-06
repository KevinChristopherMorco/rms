<div class="main-modal-edit fixed w-full h-100 inset-0 z-50 overflow-hidden flex justify-center items-center animated fadeIn faster hidden"
    style="background: rgba(0,0,0,.7);">
    <div
        class="border border-teal-500 shadow-lg modal-container bg-white w-11/12 md:max-w-xl mx-auto rounded shadow-lg z-50 overflow-y-auto">
        <div class=" py-4 text-left px-6">
            <!--Title-->
            <div class="flex justify-between items-center pb-3">
                <p class="text-2xl font-bold">Modify Book Detail</p>
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

                <div class="main-modal-edit__modal-content">
                    <div class="main-modal-edit__input-container" style="overflow-y:scroll; height:500px;">

                        <form class="main-modal-edit__form" action="{{route('book.update')}}"  method="POST">
                            @csrf
                            @method('PUT')
                            <input class="modal-input" name="book_id" id="book-id" type="hidden">

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-title">Title</label>
                                </div>
                                <input class="modal-input" name="title" id="book-title" type="text">
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-author">Author</label>
                                </div>
                                <input class="modal-input" name="author" id="book-author" type="text">
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-description">Description</label>
                                </div>
                                <textarea name="description" id="book-description"></textarea>
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-publish">Date of Publication</label>
                                </div>
                                <input class="modal-input" name="date_published" id="book-publish" type="date">
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-college">College</label>
                                </div>
                                <select class="modal-input" name="college" id="book-college">
                                    <option selected disabled>${bookData.college}</option>
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
                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-genre">Genre</label>
                                </div>
                                <input class="modal-input" name="genre" id="book-genre" type="text">
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-status">Status</label>
                                </div>
                                <input class="modal-input" name="status" id="book-status" type="text">
                            </div>

                            <div class="main-modal-edit__input-group">
                                <div class="text-lg font-bold">
                                    <label for="book-stock">Stock</label>
                                </div>
                                <input class="modal-input" name="stock" id="book-stock" type="text">
                            </div>

                            <div class="main-modal-edit__input-group flex justify-end items-center">
                                <button class="main-modal-edit__btn-submit">Save</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>