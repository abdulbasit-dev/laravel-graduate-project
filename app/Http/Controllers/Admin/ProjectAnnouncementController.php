<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectAnnouncement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ProjectAnnouncementController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Committee Announcements",
            'desc' => "List of Committee Announcements"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectAnnouncements = ProjectAnnouncement::with('college', 'dept')->paginate(10);
        return view('admin.project-announcements.index', compact('projectAnnouncements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desc = "Add New Project Announcement";
        return view('admin.project-announcements.create', compact('desc'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "title" => ['required', 'string'],
                "college_id" => ['required', 'exists:colleges,id'],
                "dept_id" => ['required', 'exists:departments,id'],
                "file" => ['file'],
            ],
            [
                'title.required' => "The announcement field is required",
                'college_id.required' => "The college field is required",
                'dept_id.required' => "The department field is required",
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        try {
            if ($request->hasFile('file')) {
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/project-announcement'), $file);
            }

            ProjectAnnouncement::create([
                "title" => $request->title,
                'college_id' => $request->college_id,
                'dept_id' => $request->dept_id,
                "file" => $file ? 'uploads/project-announcement/' . $file : null,
            ]);

            return redirect()->route('admin.project-announcements.index')->with([
                "message" => "Project Announcement created Successfully",
                "title" => "Created",
                "icon" => "success",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectAnnouncement  $projectAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectAnnouncement $projectAnnouncement)
    {
        $desc = "Edit Project Announcement";
        return view('admin.project-announcements.edit', compact("projectAnnouncement", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ProjectAnnouncement  $projectAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProjectAnnouncement $projectAnnouncement)
    {

        $file = null;
        try {
            if ($request->hasFile('file')) {
                //try to not delete seeder file
                if ($projectAnnouncement->file && checkDelete($projectAnnouncement->file)) {
                    //first delete 
                    File::delete($projectAnnouncement->file);
                }
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/project-announcement'), $file);
            }
            $projectAnnouncement->title = $request->title;

            if ($file) {
                $projectAnnouncement->file = 'uploads/project-announcement/' . $file;
            }

            if ($request->college_id) {
                $projectAnnouncement->college_id = $request->college_id;
            }
            if ($request->dept_id) {
                $projectAnnouncement->dept_id = $request->dept_id;
            }
            $projectAnnouncement->save();

            return redirect()->route('admin.project-announcements.index')->with([
                "message" => "ProjectAnnouncement Updated Successfully",
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
     * @param  \App\Models\ProjectAnnouncement  $projectAnnouncement
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectAnnouncement $projectAnnouncement)
    {

        if ($projectAnnouncement->file && checkDelete($projectAnnouncement->file)) {
            //first delete 
            File::delete($projectAnnouncement->file);
        }
        $projectAnnouncement->delete();
        return redirect()->back()->with([
            "message" => "ProjectAnnouncement Deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
