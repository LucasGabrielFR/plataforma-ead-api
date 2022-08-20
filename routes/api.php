<?php

use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\ModuleController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/courses', [CourseController::class, 'index']);
Route::get('/courses/{id}', [CourseController::class, 'show']);

Route::get('/courses/{id}/modules', [ModuleController::class, 'index']);

Route::get('/', function () {
    return response()->json([
        'message' => 'Welcome to the API',
        'status' => 'success',
        'code' => 200
    ]);
});
