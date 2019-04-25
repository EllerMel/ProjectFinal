@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Farm Information</h1>

        <form method="POST" action="/farm" enctype="multipart/form-data">
        {{ csrf_field() }}
            
        <br>
            <div class="row">
                <div class="col">
                    <label>Name</label>
                </div>
                <div class="col center">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="Farm name">
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
                    <input type="text" class="form-control" name="address1" placeholder="Address 1">
                    <input type="text" class="form-control" name="address2" placeholder="Address 2">
                    <input type="text" class="form-control" name="city" placeholder="City">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="state" placeholder="State">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="zip" placeholder="Zip">
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
                    <input type="text" class="form-control" name="phone" placeholder="Phone">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="website" placeholder="Website">
                </div>
            </div>
            <br>

            <div class="row">
                <div class="col">
                <label>Main Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="featureImg">
                        </div>
                    </div>
                </div>
                <div class="col">
                <label>Stalls Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="stallImg">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                <label>Pastures Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="pastureImg">
                        </div>
                    </div>
                </div>
                <div class="col">
                <label>Rings Image</label>
                    <div class="file-field">
                        <div class="btn btn-secondary btn-sm float-left">
                        <input type="file" name="ringImg">
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div>
                <button type="submit"class="btn btn-purple btn-main">Add Farm Info</button>
            </div>
        </form>
    </div>
@endsection