<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
    public function login() {
        return view("authentication.login");
    }
    public function registration() {
        return view("authentication.registration");
    }
    public function registerUser(Request $request) {
        $request->validate([
            'name' => ['required'],
            'email' => ['required'],
            'password' => ['required']
        ]);
    }
}