<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Department;

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
        return view('pages.evaluation');
    }

    public function conference()
    {
        return view('pages.conference');
    }




}
