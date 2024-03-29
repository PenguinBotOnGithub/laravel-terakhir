<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view("auth.login", [
            "title" => "Login"
        ]);
    }

    public function auth(Request $req)
    {
        $credentials = $req->validate([
            "email" => "required|email",
            "password" => "required"
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();

            return redirect()->intended("/dashboard");
        }

        return back()->withErrors(["error" => "Login gagal!"]);
    }

    public function deauth(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
