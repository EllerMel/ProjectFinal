<?php

namespace App\Http\Controllers;

use App\Location;
use Auth;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if ($user->admin)
        {
            $locations = Location::all();

            return view('locations.index', compact('locations'));
        } else {
            return redirect('/home');
        }
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
            return view('locations.create');
        } else {
            return redirect('/home');
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
        $location = new Location();

        $location->type = request('type');
        $location->description = request('description');
        
        $location->isDeleted = 0;

        $location->save();

        return redirect('/locations');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function show(Location $location)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->admin)
        {
            $location = Location::findOrFail($id);
            return view('locations.edit', compact('location'));
        } else {
            return redirect('/home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $location = Locaiton::findOrFail($id);

        $location->decription = request('decription');

        $location->save();

        return redirect('/locations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Location  $location
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $location = Location::findOrFail($id);
        $location->isDeleted = 1;
        $location->save();

        return redirect('/locations');
    }
}
