@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 align="center">Things to do in Larnaca:</h1>
                <h2 align="center">Choose Category:</h2>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/larnacarestaurants' ) }}">Restaurants</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/larnacaclubs' ) }}">Clubs & Bars</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/larnacamuseums' ) }}">Museums</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/larnacasightseeing' ) }}">Sightseeings</a>
            </div>
        </div>
    </div>
</div>
@endsection
