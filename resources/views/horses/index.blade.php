@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col"><h1>Horses</h1></div>
    <div class="col"></div>
    @if (Auth::user()->admin == 1)
    <div class="col"><a href="/horses/create" class="btn btn-menu">Add Horse</a></div>
    @else
    <div class="col"></div>
    @endif
    </div>

    <p>Click on name to view horse</p>
    <br>

    @if (Auth::user()->admin == 1)
    <div class="row">
            <div class="col"><strong>Name</strong></div>
            <div class="col"><strong>Gender</strong></div>            
            <div class="col"><strong>Color</strong></div>
            <div class="col"><strong>Markings</strong></div>
            <div class="col center"><strong>Inactive</strong></div>
            <div class="col"><strong></strong></div>        
        </div>
        <br>
    @foreach($horses as $horse)
    @if($horse->isDeleted == 0)
        <div class="row">
            <div class="col"><a href="/horses/{{ $horse->id }}" class="link">{{ $horse->name }}</a></div>
            <div class="col">{{ $horse->gender }}</div>
            <div class="col">{{ $horse->color }}</div>
            <div class="col">{{ $horse->markings }}</div>
            <div class="col center">
                <input class="form-check-input" type="checkbox" value="{{ $horse->isInactive }}" id="{{ $horse->id }}" disabled
                    @if($horse->isInactive) checked="checked" @endif >
            </div>
            <div class="col"><a href="/horses/{{ $horse->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
        </div>
        @endif
    @endforeach

    @else
    <div class="row">
            <div class="col"><strong>Name</strong></div>
            <div class="col"><strong>Gender</strong></div>  
            <div class="col"><strong>Color</strong></div>
            <div class="col"><strong>Markings</strong></div>
        </div>
    @foreach($horses as $horse)
    @if($horse->isDeleted == 0 && $horse->isInactive == 0)
        <div class="row">
            <div class="col"><a href="/horses/{{ $horse->id }}" class="link">{{ $horse->name }}</a></div>
            <div class="col">{{ $horse->gender }}</div>
            <div class="col">{{ $horse->color }}</div>
            <div class="col">{{ $horse->markings }}</div>
        </div>
        @endif
    @endforeach
    @endif

</div>

@endsection