<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

// Resource route for CRUD operations on tasks
Route::resource('tasks', TaskController::class);