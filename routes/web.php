<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student;
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



Route::get('/' , [\App\Http\Controllers\StudentController::class , 'index']);

Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::get('/json' , [\App\Http\Controllers\StudentController::class,'json']);

// API data from Japan



