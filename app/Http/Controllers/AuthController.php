<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   
   
    public function login(Request $request)
    {
        // Define static credentials for now
        $validEmail = 'aditya@gmail.com';
        $validPassword = '12345';

        // Validate input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5',
        ]);

        // Check credentials
        if ($request->email === $validEmail && $request->password === $validPassword) {
            // Redirect to dashboard if credentials match
            return view('dashboard');
        } else {
            // Redirect back with an error message if credentials are incorrect
            return back()->withErrors([
                'email' => 'Invalid email or password.',
            ]);
        }
    }
}
