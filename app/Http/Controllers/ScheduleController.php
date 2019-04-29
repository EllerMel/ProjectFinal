<?php

namespace App\Http\Controllers;

use App\Schedule;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedule::all();

        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $schedule = new Schedule();

        $schedule->lessonDate = request('lessonDate');
        $schedule->lessonTime = request('lessonTime');
        $schedule->studentID = request('studentID');
        $schedule->horseID = request('horseID');
        $schedule->location = request('location');
        $schedule->instructorID = request('instructorID');
        $schedule->notes = request('notes');
        
        $schedule->isCanceled = 0;

        $schedule->save();

        return redirect('/schedules');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function show(Schedule $schedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);

        return view('schedules.edit', compact('schedule'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $schedule = Schedule::findOrFail($id);

        $schedule->isCanceled = (isset($_POST['isCanceled']) ? 1 : 0);
        
        $schedule->lessonDate = request('lessonDate');
        $schedule->lessonTime = request('lessonTime');
        $schedule->studentID = request('studentID');
        $schedule->horseID = request('horseID');
        $schedule->location = request('location');
        $schedule->instructorID = request('instructorID');
        $schedule->notes = request('notes');

        $schedule->save();

        return redirect('/schedules');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Schedule  $schedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedule $schedule)
    {
        //
    }
}
