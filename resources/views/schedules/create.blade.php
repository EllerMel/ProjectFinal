@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a Lesson</h1>

        <form method="POST" action="/schedules">
        {{ csrf_field() }}
            
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
                    <input type="date" class="form-control" name="lessonDate">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="lessonTime">
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
                    <input type="text" class="form-control" name="studentID" placeholder="Student">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="horseID" placeholder="Horse">
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
                    <input type="text" class="form-control" name="location" placeholder="Location">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="instructorID" placeholder="Instructor">
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
                        <button type="submit" class="btn btn-purple btn-main">Add Lesson</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/schedules" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection