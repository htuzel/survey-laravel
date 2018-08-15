<?php

namespace App\Http\Controllers;

use App\Result;
use Illuminate\Http\Request;

class ResultPageController extends Controller
{
    public function individual(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required|max:1000',
            'email' => 'required|max:1000|email',
        ]);

        $result = new Result();


    }

    public function group(Request $request) {

        return "deneme_group";

    }
}
