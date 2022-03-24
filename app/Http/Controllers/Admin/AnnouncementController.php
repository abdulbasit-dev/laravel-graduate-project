<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Announcement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class AnnouncementController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Announcements",
            'desc' => "List of Announcements"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements = Announcement::paginate(10);
        return view('admin.announcements.index', compact('announcements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desc = "Add New Announcement";
        return view('admin.announcements.create', compact('desc'));
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
            "description" => ['required'],
            'file' => ['file']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        try {
            if ($request->hasFile('file')) {
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/announcements'), $file);
            }

            Announcement::create([
                "title" => $request->title,
                "description" => $request->description,
                "attachment" => 'uploads/announcements/' . $file,
            ]);

            return redirect()->route('admin.announcements.index')->with([
                "message" => "Announcement member Created Succefully",
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
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        $desc = "Edit Announcement";
        return view('admin.announcements.edit', compact("announcement", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Announcement $announcement)
    {

        $validator = Validator::make($request->all(), [
            "title" => ['required', 'string', 'max:30'],
            "description" => ['required', 'string',],
            "file" => ['file', 'mimes:png,jpg']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        try {
            if ($request->hasFile('file')) {
                //first delete privies file
                File::delete($announcement->image);
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/announcements'), $file);
            }

            $announcement->title = $request->title;
            $announcement->description = $request->description;
            if ($file) {
                $announcement->attachment = 'uploads/announcements/' . $file;
            }
            $announcement->save();

            return redirect()->route('admin.announcements.index')->with([
                "message" => "Announcement Updated Succefully",
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
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Announcement $announcement)
    {
        //try to not delete seeder file
        $fileName =  explode('/', $announcement->attachment)[2];

        if (count(explode('_', $fileName)) > 1) {
            //first delete 
            File::delete($announcement->attachment);
        }
        $announcement->delete();
        return redirect()->back()->with([
            "message" => "Announcement Deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
