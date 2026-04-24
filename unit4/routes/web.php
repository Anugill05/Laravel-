<?php

use App\Http\Controllers\uploadYZController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\uploadYZControllerController;
use App\Http\Controllers\EmailYZController;
use App\Mail\TestingYZMail;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Request;

//upload file
// Route::get('/abc',[uploadYZController::class,'show']);
// Route::post('/upload',[uploadYZController::class,'upload']);

//laravel localization
//Localization in Laravel is the process of displaying content in different languages based on user preference.
//It allows your application to support multiple languages
// Route::get('/',function(){
//     return view('homeP');
// });

//que- make use of 5 diff languages display one by one content,


//Dynamic localization
// Route::get('/',function(){
//     return view('homeP');
// });

// Route::get('/lang/{locale}', function ($locale) {
//     session(['locale'=>$locale]);
//     return redirect()->back();
// });

//Task - student are required to develop cookie based functionalities using routes and practical implementation.
//a)The student needs to create an application with two routes, where one route sets a cookie city=mumbai and another route retrives and display its value
//b)Additionaly, the student must write code to check whether the cookie exists before displaying it, if the cookie is not found, the message "cookie not found" should be shown.
//c)the student is also required to implement functionality using Cookie::queue() to set multiple cookies such as name and email
//d)further the student must design a mini feature that includes a form where a user enter

//hints
//how to test(flow)
//1 Open /set-city -> cookie is created(city=mumbai)
//2 open /get-city -> displays stored cookie value
//3 open /check-city -> verifies whether cookie exists
//4 open /set-multiple ->sets multiple cookie(name,email)
//5 open /form -> enter name and submit
//6 open /login -> simulate login and store user_id in cookie
//7 open /dashboard -> check if user is logged in using cookie
//8 open /logout -> delete cookie and end session

//1)Route to set cookie(city=mumbai)
// Route::get('/set-city', function () {
//     return response("City cookie has been set to Mumbai")
//         ->cookie('city', 'mumbai', 60); // 60 minutes
// });

// //2)Retrieve and display cookie
// Route::get('/get-city', function (Request $request) {
//     return "City is: " . $request->cookie('city');
// });

// //3)verify whether cookie exists
// Route::get('/check-city', function (Request $request) {
//     if ($request->hasCookie('city')) {
//         return "City exists: " . $request->cookie('city');
//     } else {
//         return "cookie not found";
//     }
// });

// //4) Set multiple cookie using Cookie::queue()
// Route::get('/set-multiple', function () {
//     Cookie::queue('name', 'Anu', 60);
//     Cookie::queue('email', 'anu@example.com', 60);

//     return "Multiple cookies (name, email) have been set";
// });

// //form page
// Route::get('/form', function () {
//     return '
//         <form method="POST" action="/submit">
//             '.csrf_field().'
//             <input type="text" name="name" placeholder="Enter Name" required>
//             <button type="submit">Submit</button>
//         </form>
//     ';
// });

// //handle form submission
// Route::post('/submit', function (Request $request) {
//     return response("Name stored in cookie")
//         ->cookie('name', $request->name, 60);
// });

// //Simulate Login (store user_id in cookie)
// Route::get('/login', function () {
//     return response("User logged in")
//         ->cookie('user_id', 101, 60);
// });

// //Dashboard(check if user logged in)
// Route::get('/dashboard', function (Request $request) {
//     if ($request->hasCookie('user_id')) {
//         return "Welcome User ID: " . $request->cookie('user_id');
//     } else {
//         return "Please login first";
//     }
// });

// //logout-delete cookie and end session
// Route::get('/logout', function () {
//     return response("Logged out")
//         ->cookie(Cookie::forget('user_id'));
// });

//Sending emails
Route::get('/abc',[EmailYZController::class,'send']);
