<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function findBookId($id){
        $book = Book::find($id);
        return response()->json($book);
    }
    public function findBookFilter(Request $request){
        // $filters = $request->input('college');
        // $filteredData = DB::table('books')->whereIn('college',$filters)->get();

        $selectedFilters = $request->query('selectedFilters');

        // return response()->json($filteredData);
    }
}
