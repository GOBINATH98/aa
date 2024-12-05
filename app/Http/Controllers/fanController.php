<?php

namespace App\Http\Controllers;

use App\Models\Fan;


use Illuminate\Http\Request;

class fanController extends Controller
{
   
    
    public function index()
    {
        $hi=Fan::all();
      
        return view('pages',compact('hi'));
    }

   
    public function insert(Request $request)
    {
        $ky=new Fan();
        $ky->name=$request->name;

        
      
        $ky->save();
        return back();
    }
    

 public function gopi(){


   echo("make sound");

 }   
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
        //
    }
}
