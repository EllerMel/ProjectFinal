@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $individual->displayName }}'s Profile</h1>
    <br>
    <div class="container">
        @if($individual->phoneNumber)
        <div class="row">
            <div class="col-xs"><h5><strong>Phone Number:</strong></h5></div>
            <div class="col"><h5>{{ $individual->phoneNumber }}</h5></div>
        </div>
        <br>
        @endif
        @if($individual->emergencyContact)
        <div class="row">
            <div class="col-xs"><h5><strong>Emergency Contact:</strong></h5></div>
            <div class="col"><h5>{{ $individual->emergencyContact }}</h5></div>
        </div>
        <br>
        @endif
        @if($individual->emergencyPhone)
        <div class="row">
            <div class="col-xs"><h5><strong>Emergency Phone:</strong></h5></div>
            <div class="col"><h5>{{ $individual->emergencyPhone }}</h5></div>
        </div>
        @endif
    </div>
    <br>
    
    <a href="/individuals/{{ $individual->id }}/edit" class="btn btn-secondary btn-main">Edit</a>
</div>

@endsection