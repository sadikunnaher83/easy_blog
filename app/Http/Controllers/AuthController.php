<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginPage()
    {
        return view('pages.Auth.login');
    }
    public function login(Request $request)
    {



    }
    public function registerPage()
    {
        return view('pages.Auth.register');
    }
    public function register(Request $request)
    {
        // Handle registration logic here
        // Validate the request, create a new user, etc.

        return redirect()->route('home');
    }

}
