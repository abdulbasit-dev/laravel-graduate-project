<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class ProjectController extends Controller
{
    public function __construct()
    {
        View::share([
            'title' => "Projects",
            'desc' => "List of uploaded projects"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::with('student', 'student.dept', 'student.college')->paginate(15);
        return view('admin.project.index', compact('projects'));
    }

    public function poster()
    {
        $title = "Posters";
        $desc = "List of uploaded posters";
        $projects = Project::with('student', 'student.dept', 'student.college')->paginate(15);
        return view('admin.project.poster', compact('projects', "title", "desc"));
    }

    public function filter(Request $request)
    {
        $collegeId = $request->has('collegeId') ?  $request->collegeId : null;
        $deptId = $request->has('deptId') ?  $request->deptId : null;

        $projects = Project::query()->with('student', 'student.dept', 'student.college');

        if ($collegeId) {
            $projects->whereHas('student', function (Builder $query) use ($collegeId) {
                $query->where("college_id", $collegeId);
            });
        }

        if ($deptId) {
            $projects->whereHas('student', function (Builder $query) use ($deptId) {
                $query->where("dept_id", $deptId);
            });
        }


        // $projects = $projects->paginate(15);
        $projects = $projects->get();

        return view('includes.projects', compact('projects'));
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
        $posterFile = null;

        try {
            //for project files
            if ($request->hasFile('project')) {
                $projectFile = time() . '_' . $request->file('project')->getClientOriginalName();
                $request->project->move(public_path('uploads/projects'), $projectFile);
            }

            // for report file
            if ($request->hasFile('report')) {
                $reportFile = time() . '_' . $request->file('report')->getClientOriginalName();
                $request->report->move(public_path('uploads/reports'), $reportFile);
            }

            // for report file
            if ($request->hasFile('poster')) {
                $posterFile = time() . '_' . $request->file('poster')->getClientOriginalName();
                $request->poster->move(public_path('uploads/posters'), $posterFile);
            }

            $data = [
                "title" => $request->title,
                "description" => $request->description,
                "supervisor_name" => $request->supervisor_name,
                "team_members" => $request->teams,
                "created_by" => $request->user()->id,
            ];

            if ($projectFile) {
                $data["project"] = $projectFile;
            }

            if ($reportFile) {
                $data["report"] = $reportFile;
            }

            if ($posterFile) {
                $data["poster"] = $posterFile;
            }

            Project::create($data);

            //update user that he submit the project
            auth()->user()->update(['is_submited' => 1]);

            return redirect()->route('admin.profile.show')->with([
                "message" => "Project Submited Successfully",
                "title" => "Submited",
                "icon" => "success",
            ]);
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
    public function show(Project $project)
    {
        $project->load('student', 'student.dept', 'student.college');
        return view('admin.project.show', compact('project'));
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
    public function destroy(Project $project)
    {
        User::where('id', $project->created_by)->update(['is_submited' => 0]);
        //try to not delete seeder file
        if (checkDelete($project->project)) {
            //first delete privies file
            File::delete($project->project);
        }

        //try to not delete seeder file
        if (checkDelete($project->report)) {
            //first delete privies file
            File::delete($project->report);
        }

        //try to not delete seeder file
        if (checkDelete($project->poster)) {
            //first delete privies file
            File::delete($project->poster);
        }

        $project->delete();
        return redirect()->route('admin.profile.show')->with([
            "message" => "Project Deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
