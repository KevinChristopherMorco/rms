<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function findBookId($id){
        $book = Book::find($id);
        return response()->json($book);
    }
}
