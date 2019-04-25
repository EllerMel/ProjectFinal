@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $individual->displayName }}'s Profile</h1>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs">Display Name:</div>
            <div class="col">{{ $individual->displayName }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs">Phone Number</div>
            <div class="col">{{ $individual->phoneNumber }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs">Emergency Contact</div>
            <div class="col">{{ $individual->emergencyContact }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs">Emergency Phone</div>
            <div class="col">{{ $individual->emergencyPhone }}</div>
        </div>
    </div>
    <br>
    
    <a href="/individuals/{{ $individual->id }}/edit" class="btn btn-grey btn-sm">Edit</a>
</div>

@endsection