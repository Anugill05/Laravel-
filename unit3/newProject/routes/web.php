<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstYZController;
use App\Http\Controllers\TestingInvokeController;
use App\Http\Controllers\MyNewController;
use App\Http\Controllers\ResourceYZController;
use App\Http\Controllers\APIYZController;
use App\Http\Controllers\MiddlewareYZController;
use App\Http\Controllers\GYZController;
use App\Http\Controllers\BrainController;
use App\Http\Controllers\ImageController;
//Route::get('/firstyzcontroller', [FirstYZController::class,'show']);
//Route::get('/abc/{id}',[FirstYZController::class,'display']);

//Route::get('/testinginvoke',TestingInvokeController::class);
// Route::get('/calc', [MyNewController::class, 'calc']);
// Route::get('/pattern', [MyNewController::class, 'pattern']);
//Route::resource('abc',ResourceYZController::class);
// Route::apiResource('items',APIYZController::class);
// Route::get('/middleware',[MiddlewareYZController::class,'display'])->middleware('agefactor');
// Route::get('/gm',[GYZController::class,'privacy']);
// Route::get('/brain',[BrainController::class,'access']);

//template inheritance
// Route::view('abc','mylayouts/app');
// Route::view('login','userlogin');
// Route::view('logout','userlogout');


//group routing with prefix
// Route::prefix('223yz')->controller(BrainController::class)
// ->group(function(){
//     Route::get('/access/{id}','access'); //->whereAlpha('id'); //numeric constraints you can also use ->whereNumber('id') and whereAlpha('id') but you will not be able to specify the total numbers
//     Route::get('/data','data');
//     Route::get('info/{id}','info');//->where('id','[0-9]{4,5}');
// });

//group routing without prefix
// Route::controller(BrainController::class)
// ->group(function(){
//     Route::get('/access/{id}','access'); //->whereAlpha('id'); //numeric constraints you can also use ->whereNumber('id') and whereAlpha('id') but you will not be able to specify the total numbers
//     Route::get('/data','data');
//     Route::get('info/{id}','info');//->where('id','[0-9]{4,5}');
// });


//php output
//Route::get('/abcd',function(){
    //$name="Anu";
    //$age=30;
    //echo "The name is ".$name;
    //var_dump($name);
    //var_dump($age);
//     $names=['Anu','Anjali','Neha'];
//     print_r($names);
// });


//blade template
//Route::get('/hij',function(){
    //$names=["Anu","Anjali","Neha"];
    //return view('coding',compact('names'));
    //$age=30;
    //return view('coding',compact('age'));
//});


//domain routing
// Route::domain('admin.localhost')->group(function(){
//     Route::get('/abc',function(){
//         return "I am admin";
//     });
//     Route::get('/def',function(){
//         return 'I am user';
//     });
// });
//run code via http://admin.localhost:8000/abc
//http://admin.localhost:8000/def 


//named routes via controller
// Route::get('/',function(){
//     return view('coding');
// });
// Route::get('/acv/gjjj/uuiii/saaa/jhddkck',
// [GYZController::class,'privacy'])->name('223yz');

//task 

// Route::get('/cartoon', [ImageController::class, 'showCartoon']);
// Route::get('/spiderman', [ImageController::class, 'showSpiderman']);

//generating frameworks via URL and action, ->3 method url, action and named routes
// Route::get('/first',[BrainController::class,'first']);
// Route::get('/second',[BrainController::class,'second']);

//url generation by inbuilt method
Route::get('/abc',function(){
    return view('data');
});