<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    // First page (cartoon image)
    public function showCartoon()
    {
        return view('cartoon');
    }

    // Second page (spiderman image)
    public function showSpiderman()
    {
        return view('spiderman');
    }
}