@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
    <div class="col"><h1>Tack</h1></div>
    <div class="col"></div>
    @if (Auth::user()->admin == 1)
    <div class="col"><a href="/tack/create" class="btn btn-menu">Add Tack</a></div>
    @else
    <div class="col"></div>
    @endif
    </div>

    <br>
    <br>
    <br>

    <h4>Saddles</h4>
    @foreach($tacks as $tack)
    @if($tack->type == 'Saddle')
        <div class="row">
            <div class="col">{{ $tack->description }}</div>
            @if (Auth::user()->admin == 1)
            <div class="col"><a href="/tack/{{ $tack->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
            @else
            <div class="col"></div>
            @endif
        </div>
    @endif
    @endforeach

    <br>
    <br>
    <br>

    <h4>Bridles</h4>  
    @foreach($tacks as $tack)
    @if($tack->type == 'Bridle')
        <div class="row">
            <div class="col">{{ $tack->description }}</div>
            @if (Auth::user()->admin == 1)
            <div class="col"><a href="/tack/{{ $tack->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
            @else
            <div class="col"></div>
            @endif
        </div>
    @endif
    @endforeach

    <br>
    <br>
    <br>

    <h4>Girths</h4>
    @foreach($tacks as $tack)
    @if($tack->type == 'Girth')
        <div class="row">
            <div class="col">{{ $tack->description }}</div>
            @if (Auth::user()->admin == 1)
            <div class="col"><a href="/tack/{{ $tack->id }}/edit" class="btn btn-grey btn-sm">Edit</a></div>
            @else
            <div class="col"></div>
            @endif
        </div>
    @endif
    @endforeach

</div>

@endsection