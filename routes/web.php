<?php

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







Route::resource('students', \App\Http\Controllers\StudentController::class);
Route::get('/json' , [\App\Http\Controllers\StudentController::class,'json']);

// API data from Japan

Route::get('/' , function (){
    return redirect()->route('students.index');
});

//Route::resource('records', \App\Http\Controllers\RecordController::class);
Route::get('/get-data' , [\App\Http\Controllers\RecordController::class , 'getData']);
