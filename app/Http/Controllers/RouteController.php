<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App;

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
        $locale = App::getLocale();
        $questions = Question::where('lang','en')->get();
        return view('surveys.individual')->with('questions',$questions);
    }

        //return individual forms page views
        public function group()
        {
            $locale = App::getLocale();
            $questions = Question::where('lang','en')->get();
            return view('surveys.group')->with('questions',$questions);
        }
}
