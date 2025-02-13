<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

// Display tasks on the homepage instead of the welcome page
Route::get('/', [TaskController::class, 'index']);

// Resource route for CRUD operations on tasks
Route::resource('tasks', TaskController::class);
