@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col"><h1>Farm</h1></div>
    <div class="col"></div>
    @if (Auth::user()->admin == 1 && $farms->count() == 0)
    <div class="col"><a href="/farm/create" class="btn btn-menu">Add Farm Info</a></div>
    @else
    <div class="col"></div>
    @endif
    </div>

    <br>

    @foreach($farms as $farm)
    <div>
        <h2>{{ $farm->name }}</h2>
        <br>

        @if($farm->featureImg)
            <img class="farmImg center" src="/files/{{$farm->featureImg}}" />
        @endif
        <br>
        <br>

        <h4>
        {{ $farm->address1 }}
        {{ $farm->address2 }}
        <br>
        {{ $farm->city }}, 
        {{ $farm->state }}
        {{ $farm->zip }}</h4>
        <br>

        <h4>{{ $farm->phone }}</h4>
        <br>

        <h4>{{ $farm->website }}</h4>
        <br>

        <h4>{{ $farm->email }}</h4>
        <br>

        @if($farm->stallImg)
            <div class="stallDetails" style="display:none"><img class="horseImg" src="/files/{{$farm->stallImg}}" /></div>
            <button class="btn btn-blue btn-main"  id="moreStall" href="#" onclick="$('.stallDetails').slideToggle(function(){$('#moreStall').html($('.stallDetails').is(':visible')?'Hide Stall Layout':'Show Stall Layout');});">Show Stall Layout</button>
        @endif
        <br>

        @if($farm->pastureImg)
            <div class="pastureDetails" style="display:none"><img class="horseImg" src="/files/{{$farm->pastureImg}}" /></div>
            <button class="btn btn-blue btn-main" id="morePasture" href="#" onclick="$('.pastureDetails').slideToggle(function(){$('#morePasture').html($('.pastureDetails').is(':visible')?'Hide Pasture Layout':'Show Pasture Layout');});">Show Pasture Layout</button>
        @endif
        <br>

        @if($farm->ringImg)
            <div class="ringDetails" style="display:none"><img class="horseImg" src="/files/{{$farm->ringImg}}" /></div>
            <button class="btn btn-blue btn-main"  id="moreRing" href="#" onclick="$('.ringDetails').slideToggle(function(){$('#moreRing').html($('.ringDetails').is(':visible')?'Hide Ring Layout':'Show Ring Layout');});">Show Ring Layout</button>
        @endif
        <br>
    </div>

    @if (Auth::user()->admin == 1)
    <a href="/farm/{{ $farm->id }}/edit" class="btn btn-grey btn-main">Edit</a></div>
    @else
    @endif


    @endforeach
</div>

@endsection