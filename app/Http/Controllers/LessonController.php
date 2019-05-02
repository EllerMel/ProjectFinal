<?php

namespace App\Http\Controllers;

use App\Lesson;
use Auth;
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
        $lessons = Lesson::orderBy('lessonDate')->get();
        
        return view('lessons.index', compact('lessons'));
    }

    public function times()
    {
        $lessons = Lesson::orderBy('lessonDate')
                ->leftJoin('individuals as student', 'lessons.studentID', '=', 'student.id')
                ->leftJoin('individuals as instructor', 'lessons.instructorID', '=', 'instructor.id')
                ->leftJoin('horses', 'lessons.horseID', '=', 'horses.id')
                ->leftJoin('locations', 'lessons.locationID', '=', 'locations.id')
                ->select('lessons.id', 'lessonDate', 'lessonTime', 'student.displayName as rider', 'instructor.displayName as instructor', 
                            'horses.name as horse', 'locations.description as location', 'isCanceled')
                ->get();
        return json_encode($lessons);
    }

    public function days()
    {
        return Lesson::distinct()->get(['lessonDate']);
    }

    public function horses()
    {
        $horses = Lesson::leftJoin('horses', 'lessons.horseID', '=', 'horses.id')
                ->select('horses.name as horse')
                ->distinct()
                ->get();

        return json_encode($horses);
    }

    public function instructors()
    {
        $instructors = Lesson::leftJoin('individuals as instructor', 'lessons.instructorID', '=', 'instructor.id')
                ->select('instructor.displayName as instructor')
                ->distinct()
                ->get();

        return json_encode($instructors);
    }

    public function students()
    {
        $students = Lesson::leftJoin('individuals as student', 'lessons.studentID', '=', 'student.id')
                ->select('student.displayName as rider')
                ->distinct()
                ->get();

        return json_encode($students);
    }

    public function spots()
    {
        $locations = Lesson::leftJoin('locations', 'lessons.locationID', '=', 'locations.id')
        ->select('locations.description as location')
        ->distinct()
        ->get();

        return json_encode($locations);
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
            return view('lessons.create');
        } else {
            return redirect('/lessons');
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
        $user = Auth::user();
        if ($user->admin)
        {
            $lesson = Lesson::findOrFail($id);
            return view('lessons.edit', compact('lesson'));
        } else {
            return redirect('/lessons');
        }
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
