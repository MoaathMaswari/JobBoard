<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index']);
Route::get('/jobs',[MainController::class, 'jobs']);
Route::get('/about',[MainController::class, 'about']);
Route::get('/contact',[MainController::class, 'contact']);

Route::resource('jobs',JobsController::class);


Route::get('/comment/{id}',[CommentsController::class, 'commentPage'])->name('comment');
Route::get('/jobs/comments/{id}',[JobsController::class, 'comments']);



