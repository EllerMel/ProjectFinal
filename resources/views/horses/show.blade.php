@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{ $horse->name }}</h1>
    <br>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            @if($horse->mainImg)
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            @endif
            @if($horse->secondImg)
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            @endif
            @if($horse->thirdImg)
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            @endif
            @if($horse->fourthImg)
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            @endif
        </ol>
        <div class="carousel-inner">
            @if($horse->mainImg)
            <div class="carousel-item active">
                <img class="d-block w-100" src="/files/{{$horse->mainImg}}" alt="First slide">
            </div>
            @endif
            @if($horse->secondImg)
            <div class="carousel-item">
                <img class="d-block w-100" src="/files/{{$horse->secondImg}}" alt="Second slide">
            </div>
            @endif
            @if($horse->thirdImg)
            <div class="carousel-item">
                <img class="d-block w-100" src="/files/{{$horse->thirdImg}}" alt="Third slide">
            </div>
            @endif
            @if($horse->fourthImg)
            <div class="carousel-item">
                <img class="d-block w-100" src="/files/{{$horse->fourthImg}}" alt="Fourth slide">
            </div>
            @endif
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <br>
    <div class="container">
        @if($horse->isInactive == 1)
        <div class="row">
            <div class="col-xs"><h4><strong>Status:</strong></h4></div>
            <div class="col warning"><h4>Unavailable</h4></div>
        </div>
        @endif
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
            <a href="/horses/{{ $horse->id }}/edit" class="btn btn-blue btn-main">Edit</a>
        </div>
        <div class="col">
            <a href="/horses" class="btn btn-secondary btn-main">Close</a>
        </div>
        <div class="col">
        </div>
    </div>
    @else
    <a href="/horses" class="btn btn-secondary btn-main">Close</a>
    @endif
</div>

@endsection