@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Please select one of the options below.
                    
                    <br>
                    @if (Auth::user()->admin == 1)
                    <div class="container center">
                        <div class="row">
                            <div class="col">
                                <a href="/individuals" class="btn btn-menu">Individuals</a>
                            </div>
                            <div class="col">
                                <a href="/lessons" class="btn btn-menu">Lessons</a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <a href="/horses" class="btn btn-menu">Horses</a>
                            </div>
                            <div class="col">
                                <a href="/farm" class="btn btn-menu">Farm Info</a>
                            </div>
                        </div>
                    </div>
                    @else
                    <div class="container center">
                        <div class="row">
                            <div class="col">
                                <a href="/horses" class="btn btn-menu">Horses</a>
                            </div>
                            <div class="col">
                                <a href="/lessons" class="btn btn-menu">Lessons</a>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col">
                            <?php
                                $individual = Auth::user()->individual;
                            ?>
                                <a href="/individuals/{{ $individual->id }} " class="btn btn-menu">View Profile</a>
                            </div>
                            <div class="col">
                                <a href="/farm" class="btn btn-menu">Farm Info</a>
                            </div>
                        </div>
                        </div>
                    </div>
                @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
