<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\College;
use App\Models\Department;
use App\Models\Project;
use App\Models\Team;
use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home()
    {
        $banners = Banner::take(3)->get();
        return view('pages.home', compact('banners'));
    }

    public function project()
    {
        $colleges = College::pluck('name', 'id');
        $depts = Department::pluck('name', 'id');
        $projects = Project::with('student', 'student.dept', 'student.college')->get();
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
        $teams = Team::take(4)->get();
        return view('pages.contact-us', compact('teams'));
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
