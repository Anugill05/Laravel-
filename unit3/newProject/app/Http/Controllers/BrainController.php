<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrainController extends Controller
{
    // public function  __construct(){
    //     $this->middleware('agefactor');
    // }
    // public function data(){
    //     return "allowed to use";
    // }
    // public function access($id){
    //     return "Hie, you are allowed to access the page".$id;
    // }
    // public function info($id){
    //     return "The info id is: ".$id;
    // }
    public function first(){
        return view('myyzdata');
    }
    public function second(){
        return "This is second function";
    }
}
