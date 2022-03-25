<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

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
    AnnouncementController
};
use App\Models\College;
use App\Models\Department;
use App\Models\User;

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


//language changer controller
Route::get('/change-langauge/{lang}', [LanguageController::class, "changeLanguage"])->name("change-langauge");


Route::get('/test',function(){
    // $json = file_get_contents('../names.json');
    // $array = json_decode($json, true);
    // $one_item = $array[rand(0, count($array) - 1)];
    // return Str::lower($one_item);

});

//Front End Routes
//Page Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/projects', [PageController::class, 'project'])->name('project');
Route::get('/projects/{project}', [PageController::class, 'projectShow'])->name('projectShow');
Route::get('/conferences', [PageController::class, 'conference'])->name('conference');
Route::get('/evaluation-committee', [PageController::class, 'evaluation'])->name('evaluationCommittee');
Route::get('/expert-system-info', [PageController::class, 'expertSystemInfo'])->name('expertSystemInfo');
Route::get('/announcements', [PageController::class, 'announcements'])->name('announcements');
Route::get('/announcements/{announcement}', [PageController::class, 'announcementShow'])->name('announcementShow');
Route::get('/contact-us', [PageController::class, 'contactUs'])->name('contactUs');

Route::get('/get-department', [PageController::class, 'getDepartment'])->name('getDepartment');


Auth::routes();


//Admin Routes
Route::group([
    'prefix' => 'dashboard',
    'middleware' => ['auth', 'admin'], 'as' => 'admin.'
], function () {
    Route::get('', [DashboradController::class, 'index'])->name('home');
    Route::resource('colleges', CollegeController::class);
    Route::resource('departments', DepartmentController::class);
    Route::resource('projects', ProjectController::class);

    //announcements
    Route::resource('announcements', AnnouncementController::class);

    //teams
    Route::resource('teams', TeamController::class)->except('show');
    
    //banners
    Route::resource('banners', BannerController::class)->except('show');

    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('profile/project',  [ProfileController::class, 'project'])->name('profile.project');
    Route::put('profile',  [ProfileController::class, 'update'])->name('profile.update');
});
