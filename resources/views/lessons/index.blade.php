@extends('layouts.app')

@section('content')
<div class="container">
<div class="center" ><curr-date></curr-date></div>
<br>

    @if (Auth::user()->admin == 1)
        <div class="row">
            <div class="col"><h1>Lessons</h1></div>
            <div class="col"></div>
            <div class="col"><a href="/lessons/create" class="btn btn-menu">Add Lesson</a></div>
        </div>
        <br>
        <div class="row">
            <div class="col"><strong>Date</strong></div>
            <div class="col"><strong>Time</strong></div>
            <div class="col"><strong>Student</strong></div>
            <div class="col"><strong>Horse</strong></div>
            <div class="col"><strong>Location</strong></div>
            <div class="col"><strong>Instructor</strong></div>
            <div class="col"><strong>Canceled</strong></div>
            <div class="col"></div> 
        </div>

    @foreach($lessons as $lesson)
        <div class="row">
            <div class="col">{{ $lesson->lessonDate }}</div>
            <div class="col">{{ $lesson->lessonTime }}</div>
            <div class="col">{{ $lesson->student->displayName }}</div>
            <div class="col">{{ $lesson->horse->name }}</div>
            <div class="col">{{ $lesson->location }}</div>
            <div class="col">{{ $lesson->instructor->displayName }}</div>
            <div class="col center">
                <input class="form-check-input" type="checkbox" value="{{ $lesson->isCanceled }}" id="{{ $lesson->id }}" disabled
                    @if($lesson->isCanceled) checked="checked" @endif >
            </div>
            <div class="col"><a href="/lessons/{{ $lesson->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
    @endforeach
    
    @else
        <h1>Lessons</h1>
        <br>
        <div class="row">
            <div class="col"><strong>Date</strong></div>
            <div class="col"><strong>Time</strong></div>
            <div class="col"><strong>Horse</strong></div>
            <div class="col"><strong>Location</strong></div>
            <div class="col"><strong>Instructor</strong></div>
            <div class="col"><strong>Status</strong></div>
            <div class="col"></div> 
        </div>
        @foreach($lessons as $lesson)
        <div class="row">
            <div class="col">{{ $lesson->lessonDate }}</div>
            <div class="col">{{ $lesson->lessonTime }}</div>
            <div class="col">{{ $lesson->horseID }}</div>
            <div class="col">{{ $lesson->location }}</div>
            <div class="col">{{ $lesson->instructorID }}</div>
            <div class="col">{{ $lesson->isCanceled }}</div>
        </div>
    @endforeach
    @endif
    </div>

</div>

@endsection