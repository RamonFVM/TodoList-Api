<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;


Route::get('/todolist', [TodoController::class, 'index']);
Route::post('/todolist', [TodoController::class, 'store']);
Route::put('/todolist/{id}', [TodoController::class, 'update']);
Route::delete('/todolist/{id}', [TodoController::class, 'destroy']);
Route::get('/todolist/{id}', [TodoController::class, 'show']);