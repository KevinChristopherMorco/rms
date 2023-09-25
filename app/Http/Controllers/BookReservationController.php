<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookReservation;
use Illuminate\Http\Request;

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

        $book = Book::find($validateData['book_id']);
        if (!$book) {
            return redirect()->route('user.catalog')->with('notFound', 'Invalid request');
        } elseif ($book->status === 'Out of stock') {
            return redirect()->route('user.catalog')->with('error', 'Book is out of stock. Reservation not allowed.');
        } else {
            BookReservation::create($validateData);
            return redirect()->route('user.catalog')->with('success', 'Book reservation request successful');
        }
    }
}
