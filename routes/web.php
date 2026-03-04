<?php

use App\Http\Controllers\projectController;
use App\Http\Controllers\skillsController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("index", [projectController::class, "index"]);
Route::get("createProject", [projectController::class, "create"]);
Route::post("storeProject", [projectController::class, "store"]);
Route::get("edit/{id}", [projectController::class, "edit"]);
Route::post("updateProject", [projectController::class, "update"]);
Route::get("delete/{id}", [projectController::class, "delete"]);


Route::get("indexSkills", [skillsController::class, "index"]);
Route::get("create", [skillsController::class, "createSkills"]);
Route::post("store", [skillsController::class, "store"]);
Route::get("editSkill/{id}", [skillsController::class, "edit"]);
Route::post("update", [skillsController::class, "update"]);
Route::get("deleteSkill/{id}", [skillsController::class, "delete"]);

