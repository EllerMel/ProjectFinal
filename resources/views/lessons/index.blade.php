@extends('layouts.app')

@section('content')
<div class="container">
<div class="center" ><curr-date></curr-date></div>
<br>
    @if (Auth::user()->admin == 1)

        <lesson-times></lesson-times>
    
    @else
        <div class="row">
            <div class="col"><h1>{{ Auth::user()->individual-> displayName }}'s Lessons</h1></div>
            <div class="col"></div>
            <div class="col"><a href="/lessons/create" class="btn btn-blue btn-main">Request a Lesson</a></div>
        </div>
        <br>
        <p>Click on date to view lesson</p>
        <br>
        <div class="row top">
            <div class="col"><strong>Date</strong></div>
            <div class="col"><strong>Time</strong></div>
            <div class="col"><strong>Horse</strong></div>
            <div class="col"><strong>Location</strong></div>
            <div class="col"><strong>Instructor</strong></div>
            <div class="col"></div> 
        </div>
        @foreach($lessons as $lesson)
        @if(Auth::user()->individual->id == $lesson->studentID)
        <div class="row odd">
            <div class="col"><a href="/lessons/{{ $lesson->id }}" class="link">{{ $lesson->lessonDate }}</a></div>
            <div class="col">{{ $lesson->lessonTime }}</div>
            <div class="col">{{ $lesson->horse->name }}</div>
            <div class="col">{{ $lesson->location->description }}</div>
            <div class="col">{{ $lesson->instructor->displayName }}</div>
            @if(($lesson->isCanceled == 1) && ($lesson->isPending == 0))
            <div class="col">CANCELLED</div>
            @elseif(($lesson->isCanceled == 0) && ($lesson->isPending == 1))
            <div class="col">PENDING</div>
            @elseif(($lesson->isCanceled == 1) && ($lesson->isPending == 1))
            <div class="col">CANCELLED/PENDING</div>
            @else
            <div class="col"></div>
            @endif
        </div>
        @endif
    @endforeach
    @endif
    </div>

</div>

@endsection