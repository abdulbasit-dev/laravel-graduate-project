<?php

use Illuminate\Support\Facades\Route;


use \App\Http\Controllers\{
    PageController,
    LanguageController
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
Route::get('/change-langauge/{lang}', [LanguageController::class,"changeLanguage"])->name("change-langauge");

//Front End Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/conference-grant', [PageController::class, 'conference'])->name('conference');
Route::get('/graduate-project', [PageController::class, 'graduateProject'])->name('graduateProject');
Route::get('/evaluation', [PageController::class, 'evaluation'])->name('evaluation');

Auth::routes();


//Admin Routes
Route::group([
    'prefix' => 'admin',
    'middleware' => ['auth', 'admin'], 'as' => 'admin.'
], function () {
    Route::get('', [ \App\Http\Controllers\Admin\DashboradController::class, 'index'])->name('home');
    Route::resource('colleges', \App\Http\Controllers\Admin\CollegeController::class);

    Route::get('', [ \App\Http\Controllers\Admin\DashboradController::class, 'index'])->name('home');

    Route::view('about', 'about')->name('about');

    Route::get('users', [ \App\Http\Controllers\Admin\UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ \App\Http\Controllers\Admin\ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile',  [\App\Http\Controllers\Admin\ProfileController::class, 'update'])->name('profile.update');
});
