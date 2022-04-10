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
            'image' => ['file','mimes:png,jpg'],
            'file' => ['file']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        $image = null;
        try {
            if ($request->hasFile('file')) {
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/announcements'), $file);
            }

            if ($request->hasFile('image')) {
                $image = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->image->move(public_path('uploads/announcements'), $image);
            }

            Announcement::create([
                "title" => $request->title,
                "description" => $request->description,
                "image" => 'uploads/announcements/' . $image,
                "attachment" => 'uploads/announcements/' . $file,
            ]);

            return redirect()->route('admin.announcements.index')->with([
                "message" => "Announcement member Created Successfully",
                "title" => "Created",
                "icon" => "success",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        $desc = "Show Announcement";
        return view('admin.announcements.show', compact("announcement", 'desc'));
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
            "title" => ['required'],
            "description" => ['required'],
            'image' => ['file', 'mimes:png,jpg'],
            'file' => ['file']
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        $image = null;
        try {
            if ($request->hasFile('file')) {
                //try to not delete seeder file
                if (checkDelete($announcement->attachment)) {
                    //first delete 
                    File::delete($announcement->attachment);
                }
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/announcements'), $file);
            }
            if ($request->hasFile('image')) {
                //try to not delete seeder file
                if (checkDelete($announcement->image)) {
                    //first delete 
                    File::delete($announcement->image);
                }
                $image = time() . '_' . $request->file('image')->getClientOriginalName();
                $request->image->move(public_path('uploads/announcements'), $image);
            }

            $announcement->title = $request->title;
            $announcement->description = $request->description;

            if ($file) {
                $announcement->attachment = 'uploads/announcements/' . $file;
            }
            
            if ($image) {
                $announcement->image = 'uploads/announcements/' . $image;
            }

            $announcement->save();

            return redirect()->route('admin.announcements.index')->with([
                "message" => "Announcement Updated Successfully",
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
        if (checkDelete($announcement->attachment)) {
            //first delete 
            File::delete($announcement->attachment);
        }

        $announcement->delete();
        return redirect()->back()->with([
            "message" => "Announcement Deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
