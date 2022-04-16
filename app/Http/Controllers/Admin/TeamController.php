<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class TeamController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Teams",
            'desc' => "List of Team members"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderByDesc('created_at')->take(5)->get();
        return view('admin.teams.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desc = "Add New Team Member";
        return view('admin.teams.create', compact('desc'));
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
            "name" => ['required', 'string', 'max:30'],
            "description" => ['required', 'string',],
            "file" => ['required', 'file', 'mimes:png,jpg']
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
                $request->file->move(public_path('uploads/teams'), $file);
            }

            Team::create([
                "name" => $request->name,
                "description" => $request->description,
                "image" => 'uploads/teams/' . $file,
            ]);

            return redirect()->route('admin.teams.index')->with([
                "message" => "Team member Created Successfully",
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        $desc = "Edit Team Member $team->name";
        return view('admin.teams.edit', compact("team", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {

        $validator = Validator::make($request->all(), [
            "name" => ['required', 'string', 'max:30'],
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
                //try to not delete seeder file
                if ($team->image && checkDelete($team->image)) {
                    //first delete privies file
                    File::delete($team->image);
                }
               
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/teams'), $file);
            }

            $team->name = $request->name;
            $team->description = $request->description;
            if ($file) {
                $team->image = 'uploads/teams/' . $file;
            }
            $team->save();

            return redirect()->route('admin.teams.index')->with([
                "message" => "Team member Updated Successfully",
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
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        //try to not delete seeder file
        if ($team->image &&  checkDelete($team->image)) {
            //first delete privies file
            File::delete($team->image);
        }

        $team->delete();
        return redirect()->back()->with([
            "message" => "Team member deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
