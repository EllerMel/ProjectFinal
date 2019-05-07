@extends('layouts.app')

@section('content')
    <div class="container">
        @if (Auth::user()->admin == 1)
        <h1>Add a Lesson</h1>
        @else
        <h1>Request a Lesson</h1>
        @endif

        <form method="POST" action="/lessons">
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
                    @if (Auth::user()->admin == 1)
                    <select class="form-control" type="text" name="studentID"  class="input">
                    <?php $students = \App\Individual::where('isInstructor', '0')->orderBy('displayName', 'asc')->get(); ?>
                    <?php foreach ($students as $student){
                        ?>
                        <option value="<?php echo $student->id; ?>"><?php echo $student->displayName; ?></option>
                        <?php
                    }?>
                    </select>
                    @else
                    <?php $individual = Auth::user()->individual; ?>
                    <select class="form-control" type="text" name="studentID"  class="input">
                        <option value="<?php echo $individual->id; ?>"><?php echo $individual->displayName; ?></option>
                    </select>
                    @endif
                </div>
                <div class="col">
                <select class="form-control" type="text" name="horseID"  class="input">
                    <?php $horses = \App\Horse::where('isInactive', '0')->where('isDeleted', '0')->orderBy('name', 'asc')->get(); ?>
                    <?php foreach ($horses as $horse){
                        ?>
                        <option value="<?php echo $horse->id; ?>"><?php echo $horse->name; ?></option>
                        <?php
                    }?>
                    </select>
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
                    <select class="form-control" type="text" name="locationID"  class="input">
                    <?php $locations = \App\Location::where('type', 'Arena')->where('isDeleted', '0')->orderBy('description', 'asc')->get();; ?>
                    <?php foreach ($locations as $location){
                        ?>
                        <option value="<?php echo $location->id; ?>"><?php echo $location->description; ?></option>
                        <?php
                    }?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" type="text" name="instructorID"  class="input">
                    <?php $instructors = \App\Individual::where('isInstructor', '1')->orderBy('displayName', 'asc')->get();; ?>
                    <?php foreach ($instructors as $instructor){
                        ?>
                        <option value="<?php echo $instructor->id; ?>"><?php echo $instructor->displayName; ?></option>
                        <?php
                    }?>
                    </select>
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
                    @if (Auth::user()->admin == 1)
                    <div class="control">
                        <button type="submit" class="btn btn-blue btn-main">Add Lesson</button>
                    </div>
                    @else
                    <div class="control">
                        <button type="submit" class="btn btn-blue btn-main">Submit Request</button>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/lessons" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection