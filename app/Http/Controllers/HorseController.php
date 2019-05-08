<?php

namespace App\Http\Controllers;

use App\Horse;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class HorseController extends Controller
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
        $horses = Horse::all()->sortBy("name");

        return view('horses.index', compact('horses'));
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
            return view('horses.create');

        } else {
            return redirect('/horses');
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
        $horse = new Horse();

        $horse->name = request('name');
        $horse->color = request('color');
        $horse->markings = request('markings');
        $horse->gender = request('gender');
        $horse->saddle = request('saddle');
        $horse->bridle = request('bridle');
        $horse->girth = request('girth');
        $horse->miscTack = request('miscTack');
        $horse->pastureID = request('pastureID');
        $horse->stall = request('stall');
        
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
        return view('horses.show', compact('horse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        if ($user->admin)
        {
            $horse = Horse::findOrFail($id);
            return view('horses.edit', compact('horse'));

        } else {
            return redirect('/horses');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Horse  $horse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $horse = Horse::findOrFail($id);

        $horse->name = request('name');

        $horse->isInactive = (isset($_POST['isInactive']) ? 1 : 0);
        
        $horse->color = request('color');
        $horse->markings = request('markings');
        $horse->gender = request('gender');
        $horse->saddle = request('saddle');
        $horse->bridle = request('bridle');
        $horse->girth = request('girth');
        $horse->miscTack = request('miscTack');
        $horse->pastureID = request('pastureID');
        $horse->stall = request('stall');

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
        $horse = Horse::findOrFail($id);
        $horse->isDeleted = 1;
        $horse->save();

        return redirect('/horses');
    }
}