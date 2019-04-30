@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->admin == 1)
        <h1>Individuals</h1>
        <br>
        <p>Click on name to view profile</p>
        <br>
        <div class="row top">
            <div class="col"><strong>Name</strong></div>
            <div class="col"><strong>Phone</strong></div>
            <div class="col cell"><strong>Emergency Contact</strong></div>
            <div class="col cell"><strong>Emergency - Phone</strong></div>
            <div class="col"></div> 
        </div>

    @foreach($individuals as $individual)
        <div class="row odd">
            <div class="col"><a href="/individuals/{{ $individual->id }}" class="link">{{ $individual->displayName }}</a></div>
            <div class="col">{{ $individual->phoneNumber }}</div>
            <div class="col cell">{{ $individual->emergencyContact }}</div>
            <div class="col cell">{{ $individual->emergencyPhone }}</div>
            <div class="col"><a href="/individuals/{{ $individual->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
    @endforeach
    @endif
</div>

@endsection