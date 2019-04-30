@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit <strong>{{ $location->type }}</strong> Location</h1>

    <form method="POST" action="/locations/{{ $location->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <br>
            <div class="row">
                <div class="col">
                <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ $location->description }}" required autocomplete="description" autofocus placeholder="Description">
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-purple btn-main">Update Location</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/locations" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
    </form>            
            <div class="col">
                <form method="POST" action="/locations/{{ $location->id }}">
                @method('DELETE')
                @csrf       

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger btn-main">Delete Location</button>
                        </div>
                    </div>
                 </form>
            </div>

    <br>
</div>
@endsection