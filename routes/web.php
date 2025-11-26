<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "app";
});

Route::get('/students', [UsersController::class, 'allStudents']);
Route::get('/students_model', [UsersController::class, 'allStudents_model']);
Route::get('/student/{id}', [UsersController::class, 'studentDetail'])->name('student.detail');