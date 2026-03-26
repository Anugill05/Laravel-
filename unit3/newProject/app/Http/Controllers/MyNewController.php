<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyNewController extends Controller
{
    public function calc(Request $request){
    $x = $request->input('x');
    $y = $request->input('y');

    $result = [
        'sum' => $x + $y,
        'diff' => $x - $y,
        'mul' => $x * $y,
        'div' => ($y != 0) ? $x / $y : 'Division by zero'
    ];

    return view('calcview', compact('result','x','y'));
}
    public function pattern(Request $request){
    $n = $request->input('n');

    $pattern = [];

    for($i = 1; $i <= $n; $i++){
        $row = [];
        for($j = 1; $j <= $i; $j++){
            $row[] = 1;
        }
        $pattern[] = $row;
    }

    return view('patternview', compact('pattern','n'));
}
}
