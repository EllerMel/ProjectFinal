<?php

namespace App\Http\Controllers;

use App\Individual;
use Auth;
use Illuminate\Http\Request;

class IndividualController extends Controller
{
     /* The below routes to the login page 
     * in the event of a timeout or non logged in user
     * accessing any of the below pages*/   
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * 
     * Before discovering the over all route above,
     * I wrapped every view section of every controller
     * in the auth check below
     */
    public function index()
    {
        if (Auth::check())
        {
            $individuals = Individual::orderBy('displayName')->get();

            return view('individuals.index', compact('individuals'));
        } else {
            return view('auth/login');
        }
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
    public function show($id)
    {
        $user = Auth::user();
        
        if ($user->admin || $user->individual->id == $id)
        {
            $individual = Individual::findOrFail($id);
            return view('individuals.show', compact('individual'));
        } else{
            return redirect('/home');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Individual  $individual
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        
        if ($user->admin || $user->individual->id == $id)
        {
            $individual = Individual::findOrFail($id);
            return view('individuals.edit', compact('individual'));
        } else{
                return redirect('/home');
            }
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

        $individual->isInstructor = (isset($_POST['isInstructor']) ? 1 : 0);

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
