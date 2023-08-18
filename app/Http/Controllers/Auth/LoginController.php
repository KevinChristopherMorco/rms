<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
   
    public function process(Request $request)
    {

       $validator = $request->validate([
        'email' => 'required|email',
        'password'=> 'required|min:8',
       ]);
    
        if(auth()->attempt($validator)){
            $request->session()->regenerate();
            return redirect('/home')->with('success', 'Logged in successfully');

            // return redirect()->route('home')->with('success', 'Login Successful');

            //return view('dashboard');
           // return redirect('https://google.com')->with('success', 'Logged in successfully');

        }
        return redirect()->route('login')->with('error', 'Invalid credentials');

    }

    public function logout(Request $request){
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
