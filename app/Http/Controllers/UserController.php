<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Database\Query\JoinClause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function guestBrowse()
    {
        $data = array('books' => DB::table('books')->orderBy('created_at')->paginate(5));
        return view('guest.browseBook', $data);
    }
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        $authSessionId=Auth::id();
        $data = array('books'=> DB::table('books')->join('book_reservations', 'books.id', '=', 'book_reservations.book_id')->where('book_reservations.user_id', '=',  $authSessionId)->select('books.*')->paginate(10));
        return view('home', $data);
    }

    public function catalog()
    {
        $data= array('books'=>DB::table('books')->leftJoin('book_reservations', function(JoinClause $join){
            $authSessionId=Auth::id();
            $join->on('book_reservations.book_id', '=', 'books.id')->where('book_reservations.user_id', '=', $authSessionId);
        })->whereNull('book_reservations.user_id')->select('books.*')->paginate(10)
    );
        return view('user.catalog', $data);
    }


    public function register()
    {
        return view('register');
    }

    public function resetPassword()
    {
        return view('auth.passwords.email');
    }

    public function show(User $user)
    {
        return view('user.show', compact('user'));
    }

    public function adminHome()
    {
        $userCount = User::count();
        return view('admin.adminHome', compact('userCount'));

    }

    public function showUser()
    {
        $data = array('users' => DB::table('users')->orderBy('created_at')->paginate(8));
        return view('admin.showUser', $data);
    }
    public function showBook()
    {
        $book = array('books' => DB::table('books')->orderBy('created_at')->paginate(8));
        return view('admin.showBook', $book);
    }
}
