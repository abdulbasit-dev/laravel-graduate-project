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
        // validate request data
        // $this->validate(
        //     $request,
        //     [
        //         'name' => ['required','max:255'],
        //         'username' => 'required|max:255',
        //         // 'email' => ['required','max:255','regex:/[\w]+@+((?i)(student.){0,1}su.edu.krd(?-i))$/im'],
        //         'password' => 'required|confirmed'
        //     ],
        //     [
        //         'email.regex'=>"Please provide a valid university email"
        //     ]
        // );

        //store user
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        //sign in user
        auth()->attempt($request->only("email", "password"));

        //redirect
        return redirect()->route('home');
    }
}
