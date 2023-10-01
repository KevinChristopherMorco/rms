<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function findBookId($id)
    {
        $book = Book::findOrFail($id);
        return response()->json($book);
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
            'college' =>'required',
            'genre' => 'required',
            'status' => 'required',
            'stock' =>'required',
        ]);
        
        $book->update($validateBook);
        return redirect()->route('admin.showBook')->with('success', 'Update');
    }

    public function deleteBook(Book $book, Request $request){
        if($book->trashed()){
            $book->forceDelete();
            return redirect()->route('book.archive')->with('delete', 'Data has been deleted permanently');

        }
        $book->delete();

        return redirect()->route('admin.showBook')->with('archive', 'Data has been archived');

    }

    public function archiveBook(){

        $books = array('books'=>Book::onlyTrashed()->orderBy('id')->paginate(8));

        return view('admin.archiveBook', $books);

    }

    public function restoreBook(Book $book){
        $book->restore();
    }

}
