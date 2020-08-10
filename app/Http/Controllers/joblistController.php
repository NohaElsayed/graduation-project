<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\indeed;
use App\datasearch;
use App\wuzzuf;
use App\batdot;

class joblistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.joblist.joblist');
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
        $search = $request->search;


            // $wuzzuf = new wuzzuf();
            // $wuzzuf->wuzzuf($search);

            //  $indeed =new indeed();
            //  $indeed->wuzzuf($search);
      
             $batdot=new batdot();
             $batdot->wuzzuf($search);
      
           $datasearch = datasearch::all();
           return view('admin.joblist.jobsgallery',compact('datasearch'));
 
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

    public function about()
    {
        return view('admin.about.about');
    }
    public function servies()
    {
        return view('admin.servies.service');
    }


}
