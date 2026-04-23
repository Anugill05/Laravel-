<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
//inbuilt authentication in laravel is breeze
//installed using composer require laravel/breeze --dev

//who is vendor of laravel -- composer or laravel