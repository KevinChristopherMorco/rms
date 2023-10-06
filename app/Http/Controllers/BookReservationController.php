<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookReservation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookReservationController extends Controller
{
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'reserve_start' => 'required',
            'reserve_end' => 'required',
        ]);

      $dateNow = Carbon::now('Asia/Manila')->format('Y-m-d');
      $authUser = Auth::id();

        $book = Book::findOrFail($validateData['book_id']);
        if (!$book) {
            return redirect()->route('user.catalog')->with('notFound', 'Invalid request');
        } elseif ($book->status === 'Out of stock') {
            return redirect()->route('user.catalog')->with('error', 'Book is out of stock. Reservation not allowed.');
        }elseif($validateData['reserve_start'] < $dateNow){
            return redirect()->route('user.catalog')->with('invalidDate', 'Invalid date.');
        }
        elseif($authUser != $validateData['user_id']){
            return redirect()->route('user.catalog')->with('notFound', 'Invalid user.');

        }
        
        else {
            BookReservation::create($validateData);
            return redirect()->route('user.catalog')->with('success', 'Book reservation request successful');
        }
    }
}
