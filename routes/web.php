<?php

use App\Http\Controllers\Admin\AcademicController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ProjectController;

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('landing');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/projects',[ProjectController::class,'index']);
Route::get('/dashboard/profile',[ProfileController::class,'index'])->name('profile');
Route::get('/dashboard/academic',[AcademicController::class,'index']);
require __DIR__.'/auth.php';
