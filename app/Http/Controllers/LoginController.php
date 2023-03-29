<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // melakukan autentikasi
        if (Auth::attempt($credentials)) {
            // antisipasi hacking via cookie session dengan mengenerate ulang session
            $request->session()->regenerate();
            // meredirect melalui middleware
            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login failed!');
    }

    public function logout()
    {
        Auth::logout();

        // menghentikan session
        request()->session()->invalidate();

        // buat token baru
        request()->session()->regenerateToken();

        return redirect('/');
    }
}
