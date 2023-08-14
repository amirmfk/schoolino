<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\SchoolclassController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::resource('student',StudentController::class);
Route::resource('school',SchoolController::class);
Route::resource('schoolclass',SchoolclassController::class);


Auth::routes(['verify' => true]);

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('search-student',[StudentController::class, 'studentSearch']);
Route::get('ssi',[StudentController::class, 'setSpecifiecStudent'])->name('ssi');
