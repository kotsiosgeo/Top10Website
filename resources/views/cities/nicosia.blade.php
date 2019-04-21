@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 align="center">Things to do in Nicosia:</h1>
                <h2 align="center">Choose Category:</h2>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/nicosiarestaurants' ) }}">Restaurants</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/nicosiaclubs' ) }}">Clubs & Bars</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/nicosiamuseums' ) }}">Museums</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('activities/nicosiasightseeing' ) }}">Sightseeings</a>
            </div>
        </div>
    </div>
</div>
@endsection
