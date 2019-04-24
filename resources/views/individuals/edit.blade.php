@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="title">Edit Profile</h1>

    <form method="POST" action="/individuals/{{ $individual->id }}">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}

        <br>
        <div class="form-group">
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
                    <input type="text" class="form-control" name="displayName" placeholder="Name" value="{{ $individual->displayName }}">
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
                        <a href="/individuals" class="btn btn-secondary btn-main">Cancel</a>
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