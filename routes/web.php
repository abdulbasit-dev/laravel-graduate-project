<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\{
    DashboradController,
    UserController,
    ProfileController,
};

use \App\Http\Controllers\{
    PageController
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


//Front End Routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/conference-grant', [PageController::class, 'conference'])->name('conference');
Route::get('/graduate-project', [PageController::class, 'graduateProject'])->name('graduateProject');
Route::get('/evaluation', [PageController::class, 'evaluation'])->name('evaluation');

Auth::routes();


//Admin Routes
Route::group([
    'prefix' => 'admin',  'namespace' => 'Admin',
    'middleware' => ['auth', 'admin'], 'as' => 'admin.'
], function () {
    Route::get('', [DashboradController::class, 'index'])->name('home');
    Route::view('about', 'about')->name('about');

    Route::get('users', [UserController::class, 'index'])->name('users.index');

    Route::get('profile', [ProfileController::class, 'show'])->name('profile.show');
    Route::put('profile', [ProfileController::class, 'update'])->name('profile.update');
});
