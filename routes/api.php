<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\projectController;
use App\Http\Controllers\skillsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('showSkills', [skillsController::class, 'show']);
Route::get('showProjects', [projectController::class, 'show']);
Route::post('contact', [ContactController::class, 'send']);
Route::post('recieve', [ContactController::class, 'recieve']);