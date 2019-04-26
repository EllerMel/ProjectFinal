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

    <br>

        <div class="row">
            <div class="col"><strong>Name</strong></div>
            <div class="col"><strong>Color</strong></div>
            <div class="col"><strong>Markings</strong></div>
            <div class="col"><strong></strong></div>        
        </div>

    @foreach($horses as $horse)
    @if($horse->isDeleted == 0)
        <div class="row">
            <div class="col"><a href="/horses/{{ $horse->id }}" class="link">{{ $horse->name }}</a></div>
            <div class="col">{{ $horse->color }}</div>
            <div class="col">{{ $horse->markings }}</div>
            @if (Auth::user()->admin == 1)
            <div class="col"><a href="/horses/{{ $horse->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
            @else
            <div class="col"></div>
            @endif
        </div>
        @endif
    @endforeach
</div>

@endsection