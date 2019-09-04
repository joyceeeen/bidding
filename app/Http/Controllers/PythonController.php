<?php

namespace App\Http\Controllers;

use App\Python;
use Illuminate\Http\Request;
use File;

class PythonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

      $file = $request->file('model');
      $originalPath = public_path('files/model/'.$request->type.'/');
      if (!File::exists($originalPath)) {
        File::makeDirectory($originalPath, 0775, true, true);
      }
      $filename = $file->getClientOriginalName();
      $python = Python::find($request->id);
      $python->model = $filename;
      $python->save();

      if($python){
        $file->move($originalPath,$filename);
      }

      return response('success',200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Python  $python
     * @return \Illuminate\Http\Response
     */
    public function show(Python $python)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Python  $python
     * @return \Illuminate\Http\Response
     */
    public function edit(Python $python)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Python  $python
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Python $python)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Python  $python
     * @return \Illuminate\Http\Response
     */
    public function destroy(Python $python)
    {
        //
    }
}
