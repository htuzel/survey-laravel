<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::where('lang','en')->simplePaginate(100);
        return view('admin.questions')->with('questions',$questions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.questioncreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'question' => 'required|max:1000',
            'motivation' => 'required',
            'style' => 'required',
            'language' => 'required',
        ]);
        $question = new Question;
        $question->question = $request->input('question');
        $question->motivation = $request->input('motivation');
        $question->style = $request->input('style');
        $question->lang = $request->input('language');
        $question->save();
        return redirect()->action('QuestionController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $question= Question::find($id);
        return view('admin.questionedit')->with('question',$question);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'question' => 'required|max:1000',
            'motivation' => 'required',
            'style' => 'required',
            'language' => 'required',
        ]);
        $question = Question::find($id);
        $question->question = $request->input('question');
        $question->motivation = $request->input('motivation');
        $question->style = $request->input('style');
        $question->lang = $request->input('language');
        $question->save();
        return redirect()->action('QuestionController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::find($id);
        try{
            $question->delete();
            return "successfully deleted";
        }catch(Exception $e){
            return "unsuccesfully deleted";
        }
    }
}
