<?php

use Illuminate\Support\Facades\Route;

// default welcome page
Route::view('/', 'welcome');

// student view route
//Route::view('/use/it/223yz/laravel', 'student')->name('student');




//passing values to views
//1using array
// Route::get('/students', function () {
//     $students = ["Anu", "Neha", "Simran", "Seerat"];
//     return view('student', ['students' => $students]);
// });

//2using compact
// Route::get('/students', function () {
//     $students = ["Anu", "Neha", "Simran", "Seerat"];
//     return view('student', compact('students'));
// });

//3using with()
Route::get('/students', function () {
    $students = ["Anu", "Neha", "Simran", "Seerat"];
    return view('student')->with('students', $students);
});


//implode- u can return the elements of array using Implode

//Task 3-