<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\College;
use App\Models\Idea;
use App\Models\Setting;
use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\View;

class IdeaController extends Controller
{
    public function __construct()
    {
        View::share([
            'title' => "Ideas",
            'desc' => "List of uploaded ideas"
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ideas = Idea::with('student', 'student.dept', 'student.college')->paginate(15);
        return view('admin.idea.index', compact('ideas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $active_idea = Setting::where('name', 'idea_upload')->first()->value;
        return view('admin.idea.create',compact("active_idea"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $active_idea = Setting::where('name', 'idea_upload')->first()->value;

        if (!$active_idea) {
            return redirect()->back()->with([
                "message" => "Idea Uploading is Disabled",
                "title" => "Disabled",
                "icon" => "error",
            ]);
        }

        $projectFile = null;
        $reportFile = null;
        $posterFile = null;

        try {
            //for idea files
            if ($request->hasFile('project')) {
                $projectFile = time() . '_' . $request->file('project')->getClientOriginalName();
                $request->project->move(public_path('uploads/ideas'), $projectFile);
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
                "stage" => $request->stage,
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

            Idea::create($data);

            //update user that he submit the idea
            auth()->user()->update(['is_submited_idea' => 1]);


            return redirect()->route('admin.profile.show')->with([
                "message" => "Idea Submited Successfully",
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
    public function show(Idea $idea)
    {
        $idea->load('student', 'student.dept', 'student.college');
        return view('admin.idea.show', compact('idea'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Idea $idea)
    {
        $idea->load('student', 'student.dept', 'student.college');
        return view('admin.idea.edit', compact('idea'));
    }

    public function update(Request $request, Idea $idea)
    {
        $projectFile = null;
        $reportFile = null;
        $posterFile = null;

        try {
            if ($request->hasFile('project')) {
                //try to not delete seeder file
                if ($idea->project  && checkDelete($idea->project)) {
                    //first delete 
                    File::delete($idea->projectFile);
                }

                $projectFile = time() . '_' . $request->file('project')->getClientOriginalName();
                $request->project->move(public_path('uploads/ideas'), $projectFile);
            }

            if ($request->hasFile('report')) {
                //try to not delete seeder file
                if ($idea->report &&  checkDelete($idea->report)) {
                    //first delete 
                    File::delete($idea->report);
                }

                $reportFile = time() . '_' . $request->file('report')->getClientOriginalName();
                $request->report->move(public_path('uploads/reports'), $reportFile);
            }

            if ($request->hasFile('poster')) {
                //try to not delete seeder file
                if ($idea->poster  && checkDelete($idea->poster)) {
                    //first delete 
                    File::delete($idea->poster);
                }

                $posterFile = time() . '_' . $request->file('poster')->getClientOriginalName();
                $request->poster->move(public_path('uploads/posters'), $posterFile);
            }



            $idea->title = $request->title;
            $idea->description = $request->description;
            $idea->supervisor_name = $request->supervisor_name;

            if (count($request->teams) && $request->teams[0] !== null) {
                $idea->team_members = $request->teams;
            }

            if ($request->stage) {
                $idea->stage = $request->stage;
            }

            if ($projectFile) {
                $idea->project = 'uploads/ideas/' . $projectFile;
            }

            if ($reportFile) {
                $idea->report = 'uploads/reports/' . $reportFile;
            }

            if ($posterFile) {
                $idea->poster = 'uploads/posters/' . $posterFile;
            }

            $idea->save();

            return redirect()->route('admin.profile.idea')->with([
                "message" => "Idea Updated Successfully",
                "title" => "updated",
                "icon" => "success",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idea $idea)
    {
        User::where('id', $idea->created_by)->update(['is_submited_idea' => 0]);
        //try to not delete seeder file
        if ($idea->project && checkDelete($idea->project)) {
            //first delete privies file
            File::delete($idea->project);
        }

        //try to not delete seeder file
        if ($idea->report && checkDelete($idea->report)) {
            //first delete privies file
            File::delete($idea->report);
        }

        //try to not delete seeder file
        if ($idea->poster && checkDelete($idea->poster)) {
            //first delete privies file
            File::delete($idea->poster);
        }

        $idea->delete();
        return redirect()->route('admin.profile.show')->with([
            "message" => "Idea Deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }

    public function filter(Request $request)
    {
        $collegeId = $request->has('collegeId') ?  $request->collegeId : null;
        $deptId = $request->has('deptId') ?  $request->deptId : null;

        $ideas = Idea::query()->with('student', 'student.dept', 'student.college');

        if ($collegeId) {
            $ideas->whereHas('student', function (Builder $query) use ($collegeId) {
                $query->where("college_id", $collegeId);
            });
        }

        if ($deptId) {
            $ideas->whereHas('student', function (Builder $query) use ($deptId) {
                $query->where("dept_id", $deptId);
            });
        }


        // $ideas = $ideas->paginate(15);
        $ideas = $ideas->get();

        return view('includes.ideas', compact('ideas'));
    }
}
