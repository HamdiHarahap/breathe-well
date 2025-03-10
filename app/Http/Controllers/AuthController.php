<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('name', $request->input('username'))->first();

        if(!$user || !Hash::check($request->input('password'), $user->password)) {
            return redirect()->route('login')->with('error', 'Username atau Password Salah');
        }

        Auth::login($user);

        return redirect()->route('dashboard');
    }

    public function logout() 
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
