@extends('layouts.app')

@section('content')
<div class="container">
    @if (Auth::user()->admin == 1)
        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"><a href="/locations/create" class="btn btn-blue btn-main">Add Location</a></div>
        </div>
        <h1>Pastures</h1>
        <br>
        @foreach($locations as $location)
        @if($location->type == 'Pasture' && $location->isDeleted == 0 )
            <div class="row even">
                <div class="col">{{ $location->description }}</div>
                <div class="col"></div>
                <div class="col" style="text-align:right;"><a href="/locations/{{ $location->id }}/edit" class="btn btn-grey btn-sm">Edit/Remove</a></div>
            </div>
        @endif
        @endforeach
        <br>
        <br>
        <h1>Arenas</h1>
        <br>
        @foreach($locations as $location)
        @if($location->type == 'Arena' && $location->isDeleted == 0 )
            <div class="row even">
                <div class="col">{{ $location->description }}</div>
                <div class="col"></div>
                <div class="col" style="text-align:right;"><a href="/locations/{{ $location->id }}/edit" class="btn btn-grey btn-sm">Edit/Remove</a></div>
            </div>
        @endif
        @endforeach

    @endif
</div>

@endsection