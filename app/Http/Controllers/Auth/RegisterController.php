<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; // Add this line for the correct import

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            $validator = $request->validate([
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
                'user_type' => 'required',
                'password' => 'required|min:8', // Adjust the minimum length as needed
            ]);


          User::create($validator);
            

            return redirect()->route('register')->with('success', 'Form submitted successfully!');
        }
    }
}

       