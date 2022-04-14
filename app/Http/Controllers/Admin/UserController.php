<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // for admin
    public function index()
    {
        $users = User::notRole('student')->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    // for students
    public function student()
    {
        $users = User::role('student')->paginate(15);
        return view('admin.users.index', compact('users'));
    }
}
