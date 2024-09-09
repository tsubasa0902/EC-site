<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    //
    public function showComoponent1()
    {
        return view('tests.component-test1');
    }
    public function showComoponent2()
    {
        return view('tests.component-test2');
    }
}
