<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Project;
use Illuminate\Support\Facades\View;

class ProfileController extends Controller
{
    public function __construct()
    {
        View::share([
            'title' => "Show Project",
            'desc' => "Show Project Detail"
        ]);
    }
    public function show()
    {
        $user =  auth()->user()->load('project');
        $projectExsist = false;
        if ($user->project) {
            $projectExsist = true;
        }
        return view('auth.profile', compact('projectExsist'));
    }

    public function project()
    {
        $project = Project::with('student', 'student.dept', 'student.college')->whereCreatedBy(auth()->id())->first();
        return view('admin.project.show', compact('project'));
    }
    
    public function update(ProfileUpdateRequest $request)
    {
        if ($request->password) {
            auth()->user()->update(['password' => Hash::make($request->password)]);
        }

        auth()->user()->update([
            'name' => $request->name,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Profile updated.');
    }
}
