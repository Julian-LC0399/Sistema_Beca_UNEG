<?php

use App\Rest\Controllers\InstitutionsController;
use App\Rest\Controllers\StudentsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \Lomkit\Rest\Facades\Rest;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Rest::resource('Institutions', InstitutionsController::class);
Rest::resource('Students', StudentsController::class);
