@extends('layouts.app')

@section('content')
<div class="container">

    @if (Auth::user()->admin == 1)
        <h1>Individuals</h1>
        <br>
        <div class="row">
            <div class="col"><strong>Display Name</strong></div>
            <div class="col"><strong>Phone Number</strong></div>
            <div class="col"><strong>Emergency Contact</strong></div>
            <div class="col"><strong>Emergency Contact Phone</strong></div>
            <div class="col"></div> 
        </div>

    @foreach($individuals as $individual)
        <div class="row">
            <div class="col">{{ $individual->displayName }}</div>
            <div class="col">{{ $individual->phoneNumber }}</div>
            <div class="col">{{ $individual->emergencyContact }}</div>
            <div class="col">{{ $individual->emergencyPhone }}</div>
            <div class="col"><a href="/individuals/{{ $individual->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
    @endforeach
    @else
    <h1>Profile</h1>
    <br>
    <div class="row"></div>
    @endif
    </div>



</div>

@endsection