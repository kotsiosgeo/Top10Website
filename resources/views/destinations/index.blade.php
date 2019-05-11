@extends('layouts.admin')

@section('content')
@include('flash::message')

  <h1>All Destinations</h1>

  <!-- will be used to show any messages -->
  @if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
  @endif

  <table class="table table-striped table-bordered">
      <thead>
          <tr>
              <td>Destination Name</td>
              <td>Destination Details</td>
              <td>Price Range</td>
              <td>Address</td>
              <td>Phone Number</td>
              <td>Categories</td>
          </tr>
      </thead>
      <tbody>
      @foreach($destinations as $key => $value)
          <tr>
              <td>{{ $value->destination_name }}</td>
              <td>{{ $value->destination_details }}</td>
              <td>{{ $value->price_range }}</td>
              <td>{{ $value->address }}</td>
              <td>{{ $value->phone_number }}</td>
              <td>{{ $value->categories }}</td>
              <td>

              <a class="btn btn-small btn-success" href="{{ URL::to('destinations/' . $value->id) }}">Show Destination</a>
              {!! Form::open(array('url' => 'destinations/' . $value->id, 'class' => 'pull-right')) !!}
              {!! Form::hidden('_method', 'DELETE') !!}
              {!! Form::submit('Delete Destination', array('class' => 'btn btn-danger')) !!}
              {!! Form::close() !!}
              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
@endsection
