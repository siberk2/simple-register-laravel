<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function action(Request $request)
    {

        $request->validate([
            'username' => 'required|unique:users|max:255',
            'password' => 'required|min:8',
        ]);

        $user = User::create([
            'username' => $request->input('username'),
            'password' => Hash::make($request->input('password')),
        ]);

        if ($user) {
            Session::flash('success', 'Your account is active.');
            return redirect('/');
        } else {
            Session::flash('error', 'Unable to create account.');
            return redirect()->back();
        }

    }    
            
}    