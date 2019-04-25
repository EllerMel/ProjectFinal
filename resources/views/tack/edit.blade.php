@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Tack</h1>

    <form method="POST" action="/tack/{{ $tack->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <label class="my-1 mr-2" for="type">Type</label>
            <select class="custom-select my-1 mr-sm-2" id="type" name="type">
                <option selected>Select One...</option>
                <option value="Saddle">Saddle</option>
                <option value="Bridle">Bridle</option>
                <option value="Girth">Girth</option>
            </select>
            <br>
            
            <label>Description</label>
            <br>

            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $tack->description }}">
            <br>

        <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-purple btn-main">Update Tack</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/tack" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
    </form>            
            <div class="col">
                <form method="POST" action="/tack/{{ $tack->id }}">
                @method('DELETE')
                @csrf       

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger btn-main">Delete Tack</button>
                        </div>
                    </div>
                 </form>
            </div>
        </div>

    <br>

</div>
@endsection