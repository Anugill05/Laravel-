<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BrainController extends Controller
{
    public function  __construct(){
        $this->middleware('agefactor');
    }
    public function access(){
        return "Hie, you are allowed to access the page";
    }
}
