<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Idea;
use App\Mail\ContactUsMail;
use App\Models\Announcement;
use App\Models\Banner;
use App\Models\College;
use App\Models\Department;
use App\Models\Expert;
use App\Models\Form;
use App\Models\Project;
use App\Models\ProjectAnnouncement;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PageController extends Controller
{

    public function home()
    {
        $banners = Banner::wherePage("home")->take(3)->get();
        return view('pages.home', compact('banners'));
    }

    public function project()
    {
        // $projects = Project::query()->with('student.college')->get()
        //     ->groupBy([
        //         'college.name',
        //     ]);
        // return $projects;
        return view('pages.projects');
    }

    public function projectCard()
    {
        return view('pages.projects-card');
    }

    public function projectShow(Project $project)
    {
        $project  =  $project->load('student', 'student.dept', 'student.college');
        return view('pages.project-show', compact("project"));
    }

    public function gallery()
    {
        $banners = Banner::wherePage("gallery")->take(3)->get();
        return view('pages.gallery', compact('banners'));
    }

    public function idea()
    {
        return view('pages.idea');
    }

    public function ideaShow(Idea $idea)
    {
        return $idea;
        $idea  =  $idea->load('student', 'student.dept', 'student.college');
        return view('pages.idea-show', compact("project"));
    }

    public function conference()
    {
        return view('pages.conference');
    }

    public function poster()
    {
        return view('pages.poster');
    }

    public function evaluation()
    {
        $forms = Form::paginate(6);
        return view('pages.evaluation', compact('forms'));
    }

    public function expertSystemInfo()
    {
        $experts = Expert::all();
        $banners = Banner::wherePage("expert")->take(3)->get();
        return view('pages.expert-system-info', compact("experts", "banners"));
    }

    public function projectAnnouncement()
    {
        $query = ProjectAnnouncement::query();
        // $projectAnnouncements = ProjectAnnouncement::paginate(10);

        if (auth()->check() && auth()->user()->hasRole('student')) {
            $college_id = auth()->user()->college_id;
            $dept_id = auth()->user()->dept_id;
            $query->where('college_id', $college_id)
                ->where('dept_id', $dept_id);
        }

        $projectAnnouncements = $query->paginate(10);


        return view('pages.project-announcement', compact("projectAnnouncements"));
    }

    public function announcements()
    {
        $announcements = Announcement::take(10)->get();
        return view('pages.announcement', compact('announcements'));
    }

    public function announcementShow(Announcement $announcement)
    {
        return view('pages.announcement-show', compact("announcement"));
    }

    public function contactUs()
    {
        $teams = Team::all();
        return view('pages.contact-us', compact('teams'));
    }

    public function sendMail(Request $request)
    {

        Mail::to('Graduationprojectswebsite21@gmail.com')->send(new ContactUsMail($request));
        return redirect()->back()->with([
                "message" => "We have received your message and would like to thank you for writing to us",
                "title" => "Success",
                "icon" => "success",
            ]);
    }


    public function getDepartment(Request $request)
    {
        $departments = Department::where('college_id', $request->collegeId)->pluck('name', 'id');

        if (!count($departments)) {
            $departments = Department::pluck('name', 'id');
        }
        return $departments;
    }
}
