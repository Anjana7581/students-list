<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\GuardianController;


Route::get('/', function () {
    return view('school_welcome');
});
Route::resource('students', StudentController::class);
Route::resource('guardians', GuardianController::class);


