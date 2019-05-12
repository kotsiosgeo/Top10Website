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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<div class="row">
  <div class="col-md-8 col-md-offset-2">
    <div>
    <style>
    .stars-outer {
      position: relative;
      display: inline-block;
      }

    .stars-inner {
      position: absolute;
      top: 0;
      left: 0;
      white-space: nowrap;
      overflow: hidden;
      width: 0;
      }

      .stars-outer::before {
      content: "\f005 \f005 \f005 \f005 \f005";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      color: #ccc;
      }

      .stars-inner::before {
      content: "\f005 \f005 \f005 \f005 \f005";
      font-family: "Font Awesome 5 Free";
      font-weight: 900;
      color: #f8ce0b;
      }

    </style>
    <div class="container mt-5">

  <table class="table table-striped">
    <thead>
      <tr>
        <h2>Overall Rating:</h2>
      </tr>
    </thead>
    <tbody>
      <tr class="rate">
        <td>
          <div class="stars-outer">
            <div class="stars-inner"></div>
          </div>
          <span class="number-rating"></span>
        </td>
      </tr>
    </tbody>
  </table>
</div>

    <script>
    // Initial Ratings
        const ratings = {
          rate: {{ $destination->rating}}
        }

        // Total Stars
        const starsTotal = 5;

        // Run getRatings when DOM loads
        document.addEventListener('DOMContentLoaded', getRatings);

        // Init product
        let product;

        // Product select change
        productSelect.addEventListener('change', (e) => {
          product = e.target.value;
          // Enable rating control
          ratingControl.disabled = false;
          ratingControl.value = ratings[product];
        });

        // Get ratings
        function getRatings() {
          for (let rating in ratings) {
            // Get percentage
            const starPercentage = (ratings[rating] / starsTotal) * 100;

            // Round to nearest 10
            const starPercentageRounded = `${Math.round(starPercentage / 10) * 10}%`;

            // Set width of stars-inner to percentage
            document.querySelector(`.${rating} .stars-inner`).style.width = starPercentageRounded;

            // Add number rating
            document.querySelector(`.${rating} .number-rating`).innerHTML = {{ $destination->rating}};
          }
        }
    </script>
    </div>
    <hr class="my-4">
    <h2>Comments & Reviews Section:</h2>
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
        <div class="rate" style="clear:both; margin-left: 30px; font-size: 16px; line-height: 1.3em; font-style: bold;">
          Rating: {{ $comment->rate }} ★
        </div>
        <div class="comment-content" style="clear:both; margin-left: 30px; font-size: 14px; line-height: 1.3em;">
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
              {{ Form::label('rate', "Rating: (Optional)") }}
              {{ Form::select('rate', array('-' => 'No rating', '1' => '1 ★ - Awful', '2' => '2 ★★ - Not so good', '3' => '3 ★★★ - Average', '4' => '4 ★★★★ - Quite good', '5' => '5 ★★★★★ - Awesome!'), '') }}
        </div>

        <div class="col-md-8">
              {{ Form::label('name', "Name:") }}
              {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-6">
              {{ Form::label('email', "Email: (Not visible)") }}
              {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="col-md-12">
              {{ Form::label('comment', "Comments:") }}
              {{ Form::textarea('comment', null, ['class' => 'form-control', 'rows' => '5']) }}

              {{ Form::submit('Add Comment or Review', ['class' => 'btn btn-success btn-block', 'style' => 'margin-top:15px;'])  }}
              <hr class="my-4">
        </div>
      </div>

    {{ Form::close() }}
  </div>
</div>
</head>


  @endsection
