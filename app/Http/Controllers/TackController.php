<?php

namespace App\Http\Controllers;

use App\Tack;
use Auth;
use Illuminate\Http\Request;

class TackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tacks = Tack::all();

        return view('tack.index', compact('tacks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tack.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tack = new Tack();

        $tack->type = request('type');
        $tack->description = request('description');

        $tack->save();

        return redirect('/tack');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tack  $tack
     * @return \Illuminate\Http\Response
     */
    public function show(Tack $tack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tack  $tack
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tack = Tack::findOrFail($id);

        return view('tack.edit', compact('tack'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tack  $tack
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $tack = Tack::findOrFail($id);

        $tack->type = request('type');
        $tack->description= request('description');

        $tack->save();

        return redirect('/tack');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tack  $tack
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tack::findOrFail($id)->isDeleted == 1;

        return redirect('/tack');
    }
}
