<?php

use Illuminate\Support\Facades\Route;


use \App\Http\Controllers\{
    PageController,
    LanguageController,
};

use \App\Http\Controllers\Admin\{
    CollegeController,
    DepartmentController,
    TeamController,
    BannerController,
    ProjectController,
    UserController,
    ProfileController
};
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

//Front End Routes
//Page Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/projects', [PageController::class, 'project'])->name('project');
Route::get('/projects/{project}', [PageController::class, 'projectShow'])->name('projectShow');
Route::get('/conferences', [PageController::class, 'conference'])->name('conference');
Route::get('/evaluation-committee', [PageController::class, 'evaluation'])->name('evaluationCommittee');
Route::get('/expert-system-info', [PageController::class, 'expertSystemInfo'])->name('expertSystemInfo');
Route::get('/announcements', [PageController::class, 'announcements'])->name('announcements');
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
    //teams
    Route::resource('teams', TeamController::class)->except('show');
    //banners
    Route::resource('banners', BannerController::class)->except('show');
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile',  [ProfileController::class, 'update'])->name('profile.update');
});
