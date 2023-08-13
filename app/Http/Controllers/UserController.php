<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function login(){
        return view('login');
    }

    public function register(){
        return view('register');
    }

    public function test(){
        return view('auth.test');
    }
}
