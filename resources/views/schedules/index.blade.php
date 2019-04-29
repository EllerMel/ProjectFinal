@extends('layouts.app')

@section('content')
<div class="container">

    @if (Auth::user()->admin == 1)
        <div class="row">
            <div class="col"><h1>Schedule</h1></div>
            <div class="col"></div>
            <div class="col"><a href="/schedules/create" class="btn btn-menu">Add Lesson</a></div>
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

    @foreach($schedules as $schedule)
        <div class="row">
            <div class="col">{{ $schedule->lessonDate }}</div>
            <div class="col">{{ $schedule->lessonTime }}</div>
            <div class="col">{{ $schedule->studentID }}</div>
            <div class="col">{{ $schedule->horseID }}</div>
            <div class="col">{{ $schedule->location }}</div>
            <div class="col">{{ $schedule->instructorID }}</div>
            <div class="col center">
                <input class="form-check-input" type="checkbox" value="{{ $schedule->isCanceled }}" id="{{ $schedule->id }}" disabled
                    @if($schedule->isCanceled) checked="checked" @endif >
            </div>
            <div class="col"><a href="/schedules/{{ $schedule->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
    @endforeach
    
    @else
        <h1>Schedule for {{ $individual->displayName }}</h1>
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
        @foreach($schedules as $schedule)
        <div class="row">
            <div class="col">{{ $schedule->lessonDate }}</div>
            <div class="col">{{ $schedule->lessonTime }}</div>
            <div class="col">{{ $schedule->horseID }}</div>
            <div class="col">{{ $schedule->location }}</div>
            <div class="col">{{ $schedule->instructorID }}</div>
            <div class="col">{{ $schedule->isCanceled }}</div>
        </div>
    @endforeach
    @endif
    </div>

</div>

@endsection