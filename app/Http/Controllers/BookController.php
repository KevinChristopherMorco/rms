<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function findBookId($id)
    {
        $book = Book::find($id);
        return response()->json($book);
    }

    public function updateBook(Request $request)
    {
        $id = $request->input('book_id');
        $book = Book::find($id);
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



    // public function findBookFilter(Request $request){
    //     // $filters = $request->input('college');
    //     // $filteredData = DB::table('books')->whereIn('college',$filters)->get();

    //     $selectedFilters = $request->query('selectedFilters');

    //     // return response()->json($filteredData);
    // }
}
