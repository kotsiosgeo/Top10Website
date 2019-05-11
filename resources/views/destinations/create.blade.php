@extends('layouts.admin')

@section('content')
@include('flash::message')
<div class="container">
    <div class="row">
      <div class="col-lg-6">
        {!! Form::open(array('url' => 'destinations')) !!}

        <div class="form-group">
          {!! Form::label('destination_name', 'Destination Name:') !!}
          {!! Form::text('destination_name', Input::old('destination_name'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('destination_details', 'Destination Details:') !!}
          {!! Form::text('destination_details', Input::old('destination_details'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('price_range', 'Price Range:') !!}
          {!! Form::text('price_range', Input::old('price_range'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('address', 'Address:') !!}
          {!! Form::text('address', Input::old('address'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('phone_number', 'Phone Number:') !!}
          {!! Form::text('phone_number', Input::old('phone_number'), array('class' => 'form-control')) !!}
        </div>

        <div class="form-group">
          {!! Form::label('categories', 'Categories:') !!}
          {!! Form::text('categories', Input::old('categories'), array('class' => 'form-control')) !!}
        </div>

        {!! Form::submit('Add Destination', array('class' => 'btn btn-primary')) !!}

        {!! Form::close() !!}
    </div>
  </div>
</div>
@endsection
