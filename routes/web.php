<?php

use Illuminate\Support\Facades\Route;

use \App\Http\Controllers\{
    PageController,
    LanguageController,
};

use \App\Http\Controllers\Admin\{
    CollegeController,
    DashboradController,
    DepartmentController,
    TeamController,
    BannerController,
    ProjectController,
    UserController,
    ProfileController,
    AnnouncementController,
    GrantController,
    FormController,
    ExpertController,
    ProjectAnnouncementController,
    IdeaController,
};
use App\Http\Livewire\Admin\Active;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Front End Routes
//Page Routes
Route::get('/', [PageController::class, 'home'])->name('home');

Route::get('/projects', [PageController::class, 'project'])->name('project');
Route::get('/projects-card', [PageController::class, 'projectCard'])->name('project-card');
Route::get('/projects/{project}', [PageController::class, 'projectShow'])->name('projectShow');

Route::get('/galleries', [PageController::class, 'gallery'])->name('gallery');

Route::get('ideas', [PageController::class, 'idea'])->name('idea');
// Route::get('ideas/{idea}', [PageController::class, 'ideaShow'])->name('ideaShow');

Route::get('/conferences', [PageController::class, 'conference'])->name('conference');
Route::get('/evaluation-committee', [PageController::class, 'evaluation'])->name('evaluationCommittee');
Route::get('/project-announcement', [PageController::class, 'projectAnnouncement'])->name('projectAnnouncement');
Route::get('/expert-system-info', [PageController::class, 'expertSystemInfo'])->name('expertSystemInfo');

Route::get('/announcements', [PageController::class, 'announcements'])->name('announcements');
Route::get('/announcements/{announcement}', [PageController::class, 'announcementShow'])->name('announcementShow');

Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs');

Route::get('/get-department', [PageController::class, 'getDepartment'])->name('getDepartment');

Route::post('projects-filter', [ProjectController::class, 'filter'])->name('projects.filter');

Route::get('/posters', [PageController::class, 'poster'])->name("poster");


Auth::routes();


//Admin Routes
Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'admin'], 'as' => 'admin.'
], function () {
    Route::get('', [DashboradController::class, 'index'])->name('home');
    Route::resource('colleges', CollegeController::class);
    Route::resource('departments', DepartmentController::class);

    Route::view("upload-setting", 'admin.setting')->name("upload-setting");

    //projects
    Route::get('projects/rank-poster/{project}', [ProjectController::class, 'rankPoster'])->name('projects.rank-poster');
    Route::get('projects/rank/{project}', [ProjectController::class, 'rankProject'])->name('projects.rank');
    Route::get('projects/poster', [ProjectController::class, 'poster'])->name('projects.poster');
    Route::resource('projects', ProjectController::class);

    //evaluation form
    // Route::get('forms/first-seminar', [FormController::class, 'firstSeminar'])->name('forms.firstSeminar');
    // Route::get('forms/final-seminar', [FormController::class, 'finalSeminar'])->name('forms.finalSeminar');
    // Route::get('forms/final-seminar-supervisor', [FormController::class, 'finalSeminarSupervisor'])->name('forms.finalSeminarSupervisor');
    // Route::get('forms/theory-exam', [FormController::class, 'theoryExam'])->name('forms.theoryExam');
    // Route::get('forms/final-degree', [FormController::class, 'finalEegree'])->name('forms.finalEegree');
    Route::get('forms/uploaded-form', [FormController::class, 'uploadedForm'])->name('forms.uploaded-form');
    Route::post('forms/upload-form', [FormController::class, 'storeUploadForm'])->name('forms.upload-form');
    Route::resource('forms', FormController::class);

    //announcements
    Route::resource('announcements', AnnouncementController::class);

    //ideas
    Route::get('ideas/rank/{idea}', [IdeaController::class, 'rankIdea'])->name('ideas.rank');
    Route::resource('ideas', IdeaController::class);
    
    //project-announcements
    Route::resource('project-announcements', ProjectAnnouncementController::class);

    //experts
    Route::resource('experts', ExpertController::class)->except('show');

    //grants
    Route::get('grant-ideas', [GrantController::class, 'indexIdea'])->name("grants.indexIdea");
    Route::resource('grants', GrantController::class);

    //teams
    Route::resource('teams', TeamController::class)->except('show');

    //banners
    Route::resource('banners', BannerController::class)->except('show');

    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users', [UserController::class, 'store'])->name('users.store');
    Route::delete('users/{user}', [UserController::class, 'destroy'])->name('users.destroy');
    Route::get('users/system-user', [UserController::class, 'index'])->name('users.index');
    Route::get('users/student', [UserController::class, 'student'])->name('users.student');
    Route::get('users/teacher', [UserController::class, 'teacher'])->name('users.teacher');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/project',  [ProfileController::class, 'project'])->name('profile.project');
    Route::get('profile/idea',  [ProfileController::class, 'idea'])->name('profile.idea');
    Route::put('profile',  [ProfileController::class, 'update'])->name('profile.update');
});
