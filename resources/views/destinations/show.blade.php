@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<div class="jumbotron text-center">
  <h1>{{ $destination->destination_name }}</h1>
    <hr class="my-4">
      <p>
        <strong>Destination Name:</strong> {{ $destination->destination_name }}<br>
        <strong>Destination Detais:</strong> <br>{{ $destination->destination_details }}<br>
        <strong>Price Range:</strong> {{ $destination->price_range }}<br>
        <strong>Address:</strong> {{ $destination->address }}<br>
        <strong>Phone Number:</strong> {{ $destination->phone_number }}<br>
        <strong>Categories:</strong> {{ $destination->categories }}<br>
      </p>
</div>
<head>
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <h2>Comments Section:</h2>
    <h4 class="comment-count" style="font-style: italic;"> {{ $destination->comments()->count() }} Comments </h4>
    <hr class="my-4">
    @foreach($destination->comments as $comment)
      <div class="comment">
        <div class="author-info">
          <span style="float: left; margin-right: 5px;" class="glyphicon glyphicon-comment"></span>
          <div class="author-name">
          <h4>{{ $comment->name }}</h4>
          <div>
          <h6 style="font-size:11px; font-style: italic; color: #aaa;">{{ $comment->created_at}}</h6>
        </div>
      </div>
        </div>

        <div class="comment-content" style="clear:both; margin-left: 30px; font-size: 16px; line-height: 1.3em;">
          {{ $comment->comment }}
        </div>
      </div>
      <hr class="my-4">
    @endforeach
  </div>
</div>

<div class="row">
  <div id="comment-form" class="col-md-8 col-md-offset-2" style="margin-top: 50px;">
    {{ Form::open(['route' => ['comments.store', $destination->id], 'method' => 'POST']) }}

      <div class="row">
        <div class="col-md-6">
              {{ Form::label('name', "Name:") }}
              {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-6">
              {{ Form::label('email', "Email:") }}
              {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-12">
              {{ Form::label('comment', "Comment:") }}
              {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

              {{ Form::submit('Add Comment', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;'])  }}
              <div class="item-wrapper">
                <a href="{{ URL::to('review_form/'. $destination->id)}}" class="btn btn-primary btn-block" style="margin-top:15px;" data-open="product-review-modal">Write a Review</a>

                <div>
                    <div class="reveal" id="product-review-modal" data-reveal...>
                    </div>
                </div>
              </div>
        </div>
      </div>

    {{ Form::close() }}
  </div>
</div>
</head>


  @endsection
