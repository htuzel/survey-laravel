<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    //return home page views
    public function home()
    {
        return view('home');
    }

    //return individual forms page views
    public function individual()
    {
        return view('surveys.individual');
    }
}
