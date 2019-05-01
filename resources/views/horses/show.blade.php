@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $horse->name }}</h1>
    <br>
    <div class="row">
        @if($horse->mainImg)
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->mainImg}}" />
        </div>
        @endif
        @if($horse->secondImg)
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->secondImg}}" />
        </div>
        @endif
    </div>
    <br>
    <div class="row">
        @if($horse->thirdImg)
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->thirdImg}}" />
        </div>
        @endif
        @if($horse->fourthImg)
        <div class="col-lg center">
            <img class="horseImg" src="/files/{{$horse->fourthImg}}" />
        </div>
        @endif
    </div>
    <br>
    <div class="container">
        @if($horse->gender)
        <div class="row">
            <div class="col-xs"><h4><strong>Gender:</strong></h4></div>
            <div class="col"><h4>{{ $horse->gender }}</h4></div>
        </div>
        @endif
        @if($horse->color)
        <div class="row">
            <div class="col-xs"><h4><strong>Color:</strong></h4></div>
            <div class="col"><h4>{{ $horse->color }}</h4></div>
        </div>
        @endif
        @if($horse->markings)
        <div class="row">
            <div class="col-xs"><h4><strong>Markings:</strong></h4></div>
            <div class="col"><h4>{{ $horse->markings }}</h4></div>
        </div>
        @endif
        @if($horse->saddle)
        <div class="row">
            <div class="col-xs"><h4><strong>Saddle:</strong></h4></div>
            <div class="col"><h4>{{ $horse->saddle }}</h4></div>
        </div>
        @endif
        @if($horse->bridle)
        <div class="row">
            <div class="col-xs"><h4><strong>Bridle:</strong></h4></div>
            <div class="col"><h4>{{ $horse->bridle }}</h4></div>
        </div>
        @endif
        @if($horse->girth)
        <div class="row">
            <div class="col-xs"><h4><strong>Girth:</strong></h4></div>
            <div class="col"><h4>{{ $horse->girth }}</h4></div>
        </div>
        @endif
        @if($horse->miscTack)
        <div class="row">
            <div class="col-xs"><h4><strong>Misc Tack:</strong></h4></div>
            <div class="col"><h4>{{ $horse->miscTack }}</h4></div>
        </div>
        @endif
        @if($horse->pasture)
        <div class="row">
            <div class="col-xs"><h4><strong>Pasture:</strong></h4></div>
            <div class="col"><h4>{{ $horse->pasture->description }}</h4></div>
        </div>
        @endif
        @if($horse->stall)
        <div class="row">
            <div class="col-xs"><h4><strong>Stall:</strong></h4></div>
            <div class="col"><h4>{{ $horse->stall }}</h4></div>
        </div>
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