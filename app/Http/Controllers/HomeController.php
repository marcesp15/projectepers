<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('welcome');
    }

    public function contenido()
    {
        return view('management');
    }

    public function header() 
    {
        return view('layouts.header');
    }
}
