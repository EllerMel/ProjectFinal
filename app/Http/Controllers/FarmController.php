<?php

namespace App\Http\Controllers;

use App\Farm;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FarmController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farms = Farm::all();

        return view('farms.index', compact('farms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        if ($user->admin)
        {
            return view('farms.create');

        } else {
            return redirect('/farm');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $farm = new Farm();

        $farm->name = request('name');
        $farm->adress1 = request('address1');
        $farm->address2 = request('address2');
        $farm->city = request('city');
        $farm->state = request('state');
        $farm->zip = request('zip');
        $farm->phone = request('phone');
        $farm->email = request('email');
        $farm->website = request('website');
        
        if($request->hasFile('featureImg')) {
            $path = $request->file('featureImg')->store('images');
            $farm->featureImg = $path;
        }

        if($request->hasFile('stallImg')) {
            $path = $request->file('stallImg')->store('images');
            $farm->stallImg = $path;
        }

        if($request->hasFile('pastureImg')) {
            $path = $request->file('pastureImg')->store('images');
            $farm->pastureImg = $path;
        }

        if($request->hasFile('ringImg')) {
            $path = $request->file('ringImg')->store('images');
            $farm->ringImg = $path;
        }

        $farm->save();

        return redirect('/farm');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function show(Farm $farm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->admin)
        {
            $farm = Farm::findOrFail($id);
            return view('farms.edit', compact('farm'));

        } else {
            return redirect('/farm');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $farm = Farm::findOrFail($id);

        $farm->name = request('name');
        $farm->address1 = request('address1');
        $farm->address2 = request('address2');
        $farm->city = request('city');
        $farm->state = request('state');
        $farm->zip = request('zip');
        $farm->phone = request('phone');
        $farm->website = request('website');

        if($request->hasFile('featureImg')) {
            $path = $request->file('featureImg')->store('images');
            $farm->featureImg = $path;
        }
        if($request->hasFile('stallImg')) {
            $path = $request->file('stallImg')->store('images');
            $farm->stallImg = $path;
        }
        if($request->hasFile('pastureImg')) {
            $path = $request->file('pastureImg')->store('images');
            $farm->pastureImg = $path;
        }
        if($request->hasFile('ringImg')) {
            $path = $request->file('ringImg')->store('images');
            $farm->ringImg = $path;
        }

        $farm->save();

        return redirect('/farm');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farm  $farm
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farm $farm)
    {
        //
    }
}
