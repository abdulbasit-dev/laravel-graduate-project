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
            'title' => "Project Announcements",
            'desc' => "List of Project Announcements"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projectAnnouncements = ProjectAnnouncement::paginate(10);
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
        $validator = Validator::make($request->all(), [
            "title" => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {
            ProjectAnnouncement::create([
                "title" => $request->title,
            ]);

            return redirect()->route('admin.project-announcements.index')->with([
                "message" => "ProjectAnnouncement  Created Successfully",
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
        $validator = Validator::make($request->all(), [
            "title" => ['required'],
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        try {

            $projectAnnouncement->title = $request->title;
            $projectAnnouncement->save();

            return redirect()->route('admin.project-announcements.index')->with([
                "message" => "ProjectAnnouncement Updated Succefully",
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
        $projectAnnouncement->delete();
        return redirect()->back()->with([
            "message" => "ProjectAnnouncement Deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
