<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function login()
    {
        return view('login');
    }
    public function home()
    {
        return view('home');
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

        // $users = User::all();
        // return view('admin-home', compact('users'));
    }

    public function showUser(){
        $data=array('users'=>DB::table('users')->orderBy('created_at')->paginate(8));
        return view('admin.showUser', $data);

    }
    public function showBook()
    {
        $book = array('books' => DB::table('books')->orderBy('created_at')->paginate(8));
        return view('admin.showBook', $book);
    }
}
