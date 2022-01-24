<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function graduateProject()
    {
        $colleges = College::pluck('name','id');
        $depts = Department::pluck('name','id');
        return view('pages.graduate-project',compact("colleges","depts"));
    }


    public function evaluation()
    {
        $colleges = College::pluck('name','id');
        $depts = Department::pluck('name','id');
        return view('pages.evaluation',compact("colleges","depts"));
    }

    public function conference()
    {
        return view('pages.conference');
    }

    public function getDepartment(Request $request)
    {
        $departments = Department::where('college_id',$request->collegeId)->pluck('name','id');
        return $departments;
    }




}
