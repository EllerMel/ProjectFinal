@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a Location</h1>

        <form method="POST" action="/locations">
        {{ csrf_field() }}
            
        <br>
            <div class="row">
                <div class="col">
                    <label>Type</label>
                </div>
                <div class="col">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <select class="form-control" id="type" name="type">
                        <option value="Arena">Arena</option>
                        <option value="Pasture">Pasture</option>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="description">
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-blue btn-main">Add Location</button>
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
    </div>
@endsection