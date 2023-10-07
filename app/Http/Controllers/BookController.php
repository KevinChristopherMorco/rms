<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function findBookId($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
    }

    public function storeBook(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'author' => 'required',
            'isbn' => 'required|numeric|digits:13',
            'description' => 'required',
            'date_published' => 'required',
            'college' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'stock' => 'required',
            'book_image' => 'nullable'
        ]);

        $validate['title'] = Str::title($validate['title']);
        $validate['author'] = ucwords($validate['author']);
        $validate['genre'] = ucfirst($validate['genre']);
        $validate['status'] = ucfirst($validate['status']);



        Book::create($validate);
        return redirect()->route('admin.showBook')->with('add', 'New Book Created');
    }

    public function updateBook(Request $request)
    {
        $id = $request->input('book_id');
        $book = Book::findOrFail($id);
        // dd($request);
        // dd($request);

        $validateBook =  $request->validate([
            'title' => 'required',
            'author' => 'required',
            'description' => 'required',
            'date_published' => 'required',
            'college' => 'required',
            'genre' => 'required',
            'status' => 'required',
            'stock' => 'required',
        ]);

        $validateBook['title'] = Str::title($validateBook['title']);
        $validateBook['author'] = ucwords($validateBook['author']);
        $validateBook['genre'] = ucfirst($validateBook['genre']);
        $validateBook['status'] = ucfirst($validateBook['status']);

        $book->update($validateBook);
        return redirect()->route('admin.showBook')->with('success', 'Update');
    }

    public function deleteBook(Book $book, Request $request)
    {
        if ($book->trashed()) {
            $book->forceDelete();
            return redirect()->route('book.archive')->with('delete', 'Data has been deleted permanently');
        }
        $book->delete();
        return redirect()->route('admin.showBook')->with('archive', 'Data has been archived');
    }

    public function restoreBook(Book $book)
    {
        $book->restore();
        return redirect()->route('book.archive')->with('restore', 'Book has been restored');
    }
}
