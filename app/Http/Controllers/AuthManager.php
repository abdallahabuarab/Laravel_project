<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AuthManager extends Controller
{
    function login()
    {
        return view('login');
    }
    function logout() //?
    {
        auth()->logout();
        return redirect('login');
    }

    function register()
    {
        return view('register');
    }
    function loginpost(Request $request)
    {

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'

        ]);

        $success  = Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ]);

        if (!$success) {
            return back()->withErrors(['email' => 'Email or Password is Incorrect']);
        }

        return redirect(route('admin'));
    }
    function registerpost(RegisterRequest $request)
    {

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),

        ]);


        return  redirect(route('login'));
    }
}
