<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FirstYZController extends Controller
{
    public function show(){
        $courses=["php","c","python"];
        return view('showview',compact('courses'));
    }
    public function display($id){
        $users=[
            1=>"Anu",
            2=>"Neha",
            3=>"Anjali"
        ];
        return $users[$id] ?? "Oops user is not there";
    }
}
