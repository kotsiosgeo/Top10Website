@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1 align="center">Select City:</h1>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('cities/nicosia' ) }}">Nicosia</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('cities/limassol' ) }}">Limassol</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('cities/paphos' ) }}">Paphos</a>
                <a class="btn btn-lg btn-primary btn-block" href="{{ URL::to('cities/larnaca' ) }}">Larnaca</a>
            </div>
        </div>
    </div>
</div>
@endsection
