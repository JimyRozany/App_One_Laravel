<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    
    public function index() // home page
    {
        return view('static.index');
    }
//----------------------------------------
    public function about()
    {
        return view('static.about');
    }
//----------------------------------------

    public function contact()
    {
        return view('static.contact');
    }
}
//----------------------------------------
