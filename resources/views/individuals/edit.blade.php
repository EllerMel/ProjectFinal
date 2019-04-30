@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Profile</h1>

    <form method="POST" action="/individuals/{{ $individual->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
            @if (Auth::user()->admin == 1)
            <div class="row">
                <div class="col"></div>
                <div class="col center">
                    <input class="form-check-input" type="checkbox" name="isInstructor" value="{{ $individual->isInstructor }}" id="{{ $individual->id }}"
                        @if($individual->isInstructor) checked="checked" @endif >

                        <label class="form-check-label">Is an Instructor</label>
                </div>
            </div>
            @endif
            <br>
            <div class="row">
                <div class="col">
                    <label>Display Name</label>
                </div>
                <div class="col">
                    <label>Phone Number</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input id="displayName" type="text" class="form-control @error('displayName') is-invalid @enderror" name="displayName" value="{{ $individual->displayName }}" required autocomplete="name" autofocus placeholder="Name">
                    @error('displayName')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="phoneNumber" placeholder="Phone Number" value="{{ $individual->phoneNumber }}">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                    <label>Emergency Contact</label>
                </div>
                <div class="col">
                    <label>Emergency Phone</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="emergencyContact" placeholder="Emergency Contact" value="{{ $individual->emergencyContact }}">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="emergencyPhone" placeholder="Emergency Phone" value="{{ $individual->emergencyPhone }}">
                </div>
            </div>
            <br>
        <br>
        <div class="row">
            <div class="col">
                <div class="field">
                    <div class="control">
                        <button type="submit" class="btn btn-purple btn-main">Update Profile</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="field">
                    <div class="control">
                    @if (Auth::user()->admin == 1)
                        <a href="/individuals" class="btn btn-secondary btn-main">Cancel</a>
                    @else
                        <a href="/individuals/{{ $individual->id }}" class="btn btn-secondary btn-main">Cancel</a>
                    @endif
                    </div>
                </div>
            </div>
    </form>            
            <!-- <div class="col">
                <form method="POST" action="/individuals/{{ $individual->id }}">
                @method('DELETE')
                @csrf       

                    <div class="field">
                        <div class="control">
                            <button type="submit" class="btn btn-danger btn-main">Delete Profile</button>
                        </div>
                    </div>
                 </form>
            </div> -->
        </div>

    <br>

</div>
@endsection