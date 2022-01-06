<?php

namespace App\Http\Controllers;

use App\Models\ClassType;
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
        $classTypes = ClassType::pluck('name','id');
        return view('pages.graduate-project',compact("colleges","depts",'classTypes'));
    }


    public function evaluation()
    {
        return view('pages.evaluation');
    }

    public function conference()
    {
        return view('pages.conference');
    }




}
