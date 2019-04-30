<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lessons = Lesson::all();

        return view('lessons.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('lessons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lesson = new Lesson();

        $lesson->lessonDate = request('lessonDate');
        $lesson->lessonTime = request('lessonTime');
        $lesson->studentID = request('studentID');
        $lesson->horseID = request('horseID');
        $lesson->locationID = request('locationID');
        $lesson->instructorID = request('instructorID');
        $lesson->notes = request('notes');
        
        $lesson->isCanceled = 0;

        $lesson->save();

        return redirect('/lessons');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function show(Lesson $lesson)
    {
        return view('lessons.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lesson = Lesson::findOrFail($id);

        return view('lessons.edit', compact('lesson'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $lesson = Lesson::findOrFail($id);

        $lesson->isCanceled = (isset($_POST['isCanceled']) ? 1 : 0);
        
        $lesson->lessonDate = request('lessonDate');
        $lesson->lessonTime = request('lessonTime');
        $lesson->studentID = request('studentID');
        $lesson->horseID = request('horseID');
        $lesson->locationID = request('locationID');
        $lesson->instructorID = request('instructorID');
        $lesson->notes = request('notes');

        $lesson->save();

        return redirect('/lessons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lesson $lesson)
    {
        //
    }
}
