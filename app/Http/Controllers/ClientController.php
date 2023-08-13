<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ClientController extends Controller
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

    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle form submission
            $validator = Validator::make($request->all(), [
                'first_name' => 'required',
                'middle_name' => 'required',
                'last_name' => 'required',
                'birthdate' => 'required',
                'gender' => 'required',
                'card_number' => 'required',
                'email' => 'required|email',
                'house_no' => 'required',
                'barangay' => 'required',
                'city_municipality' => 'required',
                'province' => 'required',
                'member' => 'required',
                'password' => 'required|min:8', // Adjust the minimum length as needed
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            Client::create([
                'first_name' => $request['first_name'],
                'middle_name' => $request['middle_name'],
                'last_name' => $request['last_name'],
                'birthdate' => $request['birthdate'],
                'gender' => $request['gender'],
                'card_number' => $request['card_number'],
                'email' => $request['email'],
                'house_no' => $request['house_no'],
                'barangay' => $request['barangay'],
                'city_municipality' => $request['city_municipality'],
                'province' => $request['province'],
                'member' => $request['member'],
                'password' => $request['password'],
            ]);

            return redirect()->route('register')->with('success', 'Form submitted successfully!');
        }
    }
}
