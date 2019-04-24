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
                <div class="col center">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" name="name" placeholder="Horse name">
                </div>
                <div class="col center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Inactive</label>
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
                    <input type="text" class="form-control" name="color" placeholder="Horse color">
                </div>
                <div class="col">
                    <input type="text" class="form-control" name="markings" placeholder="Horse markings">
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
            <div>
                <button type="submit"class="btn btn-menu">Add Horse</button>
            </div>
        </form>
    </div>
@endsection