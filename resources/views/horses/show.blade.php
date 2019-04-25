@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $horse->name }}</h1>
    <br>
    <div class="row">
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->mainImg}}" />
        </div>
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->secondImg}}" />
        </div>
    </div>
    <br>
    <div class="row">
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->thirdImg}}" />
        </div>
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->fourthImg}}" />
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs"><h4><strong>Color:</strong></h4></div>
            <div class="col"><h4>{{ $horse->color }}</h4></div>
        </div>
        @if($horse->markings)
        <div class="row">
            <div class="col-xs"><h4><strong>Markings:</strong></h4></div>
            <div class="col"><h4>{{ $horse->markings }}</h4></div>
        </div>
        @else
        @endif
    </div>
    <br>
    
    @if (Auth::user()->admin == 1)
    <div class="row">
        <div class="col">
            <a href="/horses/{{ $horse->id }}/edit" class="btn btn-purple btn-main">Edit</a>
        </div>
        <div class="col">
            <a href="/horses" class="btn btn-secondary btn-main">Close</a>
        </div>
    </div>
    @else
    <a href="/horses" class="btn btn-secondary btn-main">Close</a>
    @endif
</div>

@endsection