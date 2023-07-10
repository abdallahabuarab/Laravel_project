<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            // Generate and return an API token
            $token = $user->createToken('API Token')->plainTextToken;
            return response()->json(['token' => $token]);
        }

        // Authentication failed
        return response()->json(['error' => 'Unauthorized'], 401);
    }
}
