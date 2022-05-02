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
            'title' => "Evaluation Form",
            'desc' => "List of Evaluation Forms"
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $forms = Form::whereNotNull('file')->orderByDesc('created_at')->paginate(10);
        return view('admin.forms.index', compact('forms'));
    }


    public function uploadedForm()
    {
        $forms = Form::whereNotNull('upload')->orderByDesc('created_at')->paginate(10);
        return view('admin.forms.uploaded-form', compact('forms'));
    }


    public function storeUploadForm(Request $request)
    {
        $file = null;
        try {
            if ($request->hasFile('file')) {
                $file = time() . '_' . $request->file('file')->getClientOriginalName();
                $request->file->move(public_path('uploads/forms'), $file);
            }

            Form::create([
                "name" => $request->file('file')->getClientOriginalName(),
                "college_id" => $request->college_id,
                "dept_id" => $request->dept_id,
                "upload" => $file ? 'uploads/forms/' . $file : null,
            ]);

            return redirect()->back()->with([
                "message" => "Evaluation form uploaded Successfully",
                "title" => "Uploaded",
                "icon" => "success",
            ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }


    public function create()
    {
        return view('admin.forms.create');
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
                "name" => ['required', 'string'],
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
                $request->file->move(public_path('uploads/forms'), $file);
            }

            Form::create([
                "name" => $request->name,
                "college_id" => $request->college_id,
                "dept_id" => $request->dept_id,
                "file" => $file ? 'uploads/forms/' . $file : null,
            ]);

            return redirect()->route('admin.forms.index')->with([
                "message" => "Evaluation form added Successfully",
                "title" => "Added",
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
    public function destroy(Form $form)
    {
        //try to not delete seeder file
        if ($form->file && checkDelete($form->file)) {
            //first delete privies file
            File::delete($form->file);
        }

        $form->delete();
        return redirect()->back()->with([
            "message" => "Evaluation form deleted Successfully",
            "title" => "Deleted",
            "icon" => "success",
        ]);
    }

    // public function firstSeminar()
    // {
    //     $forms = Form::orderByDesc('created_at')->where('name','first seminar')->paginate(10);
    //     return view('admin.forms.index', compact('forms'));
    // }
    // public function finalSeminar()
    // {
    //     $forms = Form::orderByDesc('created_at')->where('name','final seminar')->paginate(10);
    //       return view('admin.forms.index', compact('forms'));
    // }
    // public function finalSeminarSupervisor()
    // {
    //     $forms = Form::orderByDesc('created_at')->where('name','final seminar supervisor')->paginate(10);
    //       return view('admin.forms.index', compact('forms'));
    // }
    // public function theoryExam()
    // {
    //     $forms = Form::orderByDesc('created_at')->where('name','theory exam')->paginate(10);
    //        return view('admin.forms.index', compact('forms'));
    // }
    // public function finalEegree()
    // {
    //     $forms = Form::orderByDesc('created_at')->where('name','final degree')->paginate(10);
    //     return view('admin.forms.index', compact('forms'));
    // }
}
