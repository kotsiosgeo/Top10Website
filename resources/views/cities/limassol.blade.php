@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 align="center">Things to do in Limassol:</h1>
                <h2 align="center">Choose Category:</h2>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/limassolrestaurants' ) }}">Restaurants</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/limassolclubs' ) }}">Clubs & Bars</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/limassolmuseums' ) }}">Museums</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/limassolsightseeing' ) }}">Sightseeing</a>
            </div>
        </div>
    </div>
</div>
@endsection
