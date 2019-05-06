@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->admin == 1)
    <div class="row">
        <div class="col"><h1>Horses</h1></div>
        <div class="col"></div>
        <div class="col"><a href="/horses/create" class="btn btn-blue btn-main">Add Horse</a></div>
    </div>
    <div class="row">
        <div class="col"></div>
        <div class="col"></div>
        <div class="col"><a href="/locations" class="btn btn-grey btn-main">Add/Edit Pastures</a></div>
    </div>
    <br>
    <p>Click on name to view horse</p>
    <br>
    <div class="row top">
            <div class="col"><strong>Name</strong></div>
            <div class="col cell"><strong>Gender</strong></div>            
            <div class="col cell"><strong>Color</strong></div>
            <div class="col cell"><strong>Makings</strong></div>
            <div class="col"><strong>Pasture</strong></div>
            <div class="col cell"><strong>Stall</strong></div>
            <div class="col"><strong>Unavailable</strong></div>
            <div class="col"></div>
    </div>
    <br>
    @foreach($horses as $horse)
    @if($horse->isDeleted == 0)
        <div class="row odd">
            <div class="col"><a href="/horses/{{ $horse->id }}" class="link">{{ $horse->name }}</a></div>
            <div class="col cell">{{ $horse->gender }}</div>
            <div class="col cell">{{ $horse->color }}</div>
            <div class="col cell">{{ $horse->markings }}</div>
            <div class="col">{{ $horse->pasture->description }}</div>
            <div class="col cell">{{ $horse->stall }}</div>
            <div class="col center">
                <input class="form-check-input" type="checkbox" value="{{ $horse->isInactive }}" id="{{ $horse->id }}" disabled
                    @if($horse->isInactive) checked="checked" @endif >
            </div>
            <div class="col"><a href="/horses/{{ $horse->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
        @endif
    @endforeach

    @else
        <h1>Horses</h1>
        <br>
        <p>Click on name to view horse</p>
        <br>
        <div class="row top">
            <div class="col"><strong>Name</strong></div>
            <div class="col"><strong>Gender</strong></div>  
            <div class="col"><strong>Color</strong></div>
            <div class="col cell"><strong>Makings</strong></div>
            <div class="col"><strong>Pasture</strong></div>
            <div class="col cell"><strong>Stall</strong></div>
            <div class="col"></div>
        </div>
        @foreach($horses as $horse)
        @if($horse->isDeleted == 0 && $horse->isInactive == 0)
            <div class="row odd">
                <div class="col"><a href="/horses/{{ $horse->id }}" class="link">{{ $horse->name }}</a></div>
                <div class="col">{{ $horse->gender }}</div>
                <div class="col">{{ $horse->color }}</div>
                <div class="col cell">{{ $horse->markings }}</div>
                <div class="col">{{ $horse->pasture->description }}</div>
                <div class="col cell">{{ $horse->stall }}</div>
            </div>
            @endif
        @endforeach
    @endif

</div>

@endsection