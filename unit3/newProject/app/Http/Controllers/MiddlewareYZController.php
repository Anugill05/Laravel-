<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MiddlewareYZController extends Controller
{
    public function display(){
        return "success, you are in";
    }
}
