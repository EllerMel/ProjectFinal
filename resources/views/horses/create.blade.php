@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add a New Horse</h1>

        <form method="POST" action="/horses" enctype="multipart/form-data">
        {{ csrf_field() }}
            
        <br>
            <div class="row">
                <div class="col">
                    <label>Name</label>
                </div>
                <div class="col">
                    <label>Gender</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Horse name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ old('gender') }}" required autocomplete="gender" autofocus placeholder="Gender">
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
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
                    <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ old('color') }}" required autocomplete="color" autofocus placeholder="Color">
                    @error('color')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="markings" placeholder="Horse markings">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Saddle</label>
                </div>
                <div class="col">
                    <label>Bridle</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="saddle" placeholder="Saddle">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="bridle" placeholder="Bridle">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Girth</label>
                </div>
                <div class="col">
                    <label>Misc Tack</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="girth" placeholder="Girth">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="miscTack" placeholder="Miscellaneous: Riser Pad, crop, etc.">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Pasture</label>
                </div>
                <div class="col">
                    <label>Stall</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="pasture" placeholder="Pasture">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="stall" placeholder="Stall">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                <label>Main Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="mainImg">
                        </div>
                    </div>
                </div>
                <div class="col">
                <label>Second Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="secondImg">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <label>Third Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="thirdImg">
                        </div>
                    </div>
                </div>
                <div class="col">
                <label>Fourth Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="fourthImg">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-purple btn-main">Add Horse</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/horses" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection