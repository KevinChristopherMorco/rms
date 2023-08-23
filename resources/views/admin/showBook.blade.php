@extends('layouts.app')
@section('title', 'Book Catalog')
@section('content')


    <section class="admin-container">
        <div class="admin-content-container">
            <div class="grid grid-cols-5 h-full">
                <div class="col-span-1">
                    @include('partials.sidebar')
                </div>
                <div class="col-span-4">
                    <div style="background-color: #4976E7; width:100%; height:20%;"></div>

                    <div class="table-container">
                        <p class="text-lg font-bold pb-4">User Information</p>
                        <table class="table-fixed">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Author</th>
                                    <th>ISBN</th>
                                    <th>Genre</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $book)
                                    <tr>
                                        <td>{{ $book->title }}</td>
                                        <td>{{ $book->author }}</td>
                                        <td>{{ $book->isbn }}</td>
                                        <td>{{ $book->genre }}</td>
                                        <td class="action-btn"><i class="fa-solid fa-eye px-2"></i>
                                            <i class="fa-solid fa-pen-to-square px-2"></i>
                                            <i class="fa-solid fa-trash px-2"></i>
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
