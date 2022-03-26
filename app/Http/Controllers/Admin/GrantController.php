<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Grant;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class GrantController extends Controller
{
    public function __construct()
    {
        View::share([
            'title' => "Grants",
            'desc' => "List of uploaded grants"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //for project
    public function index()
    {
        $grants = Grant::query()->whereGrantType(0)->with('dept', 'college')->paginate(15);
        return view('admin.grants.index-project', compact('grants'));
    }

    //for idea
    public function indexIdea()
    {
        $grants = Grant::query()->whereGrantType(1)->with('dept', 'college')->paginate(15);
        return view('admin.grants.index-idea', compact('grants'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // return $request->all();
        try {
            Grant::create([
                "college_id" => $request->college_id,
                "dept_id" => $request->dept_id,
                "grant_type" => $request->grant_type,
                "name" => $request->name,
                "stage" => $request->stage,
                "email" => $request->email,
                "title" => $request->title,
                "money" => $request->money,
                "sponsor" => $request->sponsor,
                "time" => $request->time,
                "field" => $request->field,
                "teams" => $request->teams,
                "plan" => $request->plan,
                "advantage" => $request->advantage,
            ]);

            return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Grant $grant)
    {
        $grant->load('student', 'student.dept', 'student.college');
        return view('admin.grant.show', compact('grant'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grant $grant)
    {
        $grant->delete();
        return redirect()->back()->with([
            "message" => "Grant Deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
