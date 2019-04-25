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
    </div>

    @if (Auth::user()->admin == 1)
    <a href="/farm/{{ $farm->id }}/edit" class="btn btn-grey btn-main">Edit</a></div>
    @else
    @endif


    @endforeach
</div>

@endsection