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
        if (Auth::check())
        {
            $lessons = Lesson::orderBy('lessonDate')->get();
            
            return view('lessons.index', compact('lessons'));
        } else {
            return view('auth/login');
        }
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
                ->where('lessonDate', ">=", date("Y-m-d"))
                ->where('isCanceled', "=", 0)
                ->where('isPending', "=", 0)
                ->orderBy('lessonDate', 'desc')
                ->orderBy('lessonTime', 'asc')
                ->get();
        return json_encode($lessons);
    }

    public function pendingTimes()
    {
        $lessons = Lesson::orderBy('lessonDate')
                ->leftJoin('individuals as student', 'lessons.studentID', '=', 'student.id')
                ->leftJoin('individuals as instructor', 'lessons.instructorID', '=', 'instructor.id')
                ->leftJoin('horses', 'lessons.horseID', '=', 'horses.id')
                ->leftJoin('locations', 'lessons.locationID', '=', 'locations.id')
                ->select('lessons.id', 'lessonDate', 'lessonTime', 'student.displayName as rider', 'instructor.displayName as instructor', 
                            'horses.name as horse', 'locations.description as location', 'isCanceled')
                ->where('isPending', "=", 1)
                ->orderBy('lessonDate', 'desc')
                ->orderBy('lessonTime', 'asc')
                ->get();
        return json_encode($lessons);
    }

    public function pastTimes()
    {
        $lessons = Lesson::orderBy('lessonDate')
                ->leftJoin('individuals as student', 'lessons.studentID', '=', 'student.id')
                ->leftJoin('individuals as instructor', 'lessons.instructorID', '=', 'instructor.id')
                ->leftJoin('horses', 'lessons.horseID', '=', 'horses.id')
                ->leftJoin('locations', 'lessons.locationID', '=', 'locations.id')
                ->select('lessons.id', 'lessonDate', 'lessonTime', 'student.displayName as rider', 'instructor.displayName as instructor', 
                            'horses.name as horse', 'locations.description as location', 'isCanceled')
                ->where('lessonDate', "<", date("Y-m-d"))
                ->where('isCanceled', "=", 0)
                ->where('isPending', "=", 0)
                ->orderBy('lessonDate', 'desc')
                ->orderBy('lessonTime', 'asc')
                ->get();
        return json_encode($lessons);
    }

    public function cancelledTimes()
    {
        $lessons = Lesson::orderBy('lessonDate')
                ->leftJoin('individuals as student', 'lessons.studentID', '=', 'student.id')
                ->leftJoin('individuals as instructor', 'lessons.instructorID', '=', 'instructor.id')
                ->leftJoin('horses', 'lessons.horseID', '=', 'horses.id')
                ->leftJoin('locations', 'lessons.locationID', '=', 'locations.id')
                ->select('lessons.id', 'lessonDate', 'lessonTime', 'student.displayName as rider', 'instructor.displayName as instructor', 
                            'horses.name as horse', 'locations.description as location', 'isCanceled')
                ->where('isCanceled', "=", 1)
                ->where('isPending', "=", 0)
                ->orderBy('lessonDate', 'desc')
                ->orderBy('lessonTime', 'asc')
                ->get();
        return json_encode($lessons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check())
        {
            return view('lessons.create');
        } else {
            return view('auth/login');
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

        $user = Auth::user();
        if ($user->admin)
        {        
            $lesson->isPending = 0;
        } else {
            $lesson->isPending = 1;
        }

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
        if (Auth::check())
        {
            return view('lessons.show', compact('lesson'));
        } else {
            return view('auth/login');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lesson  $lesson
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (Auth::check())
        {
            $user = Auth::user();
            if ($user->admin)
            {
                $lesson = Lesson::findOrFail($id);
                return view('lessons.edit', compact('lesson'));
            } else {
                return redirect('/lessons');
            }
        } else {
            return view('auth/login');
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
        $lesson->isPending = (isset($_POST['isPending']) ? 1 : 0);
        
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
