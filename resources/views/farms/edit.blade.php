@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Farm Info</h1>

    <form method="POST" action="/farm/{{ $farm->id }}" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            <div class="row">
                <div class="col">
                    <label>Name</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="Farm name" value="{{ $farm->name }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Adddress</label>
                </div>
                <div class="col"></div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="address1" placeholder="Address 1" value="{{ $farm->address1 }}">
                    <input type="text" class="form-control" name="address2" placeholder="Address 2" value="{{ $farm->address2 }}">
                    <input type="text" class="form-control" name="city" placeholder="City" value="{{ $farm->city }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="state" placeholder="State" value="{{ $farm->state }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="zip" placeholder="Zip" value="{{ $farm->zip }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Phone</label>
                </div>
                <div class="col">
                    <label>Email</label>
                </div>
                <div class="col">
                    <label>Website</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="phone" placeholder="Phone" value="{{ $farm->phone }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="Email" value="{{ $farm->email }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="website" placeholder="Website" value="{{ $farm->website }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                @if($farm->featureImg)
                <img class="horseImg" src="/files/{{$farm->featureImg}}" />
                <br>
                @endif
                <label>Main Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="featureImg" value="{{ $farm->featureImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                @if($farm->stallImg)
                <img class="horseImg" src="/files/{{$farm->stallImg}}" />
                <br>
                @endif
                <label>Second Image (Stalls)</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="stallImg" value="{{ $farm->stallImg }}">
                        </div>
                    </div>
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                @if($farm->pastureImg)
                <img class="horseImg" src="/files/{{$farm->pastureImg}}" />
                <br>
                @endif
                <label>Third Image (Pastures)</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="pastureImg" value="{{ $farm->pastureImg }}">
                        </div>
                    </div>
                </div>
                <div class="col">
                @if($farm->ringImg)
                <img class="horseImg" src="/files/{{$farm->ringImg}}" />
                <br>
                @endif
                <label>Fourth Image (Rings)</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="ringImg" value="{{ $farm->ringImg }}">
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
                        <button type="submit" class="btn btn-blue btn-main">Update Farm</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                        <a href="/farm" class="btn btn-secondary btn-main">Cancel</a>
                    </div>
                </div>
            </div>
    </form>            
            <!-- <div class="col">
                <form method="POST" action="/farm/{{ $farm->id }}">
                @method('DELETE')
                @csrf       

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger btn-main">Delete Horse</button>
                        </div>
                    </div>
                 </form>
            </div> -->
        </div>
</div>
@endsection