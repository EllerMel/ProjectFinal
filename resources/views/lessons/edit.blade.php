@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Lesson</h1>

    <form method="POST" action="/lessons/{{ $lesson->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <div class="row">
                <div class="col"></div>
                <div class="col" style="text-align:left;">
                    <input class="form-check-input" type="checkbox" name="isPending" value="{{ $lesson->isPending }}" id="{{ $lesson->id }}"
                        @if($lesson->isPending) checked="checked" @endif >

                        <label class="form-check-label">Lesson Pending</label>
                </div>
            </div>
            <div class="row">
                <div class="col"></div>
                <div class="col" style="text-align:left;">
                    <input class="form-check-input" type="checkbox" name="isCanceled" value="{{ $lesson->isCanceled }}" id="{{ $lesson->id }}"
                        @if($lesson->isCanceled) checked="checked" @endif >

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
                    <input type="date" class="form-control" name="lessonDate" placeholder="Date" value="{{ $lesson->lessonDate }}">
                </div>
                <div class="col">
                    <input type="time" class="form-control" name="lessonTime" placeholder="Time" value="{{ $lesson->lessonTime }}">
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
                    <select class="form-control" type="text" name="studentID" class="input">
                        <?php $students = \App\Individual::where('isInstructor', '0')->get(); ?>
                        <?php foreach ($students as $student){
                            if($lesson->studentID == $student->id){
                                ?><option selected value=" {{ $student->id }}">{{ $student->displayName }}</option>
                                <?php
                            } else {
                            ?>
                            <option value="<?php echo $student->id; ?>"><?php echo $student->displayName; ?></option>
                            <?php
                            }
                        }?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" type="text" name="horseID" class="input">
                        <?php $horses = \App\Horse::where('isInactive', '0')->where('isDeleted', '0')->get(); ?>
                        <?php foreach ($horses as $horse){
                            if($lesson->horseID == $horse->id){
                                ?><option selected value=" {{ $horse->id }}">{{ $horse->name }}</option>
                                <?php
                            } else {
                            ?>
                            <option value="<?php echo $horse->id; ?>"><?php echo $horse->name; ?></option>
                            <?php
                            }
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
                        <?php $locations = \App\Location::where('type', 'Arena')->where('isDeleted', '0')->get();; ?>
                        <?php foreach ($locations as $location){
                            if($lesson->locationID == $location->id){
                                ?><option selected value=" {{ $location->id }}">{{ $location->description }}</option>
                                <?php
                            } else {
                            ?>
                            <option value="<?php echo $location->id; ?>"><?php echo $location->description; ?></option>
                            <?php
                            }
                        }?>
                    </select>
                </div>
                <div class="col">
                    <select class="form-control" type="text" name="instructorID" class="input">
                        <?php $instructors = \App\Individual::where('isInstructor', '1')->get(); ?>
                        <?php foreach ($instructors as $instructor){
                            if($lesson->instructorID == $instructor->id){
                                ?><option selected value=" {{ $instructor->id }}">{{ $instructor->displayName }}</option>
                                <?php
                            } else {
                            ?>
                            <option value="<?php echo $instructor->id; ?>"><?php echo $instructor->displayName; ?></option>
                            <?php
                            }
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
                    <input type="text" class="form-control" name="notes" placeholder="Notes" value="{{ $lesson->notes }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-blue btn-main">Update</button>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="field">
                        <div class="control">
                            <a href="/lessons" class="btn btn-secondary btn-main">Cancel</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                </div>
            </div>
    </form>  
</div>
@endsection