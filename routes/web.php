<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\BatchController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Controllers\PaymentController;


Route::get('/', function () {
    return view('layout');
});

Route::resource("/students", StudentController::class);
Route::resource("/teachers", \App\Http\Controllers\TeacherController::class);
Route::resource("/courses", CourseController::class);
Route::resource("/batches", \App\Http\Controllers\BatchController::class);
Route::resource("/enrollments", \App\Http\Controllers\EnrollmentController::class);
Route::resource("/payments", \App\Http\Controllers\PaymentController::class);
