<?php

namespace App\Http\Controllers;

use App\Result;
use App\Exports\ResultsExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;

class ResultController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Result::where('group_id',null)->simplePaginate(100);
        return view('admin.individualresults')->with('results',$results);
    }

        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function group()
    {
        $results = Result::whereNotNull('group_id')->simplePaginate(100);
        return view('admin.groupresults')->with('results',$results);
    }

    public function groupDetail($id)
    {
        $results = Result::where('group_id',$id)->get();
        return view('admin.groupresultsdetail')->with('results',$results);
    }


    public function export()
    {
        return Excel::download(new ResultsExport, 'results.xlsx');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = Result::find($id);
        try{
            $result->delete();
            return "successfully deleted";
        }catch(Exception $e){
            return "unsuccesfully deleted";
        }
    }
}
