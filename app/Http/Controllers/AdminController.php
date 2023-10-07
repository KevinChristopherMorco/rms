<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{
    public function adminHome()
    {
        $userCount = User::count();
        return view('admin.dashboard', compact('userCount'));
    }

    public function showUser()
    {
        $data = array('users' => DB::table('users')->orderBy('created_at')->whereNot('status', 'Suspended') ->paginate(8));
        return view('admin.user.showUser', $data);
    }
    public function showBook()
    {
        $books = array('books' => Book::orderBy('id', 'asc')->paginate(8));
        return view('admin.showBook', $books);
    }

    public function showReservation()
    {
        $bookReservation = array('reservations' => DB::table('books')->join('book_reservations', 'books.id', '=', "book_reservations.book_id")->join('users', 'book_reservations.user_id', '=', 'users.id')->select('books.*', 'book_reservations.*', 'users.*')->paginate(10));
        return view('admin.showReservation', $bookReservation);
    }

    public function showSuspended()
    {
        $user = array('users' => User::where('status', 'Suspended')->orderBy('last_name','asc')->paginate(8));
        return view('admin.user.showSuspended', $user);
    }

    public function archiveBook(){
        $books = array('books'=>Book::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate(8));
        return view('admin.archiveBook', $books);
    }
}
