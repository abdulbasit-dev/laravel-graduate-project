<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;
use Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        View::share([
            'title' => "User",
            'desc' => "List of Users"
        ]);
    }

    // for admin
    public function index()
    {
        $users = User::notRole(['student', 'teacher'])->paginate(15);
        return view('admin.users.index', compact('users'));
    }

    // for students
    public function student()
    {
        return view('admin.users.student');
    }

    // for teachers
    public function teacher()
    {
        return view('admin.users.teachers');
    }

    public function create()
    {
        $roles = Role::pluck('name');
        return view('admin.users.create', compact('roles'));
    }

    public function store(Request $request)
    {

        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'max:255'],
                'role' => ['required'],
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users', 'regex:/[\w]+@+((?i)(student.){0,1}su.edu.krd(?-i))$/im'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                "college_id" => ['required', 'exists:colleges,id'],
                "dept_id" => ['required', 'exists:departments,id'],
            ],
            [
                'email.regex' => 'Please provide a valid university email',
                'college_id.required' => "The college field is required",
                'dept_id.required' => "The department field is required",
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $text =  explode('@', $request->email)[1];

            $data['is_student'] = 0;

            if (preg_match("/\bstudent\b/i", $text)) {
                $data['is_student'] = 1;
            }

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'college_id' => $request->college_id,
                'dept_id' => $request->dept_id,
                'is_student' => $data['is_student'],
                'password' => Hash::make($request->password),
            ]);

            if ($data['is_student'] == 1) {
                $user->assignRole('student');
            }else{
                $user->assignRole($request->role);
            }


            return redirect()->route('admin.users.index')->with([
                "message" => "User Created Successfully",
                "title" => "Created",
                "icon" => "success",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
