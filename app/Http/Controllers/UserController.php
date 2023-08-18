<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(){
        return view('login');
    }
    public function home(){
        return view('home');
    }


    public function register(){
        return view('register');
    }
  
    public function resetPassword(){
        return view('auth.passwords.email');
    }

   

    public function __construct()
    {
        $this->middleware('guest');
    }

 
}
