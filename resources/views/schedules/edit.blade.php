@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Lesson</h1>

    <form method="POST" action="/schedules/{{ $schedule->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <div class="row">
                <div class="col"></div>
                <div class="col center">
                    <input class="form-check-input" type="checkbox" name="isCanceled" value="{{ $schedule->isCanceled }}" id="{{ $schedule->id }}"
                        @if($schedule->isCanceled) checked="checked" @endif >

                        <label class="form-check-label">Cancel Lesson</label>
                </div>
            </div>
            <br>
            
            <div class="row">
                <div class="col">
                    <label>Date</label>
                </div>
                <div class="col">
                    <label>Time</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="date" class="form-control" name="lessonDate" placeholder="Date" value="{{ $schedule->lessonDate }}">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="lessonTime" placeholder="Time" value="{{ $schedule->lessonTime }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Student</label>
                </div>
                <div class="col">
                    <label>Horse</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="studentID" placeholder="Student" value="{{ $schedule->studentID }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="horseID" placeholder="Horse" value="{{ $schedule->horseID }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Location</label>
                </div>
                <div class="col">
                    <label>Instructor</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="location" placeholder="Location" value="{{ $schedule->location }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="instructorID" placeholder="Instructor" value="{{ $schedule->instructorID }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Notes</label>
                </div>
                <div class="col">
                    <label></label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="notes" placeholder="Notes">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-purple btn-main">Update Lesson</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="field">
                        <div class="control">
                            <a href="/schedule" class="btn btn-secondary btn-main">Cancel</a>
                        </div>
                    </div>
                </div>
        </form>            
        </div>

</div>
@endsection