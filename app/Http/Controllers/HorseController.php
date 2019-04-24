<?php

namespace App\Http\Controllers;

use App\Horse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HorseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $horses = Horse::all();

        return view('horses.index', compact('horses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('horses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $horse = new Horse();

        $horse->name = request('name');
        $horse->color = request('color');
        $horse->markings = request('markings');
        
        if($request->hasFile('mainImg')) {
            $path = $request->file('mainImg')->store('images');
            $horse->mainImg = $path;
        }

        if($request->hasFile('secondImg')) {
            $path = $request->file('secondImg')->store('images');
            $horse->secondImg = $path;
        }

        if($request->hasFile('thirdImg')) {
            $path = $request->file('thirdImg')->store('images');
            $horse->thirdImg = $path;
        }

        if($request->hasFile('fourthImg')) {
            $path = $request->file('fourthImg')->store('images');
            $horse->fourthImg = $path;
        }

        $horse->isInactive = 0;

        $horse->save();

        return redirect('/horses');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function show(Horse $horse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $horse = Horse::findOrFail($id);

        return view('horses.edit', compact('horse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $horse = Horse::findOrFail($id);

        $horse->name = request('name');
        $horse->color = request('color');
        $horse->markings = request('markings');        

        $horse->save();

        return redirect('/horses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Horse::findOrFail($id)->isDeleted = 1;

        return redirect('/horses');
    }
}