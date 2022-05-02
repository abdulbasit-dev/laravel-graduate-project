<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Expert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class ExpertController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Experts",
            'desc' => "List of Experts"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experts = Expert::paginate(10);
        return view('admin.experts.index', compact('experts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desc = "Add New Expert";
        return view('admin.experts.create', compact('desc'));
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
                "file" => ['required', 'file'],
            ],
            [
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
                $request->file->move(public_path('uploads/experts'), $file);
            }

            Expert::create([
                "title" => $request->title,
                "file" => $file ? 'uploads/experts/' . $file : null,
                "college_id" => $request->college_id,
                "dept_id" => $request->dept_id,
            ]);

            return redirect()->route('admin.experts.index')->with([
                "message" => "Expert Created Successfully",
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
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function edit(Expert $expert)
    {
        $desc = "Edit Expert";
        return view('admin.experts.edit', compact("expert", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expert $expert)
    {
        $file = null;
        try {
            if ($request->hasFile('file')) {
                //try to not delete seeder file
                if ($expert->file && checkDelete($expert->file)) {
                    //first delete 
                    File::delete($expert->file);
                }
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/experts'), $file);
            }

            $expert->title = $request->title;

            if ($file) {
                $expert->file = 'uploads/experts/' . $file;
            }

            if ($request->college_id) {
                $expert->college_id = $request->college_id;
            }

            if ($request->dept_id) {
                $expert->dept_id = $request->dept_id;
            }
            $expert->save();

            return redirect()->route('admin.experts.index')->with([
                "message" => "Expert Updated Successfully",
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
     * @param  \App\Models\Expert  $expert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Expert $expert)
    {
        if ($expert->file && checkDelete($expert->file)) {
            //first delete 
            File::delete($expert->file);
        }

        $expert->delete();
        return redirect()->back()->with([
            "message" => "Expert Deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
