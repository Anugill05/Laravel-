<?php

use Illuminate\Support\Facades\Route;

//required
Route::get('/username/{name}', function ($name) {
    return "The name is: ".$name;
});

//optional
Route::get('/username/{name?}', function ($name="Anu") {
    return "The name is: ".$name;
});

//multivalue
Route::get('/username/{name}/{id}', function ($name,$id) {
    return "The name is: ".$name.$id;
});


//Task1-Create a small routing application using laravel that demonstrates diffrent types of route parameters. First create a route /student/{name} where the 
//name is a required parameter and display a message like "welcome student: name".  next create another route /city/{name?} where the city name is optional; if 
//the user does not provide the city in the URL, the application should display :"City:Unknown". Finally create a route /product/{name}/{price} where the application
//accepts multiple parameters and displays the product name and price entered by the user in the URL.
Route::get('/student/{name}',function($name){
    return 'Welcome Student: '.$name;
});

Route::get('/city/{name?}',function($name="Unknown"){
    return 'City: '.$name;
});

Route::get('/product/{name}/{price}',function($name,$price){
    return 'product name and price respectively: '. $name.$price;
});
