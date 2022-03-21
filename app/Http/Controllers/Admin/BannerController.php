<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class BannerController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Banners",
            'desc' => "List of Banner members"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::orderByDesc('created_at')->take(5)->get();
        return view('admin.banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desc = "Add New Banner Member";
        return view('admin.banners.create', compact('desc'));
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
                $request->file->move(public_path('uploads/banners'), $file);
            }

            Banner::create([
                "name" => $request->name,
                "description" => $request->description,
                "image" => 'uploads/banners/' . $file,
            ]);

            return redirect()->route('admin.banners.index')->with([
                "message" => "Banner member Created Succefully",
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        $desc = "Edit Banner Member $banner->name";
        return view('admin.banners.edit', compact("banner", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
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
                //first delete privies file
                File::delete($banner->image);
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/banners'), $file);
            }

            $banner->name = $request->name;
            $banner->description = $request->description;
            if ($file) {
                $banner->image = 'uploads/banners/' . $file;
            }
            $banner->save();

            return redirect()->route('admin.banners.index')->with([
                "message" => "Banner member Updated Succefully",
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with([
            "message" => "Banner member deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
