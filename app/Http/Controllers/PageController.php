<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        return view('pages.home');
    }

    public function project()
    {
        $colleges = College::pluck('name', 'id');
        $depts = Department::pluck('name', 'id');
        $projects = Project::with('student', 'student.dept', 'student.college')->get();
        return $projects;
        return view('pages.projects', compact("colleges", "depts", "projects"));
    }

    public function projectShow(Project $project)
    {
        $project  =  $project->load('student', 'student.dept', 'student.college');
        return view('pages.project-show', compact("project"));
    }

    public function conference()
    {
        return view('pages.conference');
    }

    public function evaluation()
    {
        $colleges = College::pluck('name', 'id');
        $depts = Department::pluck('name', 'id');
        return view('pages.evaluation', compact("colleges", "depts"));
    }

    public function expertSystemInfo()
    {
        $colleges = College::pluck('name', 'id');
        $depts = Department::pluck('name', 'id');
        return view('pages.expert-system-info', compact("colleges", "depts"));
    }

    public function announcements()
    {
        $colleges = College::pluck('name', 'id');
        $depts = Department::pluck('name', 'id');
        return view('pages.announcement', compact("colleges", "depts"));
    }

    public function contactUs()
    {
        return view('pages.contact-us');
    }


    public function getDepartment(Request $request)
    {
        $departments = Department::where('college_id', $request->collegeId)->pluck('name', 'id');

        if (!count($departments)) {
            $departments = Department::pluck('name', 'id');
        }
        return $departments;
    }
}
