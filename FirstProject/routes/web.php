<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Cookie;
// default welcome page
//Route::view('/', 'welcome');

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
// Route::get('/students', function () {
//     $students = ["Anu", "Neha", "Simran", "Seerat"];
//     return view('student')->with('students', $students);
// });


//implode- u can return the elements of array using Implode




//day4
//steps of global view share static data
//step 1 create twoo views 
//step 2 in web.php create route for the views 
//step 3 in AppServiceProvider.php import view at the top
//step 4 in boot function use view:share
//step 5 write content in the views
//step 6 pass the value of key in the views
//step 7 run your url


//global view share
// Route::view('/info1','info1');
// Route::view('/info2','info2');

// Route::view('/abc','globalView1');
// Route::view('/def','globalView2');


//Adding headers
// Route::get('/add-headers',function(){
//     return response ("Headers attached")
//     ->header ('app-name','student')
//     ->header ('content-type','plain-text')
//     ->header ('file-disposition','downloadable');
// });

// Adding cookie
// Route::get('/add-cookies', function () {
//     return response("cookies attached")
//         ->cookie('username', 'Anu', 2);
// });

// // Get cookie
// Route::get('/get-cookies', function () {
//     return request()->cookie('username');
// });

// // Delete cookie
// Route::get('/delete-cookies', function () {
//     return response("cookie deleted")
//         ->cookie(Cookie::forget('username'));
// });


//json response
// Route::get('/jsonresponse1',function(){
//     return response()->json([
//         "name"=>"Anu",
//         "age"=>40,
//         "subject"=>"laravel"
//     ]);
// });

//laravel redirections
//redirect to url
// Route::get('/home',function(){
//     return "Hie am inside home url";
// });
// Route::get('/about',function(){
//     return redirect('/home');
// });

//redirect back
Route::get('/profile',function(){
    return("Hi am inside redirect url");
});

Route::get('/login',function(){
    return 'login';
});

Route::get('/about',function(){
    {return redirect()->back(302);}
});