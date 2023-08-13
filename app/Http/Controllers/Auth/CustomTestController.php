<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\test;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request; // Add this line for the correct import



class CustomTestController extends Controller
{
    public function create(Request $request)
    {
        if ($request->isMethod('post')) {
            // Handle form submission
            $validator = Validator::make($request->all(), [
                'name' => 'required',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            test::create([
                'name' => $request->input('name'),
            ]);

            return redirect()->route('register.create')->with('success', 'Form submitted successfully!');
        }

        // Display the form
    }
}
