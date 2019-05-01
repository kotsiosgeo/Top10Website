@extends('layouts.app')

@section('content')

<!DOCTYPE html>
      <div class="jumbotron text-center">
          <h1>{{ $destination->destination_name }}</h1>
          <p>
              <strong>Destination Name:</strong> {{ $destination->destination_name }}<br>
              <strong>Destination Detais:</strong> <br>{{ $destination->destination_details }}<br>
              <strong>Price Range:</strong> {{ $destination->price_range }}<br>
              <strong>Address:</strong> {{ $destination->address }}<br>
              <strong>Phone Number:</strong> {{ $destination->phone_number }}<br>
              <strong>Categories:</strong> {{ $destination->categories }}<br>
          </p>
          <head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
</head>

<div class="item-wrapper">
  <a href="{{ URL::to('review_form/'. $destination->id)}}" class="btn btn-small btn-primary" data-open="product-review-modal">Write a Review</a>

  <div>
      <div class="reveal" id="product-review-modal" data-reveal...>
      </div>
  </div>
</div>

  @endsection
