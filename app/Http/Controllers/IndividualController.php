<?php

namespace App\Http\Controllers;

use App\Individual;
use Auth;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $individuals = Individual::all();

        return view('individuals.index', compact('individuals'));
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
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function show(Individual $individual)
    {
        return view('individuals.show', compact('individual'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $individual = Individual::findOrFail($id);

        return view('individuals.edit', compact('individual'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $individual = Individual::findOrFail($id);

        $individual->displayName = request('displayName');
        $individual->phoneNumber= request('phoneNumber');
        $individual->emergencyContact= request('emergencyContact');
        $individual->emergencyPhone= request('emergencyPhone'); 

        $individual->save();

        $user = Auth::user();
        
        if ($user->admin)
        {
            return redirect('/individuals');
        }
        else{
            return redirect('/individuals/' . $id);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function destroy(Individual $individual)
    {
        //
    }
}
