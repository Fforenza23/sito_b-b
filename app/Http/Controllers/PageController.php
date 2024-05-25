<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contattaci()
    {
        return view('contattaci');
    }
    public function chisiamo(){
        return view('chisiamo');
    }
    public function test()
    {
        return view('test');
    }
}