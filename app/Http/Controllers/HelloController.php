<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    function showHello($name) { return '<h1>Hello: '.$name.'</h1>';}
    // function showResultProduct($product_name) { return '<h1>Result Product: '.$product_name.'</h1>';}
    function show() {
        return view('create.users')
        ->with('name', 'BOSS')
        ->with('title', 'Laravel Tutorial');
    }
}