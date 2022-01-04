<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function conference()
    {
        return view('pages.conference');
    }

    public function graduateProject()
    {
        return view('pages.graduate-project');
    }

    public function evaluation()
    {
        return view('pages.evaluation');
    }
}
