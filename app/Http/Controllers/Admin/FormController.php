<?php


namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\View;

class FormController extends Controller
{

    public function __construct()
    {
        View::share([
            'title' => "Forms",
            'desc' => "List of Form members"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Forms = Form::orderByDesc('created_at')->take(5)->get();
        return view('admin.Forms.index', compact('Forms'));
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
            "name" => ['required'],
            "file" => ['required', 'file']
        ]);

        if ($validator->fails()) {
            return $validator->errors();
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $file = null;
        try {
            if ($request->hasFile('file')) {
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/forms'), $file);
            }

            Form::create([
                "name" => $request->name,
                "file" => 'uploads/forms/' . $file,
            ]);

            return redirect()->route('evaluationCommittee');
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function edit(Form $Form)
    {
        $desc = "Edit Form Member $Form->name";
        return view('admin.Forms.edit', compact("Form", 'desc'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Form $Form)
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
                if (checkDelete($Form->image)) {
                    //first delete privies file
                    File::delete($Form->image);
                }

                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/Forms'), $file);
            }

            $Form->name = $request->name;
            $Form->description = $request->description;
            if ($file) {
                $Form->image = 'uploads/Forms/' . $file;
            }
            $Form->save();

            return redirect()->route('admin.Forms.index')->with([
                "message" => "Form member Updated Succefully",
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
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $Form)
    {
        //try to not delete seeder file
        if (checkDelete($Form->image)) {
            //first delete privies file
            File::delete($Form->image);
        }

        $Form->delete();
        return redirect()->back()->with([
            "message" => "Form member deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
