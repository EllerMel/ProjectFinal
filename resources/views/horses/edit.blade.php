@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Horse</h1>

    <form method="POST" action="/horses/{{ $horse->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>Name</label>
                </div>
                <div class="col center">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="Horse name" value="{{ $horse->name }}">
                </div>
                <div class="col center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Inactive</label>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Color</label>
                </div>
                <div class="col">
                    <label>Markings</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="color" placeholder="Horse color" value="{{ $horse->color }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="markings" placeholder="Horse markings" value="{{ $horse->markings }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                <img class="horseImg" src="/files/{{$horse->mainImg}}" />
                <label>Main Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="mainImg" value="{{ $horse->mainImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                <img class="horseImg" src="/files/{{$horse->secondImg}}" />
                <label>Second Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="secondImg" value="{{ $horse->secondImg }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                <img class="horseImg" src="/files/{{$horse->thirdImg}}" />
                <label>Third Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="thirdImg" value="{{ $horse->thirdImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                <img class="horseImg" src="/files/{{$horse->fourthImg}}" />
                <label>Fourth Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="fourthImg" value="{{ $horse->fourthImg }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>

        <br>
        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-purple">Update Horse</button>
            </div>
        </div>
    
    </form>

    <br>

    <form method="POST" action="/horses/{{ $horse->id }}">
        @method('DELETE')
        @csrf       

        <div class="field">
            <div class="control">
                <button type="submit" class="btn btn-secondary">Delete horse</button>
            </div>
        </div>
    </form>
</div>
@endsection