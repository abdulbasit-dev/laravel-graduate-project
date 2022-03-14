<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function __construct()
    {
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $colleges = College::pluck('name', 'id');
        return view('admin.project.create', compact('colleges'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $projectFile = null;
        $reportFile = null;
        try {
            if ($request->hasFile('project') && $request->hasFile('report')) {
                //for project file
                $projectFile = time() . '_' . $request->file('project')->getClientOriginalName() . '.' . $request->project->extension();
                $request->project->move(public_path('uploads/projects'), $projectFile);

                // for report file
                $reportFile = time() . '_' . $request->file('report')->getClientOriginalName() . '.' . $request->report->extension();
                $request->report->move(public_path('uploads/reports'), $reportFile);
            }



            Project::create([
                "title" => $request->title,
                "description" => $request->description,
                "project" => "/uploads/projects/$projectFile",
                "report" => "/uploads/reports/$reportFile",
                "supervisor_name" => $request->supervisor_name,
                "team_members" => $request->teams,
                "created_by" => $request->user()->id,
            ]);

            return redirect()->route('admin.home');
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
    public function show($id)
    {
        //
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
    public function destroy($id)
    {
        //
    }
}
