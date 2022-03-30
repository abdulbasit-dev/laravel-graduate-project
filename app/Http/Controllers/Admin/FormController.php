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
            'desc' => "List of Forms"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function firstSeminar()
    {
        $forms = Form::orderByDesc('created_at')->where('name','first seminar')->paginate(10);
        return view('admin.forms.index', compact('forms'));
    }
    public function finalSeminar()
    {
        $forms = Form::orderByDesc('created_at')->where('name','final seminar')->paginate(10);
          return view('admin.forms.index', compact('forms'));
    }
    public function finalSeminarSupervisor()
    {
        $forms = Form::orderByDesc('created_at')->where('name','final seminar supervisor')->paginate(10);
          return view('admin.forms.index', compact('forms'));
    }
    public function theoryExam()
    {
        $forms = Form::orderByDesc('created_at')->where('name','theory exam')->paginate(10);
           return view('admin.forms.index', compact('forms'));
    }
    public function finalEegree()
    {
        $forms = Form::orderByDesc('created_at')->where('name','final degree')->paginate(10);
        return view('admin.forms.index', compact('forms'));
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Form  $Form
     * @return \Illuminate\Http\Response
     */
    public function destroy(Form $form)
    {
        //try to not delete seeder file
        if (checkDelete($form->file)) {
            //first delete privies file
            
        }

        File::delete($form->file);

        $form->delete();
        return redirect()->back()->with([
            "message" => "Form member deleted Succefully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }
}
