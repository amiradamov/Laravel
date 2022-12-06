<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;

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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15'
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $res = $user->save();

        if($res) {
            return back()->with('success', 'You have registered successfuly.');
        }else {
            return back()->width('fail', 'Something went wrong.');
        }
    }
    public function loginUser(Request $request) {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:15'
        ]);
        $user = User::where('email', '=', $require->email)->first()
    }
}