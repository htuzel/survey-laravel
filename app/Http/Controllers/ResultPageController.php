<?php

namespace App\Http\Controllers;

use App\Result;
use App\Group;
use Illuminate\Http\Request;
use Lang;

class ResultPageController extends Controller
{
    public function individual(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:1000',
            'email' => 'required|max:1000|email',
        ]);
        $result = new Result();
        $result->name = $request->input('name');
        $result->email = $request->input('email');
        $result->demystifier  = $request->input('answer.1') + $request->input('answer.2') + $request->input('answer.25') + $request->input('answer.26');
        $result->watchdog     = $request->input('answer.3') + $request->input('answer.4') + $request->input('answer.27') + $request->input('answer.28');
        $result->activist     = $request->input('answer.5') + $request->input('answer.6') + $request->input('answer.29') + $request->input('answer.30');
        $result->professor    = $request->input('answer.7') + $request->input('answer.8') + $request->input('answer.31') + $request->input('answer.32');
        $result->professional = $request->input('answer.9') + $request->input('answer.10') + $request->input('answer.33') + $request->input('answer.34');
        $result->teacher      = $request->input('answer.11') + $request->input('answer.12') + $request->input('answer.35') + $request->input('answer.36');
        $result->techie       = $request->input('answer.13') + $request->input('answer.14') + $request->input('answer.37') + $request->input('answer.38');
        $result->spirit_guide = $request->input('answer.15') + $request->input('answer.16') + $request->input('answer.39') + $request->input('answer.40');
        $result->motivator    = $request->input('answer.17') + $request->input('answer.18') + $request->input('answer.41') + $request->input('answer.42');
        $result->trendsetter  = $request->input('answer.19') + $request->input('answer.20') + $request->input('answer.43') + $request->input('answer.44');
        $result->alt          = $request->input('answer.21') + $request->input('answer.22') + $request->input('answer.45') + $request->input('answer.46');
        $result->taste_maker  = $request->input('answer.23') + $request->input('answer.24') + $request->input('answer.47') + $request->input('answer.48');
        $result->protect =  $request->input('answer.1') + $request->input('answer.2') + $request->input('answer.3') + $request->input('answer.4') +
                            $request->input('answer.5') + $request->input('answer.6') + $request->input('answer.7') + $request->input('answer.8') +
                            $request->input('answer.9') + $request->input('answer.10') + $request->input('answer.11') + $request->input('answer.12') +
                            $request->input('answer.13') + $request->input('answer.14') + $request->input('answer.15') + $request->input('answer.16') +
                            $request->input('answer.17') + $request->input('answer.18') + $request->input('answer.19') + $request->input('answer.20') +
                            $request->input('answer.21') + $request->input('answer.22') + $request->input('answer.23') + $request->input('answer.24');
        $result->empower =  $request->input('answer.25') + $request->input('answer.26') + $request->input('answer.27') + $request->input('answer.28') +
                            $request->input('answer.29') + $request->input('answer.30') + $request->input('answer.31') + $request->input('answer.32') +
                            $request->input('answer.33') + $request->input('answer.34') + $request->input('answer.35') + $request->input('answer.36') +
                            $request->input('answer.37') + $request->input('answer.38') + $request->input('answer.39') + $request->input('answer.40') +
                            $request->input('answer.41') + $request->input('answer.42') + $request->input('answer.43') + $request->input('answer.44') +
                            $request->input('answer.45') + $request->input('answer.46') + $request->input('answer.47') + $request->input('answer.48');
        $result->save();
        return view('surveys.results')->with('result',$result)->with('results',$result->sort());
    }

    public function group(Request $request) {
        $validatedData = $request->validate([
            'group_name' => 'required|max:200',
            'pin' => 'required|max:100',
            'name' => 'required|max:1000',
            'email' => 'required|max:1000|email',
        ]);
        $group = Group::where('name',$request->input('group_name'))->where('pin',$request->input('pin'))->first();
        if($group == null)
        {
            return redirect()->route("group_survey")->with('alert', Lang::get('Please provide a valid group name and pin.'));
        }
        $result = new Result();
        $result->name = $request->input('name');
        $result->email = $request->input('email');
        $result->group_id = $group->id;
        $result->demystifier  = $request->input('answer.1') + $request->input('answer.2') + $request->input('answer.25') + $request->input('answer.26');
        $result->watchdog     = $request->input('answer.3') + $request->input('answer.4') + $request->input('answer.27') + $request->input('answer.28');
        $result->activist     = $request->input('answer.5') + $request->input('answer.6') + $request->input('answer.29') + $request->input('answer.30');
        $result->professor    = $request->input('answer.7') + $request->input('answer.8') + $request->input('answer.31') + $request->input('answer.32');
        $result->professional = $request->input('answer.9') + $request->input('answer.10') + $request->input('answer.33') + $request->input('answer.34');
        $result->teacher      = $request->input('answer.11') + $request->input('answer.12') + $request->input('answer.35') + $request->input('answer.36');
        $result->techie       = $request->input('answer.13') + $request->input('answer.14') + $request->input('answer.37') + $request->input('answer.38');
        $result->spirit_guide = $request->input('answer.15') + $request->input('answer.16') + $request->input('answer.39') + $request->input('answer.40');
        $result->motivator    = $request->input('answer.17') + $request->input('answer.18') + $request->input('answer.41') + $request->input('answer.42');
        $result->trendsetter  = $request->input('answer.19') + $request->input('answer.20') + $request->input('answer.43') + $request->input('answer.44');
        $result->alt          = $request->input('answer.21') + $request->input('answer.22') + $request->input('answer.45') + $request->input('answer.46');
        $result->taste_maker  = $request->input('answer.23') + $request->input('answer.24') + $request->input('answer.47') + $request->input('answer.48');
        $result->protect =  $request->input('answer.1') + $request->input('answer.2') + $request->input('answer.3') + $request->input('answer.4') +
                            $request->input('answer.5') + $request->input('answer.6') + $request->input('answer.7') + $request->input('answer.8') +
                            $request->input('answer.9') + $request->input('answer.10') + $request->input('answer.11') + $request->input('answer.12') +
                            $request->input('answer.13') + $request->input('answer.14') + $request->input('answer.15') + $request->input('answer.16') +
                            $request->input('answer.17') + $request->input('answer.18') + $request->input('answer.19') + $request->input('answer.20') +
                            $request->input('answer.21') + $request->input('answer.22') + $request->input('answer.23') + $request->input('answer.24');
        $result->empower =  $request->input('answer.25') + $request->input('answer.26') + $request->input('answer.27') + $request->input('answer.28') +
                            $request->input('answer.29') + $request->input('answer.30') + $request->input('answer.31') + $request->input('answer.32') +
                            $request->input('answer.33') + $request->input('answer.34') + $request->input('answer.35') + $request->input('answer.36') +
                            $request->input('answer.37') + $request->input('answer.38') + $request->input('answer.39') + $request->input('answer.40') +
                            $request->input('answer.41') + $request->input('answer.42') + $request->input('answer.43') + $request->input('answer.44') +
                            $request->input('answer.45') + $request->input('answer.46') + $request->input('answer.47') + $request->input('answer.48');
        $result->save();
        return view('surveys.results')->with('result',$result)->with('results',$result->sort());
    }
}
