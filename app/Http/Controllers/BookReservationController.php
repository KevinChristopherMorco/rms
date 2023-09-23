<?php

namespace App\Http\Controllers;

use App\Models\BookReservation;
use Illuminate\Http\Request;

class BookReservationController extends Controller
{
    public function store(Request $request){
        $validateData = $request->validate([
            'user_id' => 'required',
            'book_id' => 'required',
            'reserve_start' => 'required',
            'reserve_end' => 'required',
        ]);
        BookReservation::create($validateData);

        return redirect()->route('user.catalog')->with('success', 'Form submitted successfully!');

    }
}
