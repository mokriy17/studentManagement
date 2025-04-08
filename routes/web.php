<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;


Route::get('/', function () {
    return view('layout');
});

Route::resource("/students", StudentController::class);
Route::resource("/teachers", \App\Http\Controllers\TeacherController::class);
Route::resource("/courses", CourseController::class);
Route::resource("/batches", \App\Http\Controllers\BatchController::class);
