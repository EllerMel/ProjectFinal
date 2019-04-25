@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $horse->name }}</h1>
    <br>
    <div class="container">
        <br>
        <div class="row">
            <div class="col">
                <img class="horseImg" src="/files/{{$horse->mainImg}}" />
            </div>
            <div class="col">
                <img class="horseImg" src="/files/{{$horse->secondImg}}" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <img class="horseImg" src="/files/{{$horse->thirdImg}}" />
            </div>
            <div class="col">
                <img class="horseImg" src="/files/{{$horse->fourthImg}}" />
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs">Color:</div>
            <div class="col">{{ $horse->color }}</div>
        </div>
        <br>
        <div class="row">
            <div class="col-xs">Markings:</div>
            <div class="col">{{ $horse->markings }}</div>
        </div>
        <br>
    </div>
    <br>
    
    @if (Auth::user()->admin == 1)
    <div class="row">
        <div class="col">
            <a href="/horses/{{ $horse->id }}/edit" class="btn btn-menu">Edit</a>
        </div>
        <div class="col">
            <a href="/horses" class="btn btn-secondary btn-main">Cancel</a>
        </div>
    </div>
    @else
    <a href="/horses" class="btn btn-secondary btn-main">Cancel</a>
    @endif
</div>

@endsection