<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', function () {
    return view('welcome');
});


Route::prefix("task")->group(function(){
    Route::get('/',[TaskController::class,"index"])->name('task.index');
    Route::get("/create",[TaskController::class,"create"])->name("task.create");
    Route::post("/",[TaskController::class,"store"])->name("task.store");
    Route::get("{id}/edit",[TaskController::class,"edit"])->name("task.edit");
    Route::put("{id}",[TaskController::class,"update"])->name("task.update");
    Route::delete('{id}', [TaskController::class,"destroy"])->name("task.destroy");
    Route::delete('/mail', [TaskController::class,"ht"])->name("task.mail");
});