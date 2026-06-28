<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MainController::class, 'index']);
Route::get('/jobs',[MainController::class, 'jobs']);
Route::get('/about',[MainController::class, 'about']);
Route::get('/contact',[MainController::class, 'contact']);


Route::get('/job/add',[MainController::class, 'addJob']);
Route::get('/job/edit/{id}',[MainController::class, 'editJob']);
Route::get('/job/delete/{id}',[MainController::class, 'deleteJob']);
Route::get('/job/comment/{id}',[MainController::class, 'comment']);

Route::get('/job/create',[JobsController::class, 'createJob'])->name('create');
Route::get('/edit/{id}',[JobsController::class, 'editJob'])->name('edit');
Route::get('/delete/{id}',[JobsController::class, 'deleteJob'])->name('delete');

Route::get('/comment',[CommentsController::class, 'addComment'])->name('comment');
Route::get('/job/comments/{id}',[JobsController::class, 'comments']);


Route::get('/tag',[MainController::class, 'createTag']);


