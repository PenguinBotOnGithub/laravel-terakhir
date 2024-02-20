<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Session\Store;
use Illuminate\Support\Facades\Log;

class RegisterController extends Controller
{
    public function index()
    {
        return view("auth.register", [
            "title" => "Register"
        ]);
    }

    public function new(Request $req)
    {
        $validated = $req->validate([
            "email" => "required|email|unique:users",
            "name" => "required",
            "password" => "required|min:5|max:255",
            // "password-repeat" => "required|min:5|max:255"
        ]);

        /* if ($validated["password-repeat"] != $validated["password"]) {
            return redirect("/students")->with("success", "Passwords do not match");
        } */

        $validated["password"] = Hash::make($validated["password"]);

        User::create($validated);
        $req->session()->flash("success", "Pendaftaran berhasil");
        return redirect("/login");
    }
}
