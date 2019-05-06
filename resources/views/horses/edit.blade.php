@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Horse <strong>- {{ $horse->name }}</strong></h1>

    <form method="POST" action="/horses/{{ $horse->id }}" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <div class="row">
                <div class="col"></div>
                <div class="col center">
                    <input class="form-check-input" type="checkbox" name="isInactive" value="{{ $horse->isInactive }}" id="{{ $horse->id }}"
                        @if($horse->isInactive) checked="checked" @endif >

                        <label class="form-check-label">Temporarily unavailable</label>
                </div>
            </div>
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
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $horse->name }}" required autocomplete="name" autofocus placeholder="Horse name">
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input id="gender" type="text" class="form-control @error('gender') is-invalid @enderror" name="gender" value="{{ $horse->gender }}" required autocomplete="gender" autofocus placeholder="Gender">
                    @error('gender')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
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
                    <input id="color" type="text" class="form-control @error('color') is-invalid @enderror" name="color" value="{{ $horse->color }}" required autocomplete="color" autofocus placeholder="Color">
                    @error('color')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="markings" placeholder="Horse markings" value="{{ $horse->markings }}">
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
                    <input type="text" class="form-control" name="saddle" placeholder="Saddle" value="{{ $horse->saddle }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="bridle" placeholder="Bridle" value="{{ $horse->bridle }}">
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
                    <input type="text" class="form-control" name="girth" placeholder="Girth" value="{{ $horse->girth }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="miscTack" placeholder="Miscellaneous: Riser Pad, crop, etc." value="{{ $horse->miscTack }}">
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
                <select class="form-control" type="text" name="pastureID"  class="input">
                        <?php $locations = \App\Location::where('type', 'Pasture')->where('isDeleted', '0')->get();; ?>
                        <?php foreach ($locations as $location){
                            if($horse->pastureID == $location->id){
                                ?><option selected value=" {{ $location->id }}">{{ $location->description }}</option>
                                <?php
                            } else {
                            ?>
                            <option value="<?php echo $location->id; ?>"><?php echo $location->description; ?></option>
                            <?php
                            }
                        }?>
                    </select>
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="stall" placeholder="Stall" value="{{ $horse->stall }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                @if($horse->mainImg)
                <img class="horseImg" src="/files/{{$horse->mainImg}}" />
                @endif
                <label>Main Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="mainImg" value="{{ $horse->mainImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                @if($horse->secondImg) 
                <img class="horseImg" src="/files/{{$horse->secondImg}}" />
                @endif              
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
                @if($horse->thirdImg)
                <img class="horseImg" src="/files/{{$horse->thirdImg}}" />
                @endif
                <label>Third Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="thirdImg" value="{{ $horse->thirdImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                @if($horse->fourthImg)
                <img class="horseImg" src="/files/{{$horse->fourthImg}}" />
                @endif
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
        <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-blue btn-main">Update Horse</button>
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
            <div class="col">
                <form method="POST" action="/horses/{{ $horse->id }}">
                @method('DELETE')
                @csrf       

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger btn-main">Delete Horse</button>
                        </div>
                    </div>
                 </form>
            </div>
        </div>

    


    <br>


</div>
@endsection