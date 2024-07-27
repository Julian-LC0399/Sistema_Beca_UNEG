<?php

use App\Rest\Controllers\BecasController;
use App\Rest\Controllers\CampusesController;
use App\Rest\Controllers\CareersController;
use App\Rest\Controllers\InstitutionsController;
use App\Rest\Controllers\Stu_becasController;
use App\Rest\Controllers\Stu_campusesController;
use App\Rest\Controllers\Stu_careersController;
use App\Rest\Controllers\StudentsController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Lomkit\Rest\Facades\Rest;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Rest::resource('Institutions', InstitutionsController::class);
Rest::resource('Students', StudentsController::class);
Rest::resource('Stu_careers', Stu_careersController::class);
Rest::resource('Careers', CareersController::class);
Rest::resource('Becas', BecasController::class);
Rest::resource('Campuses', CampusesController::class);
Rest::resource('Stu_becas', Stu_becasController::class);
Rest::resource('Stu_campuses', Stu_campusesController::class);
Rest::resource('Caree_campuses', CareersController::class);
