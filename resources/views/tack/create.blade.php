@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Tack</h1>

        <form method="POST" action="/tack">
        {{ csrf_field() }}
            
        <br>
        <label class="my-1 mr-2" for="type">Type</label>
        <select class="custom-select my-1 mr-sm-2" id="type" name="type">
            <option selected>Select One...</option>
            <option value="Saddle">Saddle</option>
            <option value="Bridle">Bridle</option>
            <option value="Girth">Girth</option>
        </select>
        <br>
        <br>

        <label>Description</label>
        <input type="text" class="form-control" name="description" placeholder="Description">
        <br>

            <div>
                <button type="submit"class="btn btn-purple btn-main">Add Tack</button>
            </div>
        </form>
    </div>
@endsection