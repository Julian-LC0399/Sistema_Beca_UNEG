<?php

use App\Http\Controllers\BecaController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\CareeCampusController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\InstitutionController;
use App\Http\Controllers\StuBecaController;
use App\Http\Controllers\StuCampusController;
use App\Http\Controllers\StuCareerController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('institutions', InstitutionController::class);
Route::resource('becas', BecaController::class);
Route::resource('students', StudentController::class);
Route::resource('campuses', CampusController::class);
Route::resource('careers', CareerController::class);
Route::resource('stu-becas', StuBecaController::class);
Route::resource('caree-campuses', CareeCampusController::class);
Route::resource('stu-careers', StuCareerController::class);
Route::resource('stu-campuses', StuCampusController::class);
