<?php

namespace App\Http\Controllers;

use App\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$groups = Group::where('lang','en')->simplePaginate(100);
        $groups = Group::paginate(100);
        return view('admin.groups')->with('groups',$groups);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.groupcreate');
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
            'name' => 'required|max:100',
            'pin' => 'required|max:8',
            'description' => 'nullable|max:1000'
        ]);
        $group = new Group;
        $group->name = $request->input('name');
        $group->pin = $request->input('pin');
        $group->description = $request->input('description');
        $group->save();
        return redirect()->action('GroupController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $group= Group::find($id);
        return view('admin.groupedit')->with('group',$group);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100',
            'pin' => 'required|max:8',
            'description' => 'nullable|max:1000'
        ]);
        $group = Group::find($id);
        $group->name = $request->input('name');
        $group->pin = $request->input('pin');
        $group->description = $request->input('description');
        $group->save();
        return redirect()->action('GroupController@index');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $group = Group::find($id);
        try{
            $group->delete();
            return "successfully deleted";
        }catch(Exception $e){
            return "unsuccesfully deleted";
        }
    }
}
