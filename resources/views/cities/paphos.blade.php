@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 align="center">Things to do in Paphos:</h1>
                <h2 align="center">Choose Category:</h2>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/paphosrestaurants' ) }}">Restaurants</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/paphosclubs' ) }}">Clubs & Bars</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/paphosmuseums' ) }}">Museums</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/paphossightseeing' ) }}">Sightseeing</a>
            </div>
        </div>
    </div>
</div>
@endsection
