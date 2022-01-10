<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function __construct()
    {
        //only geust can acceess this controller
        $this->middleware("guest");
    }

    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // 'email' => 'required|max:255|regex:/su.edu.krd/',
        //validate request data
    //     $this->validate($request, [
    //         'name' => 'required|max:255',
    //         'username' => 'required|max:255',
    //         'email' => 'required|max:255',
    //         'password' => 'required|confirmed'
    //     ],
    //     [
    //         'email.regex' => 'please provide university email',
    //     ]
    // );

        //store user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'user_type' => $request->user_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //sign in user
        auth()->attempt($request->only("email", "password"));

        //redirect
        return redirect()->route('home');
    }
}