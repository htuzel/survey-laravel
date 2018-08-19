<?php

namespace App\Http\Controllers;

use App\Reference;
use Illuminate\Http\Request;

class ReferenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $references = Reference::paginate(100);
        return view('admin.references')->with('references',$references);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.referencecreate');
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
            'name' => 'required|max:1000',
            'link' => 'required|max:2000',
            'date' => 'required|max:100'
        ]);
        $reference = new Reference;
        $reference->name = $request->input('name');
        $reference->link = $request->input('link');
        $reference->date = $request->input('date');
        $reference->save();
        return redirect()->action('ReferenceController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function show(Reference $reference)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reference= Reference::find($id);
        return view('admin.referenceedit')->with('reference',$reference);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:1000',
            'link' => 'required|max:2000',
            'date' => 'required|max:100'
        ]);
        $reference = Reference::find($id);
        $reference->name = $request->input('name');
        $reference->link = $request->input('link');
        $reference->date = $request->input('date');
        $reference->save();
        return redirect()->action('ReferenceController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Reference  $reference
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reference = Reference::find($id);
        try{
            $reference->delete();
            return "successfully deleted";
        }catch(Exception $e){
            return "unsuccesfully deleted";
        }
    }
}
