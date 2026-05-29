<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassesController;
use Illuminate\Support\Facades\Route;

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

Route::get('home', [HomeController::class, 'ViewHome'])->name('home');
Route::get('aboutus', [AboutUsController::class, 'ViewAboutUs'])->name('aboutus');
Route::get('student', [StudentController::class, 'ViewStudent'])->name('student');
Route::get('classes', [ClassesController::class, 'viewClasses'])->name('classes');
