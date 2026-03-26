<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//invokable controller created using  php artisan make:controller TestingInvokeController --invokable
class TestingInvokeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        return "hi am invokable controller with single method";
    }
}
