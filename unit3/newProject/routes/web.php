<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstYZController;
use App\Http\Controllers\TestingInvokeController;
use App\Http\Controllers\MyNewController;
use App\Http\Controllers\ResourceYZController;
use App\Http\Controllers\APIYZController;
use App\Http\Controllers\MiddlewareYZController;
use App\Http\Controllers\GYZController;
//Route::get('/firstyzcontroller', [FirstYZController::class,'show']);
//Route::get('/abc/{id}',[FirstYZController::class,'display']);

//Route::get('/testinginvoke',TestingInvokeController::class);
Route::get('/calc', [MyNewController::class, 'calc']);
Route::get('/pattern', [MyNewController::class, 'pattern']);
//Route::resource('abc',ResourceYZController::class);
Route::apiResource('items',APIYZController::class);
Route::get('/middleware',[MiddlewareYZController::class,'display'])->middleware('agefactor');
Route::get('/gm',[GYZController::class,'privacy']);