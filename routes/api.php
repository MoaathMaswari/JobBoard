<?php

use App\Http\Controllers\api\JobsApiController;
use Illuminate\Support\Facades\Route;


Route::apiResource('jobs',JobsApiController::class);
