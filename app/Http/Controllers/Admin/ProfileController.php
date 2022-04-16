<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ProfileUpdateRequest;
use App\Models\Idea;
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
        $user =  auth()->user()->load('project', 'idea');
        $projectExsist = false;
        $ideaExsist = false;
        if ($user->project) {
            $projectExsist = true;
        }
        if ($user->idea) {
            $ideaExsist = true;
        }
        // return $user;
        return view('auth.profile', compact('user', 'projectExsist', 'ideaExsist'));
    }

    public function project()
    {
        $project = Project::with('student', 'student.dept', 'student.college')->whereCreatedBy(auth()->id())->first();
        return view('admin.project.show', compact('project'));
    }

    public function idea()
    {
        $idea = Idea::with('student', 'student.dept', 'student.college')->whereCreatedBy(auth()->id())->first();
        return view('admin.idea.show', compact('idea'));
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

        return redirect()->back()->with([
            "message" => "Profile Updated Successfully",
            "title" => "Updated",
            "icon" => "success",
        ]);
    }
}
