<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExampleController;


Route::get('/', [UserController::class, 'showConnectedHomepage']);
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class,'logout']);
Route::get('/create', [PostController::class, 'create']);
Route::post('/create', [PostController::class, 'store']);