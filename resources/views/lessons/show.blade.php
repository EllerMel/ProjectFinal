@extends('layouts.app')

@section('content')
<div class="container">

    <h1>Lesson</h1>
    <br>
    <p>Click on horse name to view details</p>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs"><h4><strong>Date:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->lessonDate }}</h4></div>
        </div>
        <div class="row">
            <div class="col-xs"><h4><strong>Time:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->lessonTime }}</h4></div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs"><h4><strong>Student:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->student->displayName }}</h4></div>
        </div>
        <div class="row">
            <div class="col-xs"><h4><strong>Horse:</strong></h4></div>
            <div class="col"><a href="/horses/{{ $lesson->horseID }}" class="link"><h4>{{ $lesson->horse->name }}</h4></a></div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs"><h4><strong>Location:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->location }}</h4></div>
        </div>
        <div class="row">
            <div class="col-xs"><h4><strong>Instructor:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->instructor->displayName }}</h4></div>
        </div>
        <br>
        @if($lesson->notes)
        <div class="row">
            <div class="col-xs"><h4><strong>Notes:</strong></h4></div>
            <div class="col"><h4>{{ $lesson->notes }}</h4></div>
        </div>
        @endif
        @if($lesson->isCanceled == 1)
        <div class="row">
            <div class="col-xs"><h4><strong>Status:</strong></h4></div>
            <div class="col"><h4>CANCELLED</h4></div>
        </div>
        @endif
    </div>
    <br>
    
    @if (Auth::user()->admin == 1)
    <div class="row">
        <div class="col">
            <a href="/lessons/{{ $lesson->id }}/edit" class="btn btn-purple btn-main">Edit</a>
        </div>
        <div class="col">
            <a href="/lessons" class="btn btn-secondary btn-main">Close</a>
        </div>
    </div>
    @else
    <a href="/lessons" class="btn btn-secondary btn-main">Close</a>
    @endif
</div>

@endsection