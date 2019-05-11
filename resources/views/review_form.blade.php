@extends('layouts.app')

@section('content')

<div>
  <div class="reveal" id="product-review-modal" data-reveal>
      <div>
        <form action="{{route('review.store')}}" method="post" role="form">

          {{csrf_field()}}

          <legend>Rate Destination</legend>

          <div class="form-group">
            <label for="">Rate It</label>
            <input type="text" class="form-control" name="rating" id="" placeholder="Input...">
          </div>

          <div class="form-group">
            <label for="">Headline</label>
            <input type="text" class="form-control" name="headline" id="" placeholder="Input...">
          </div>

          <div class="form-group">
            <label for="">Tell us More</label>
            <input type="text" class="form-control" name="description" id="" placeholder="Input...">
          </div>


          <input type="hidden" name="destination_id" value="{{$destination->id}}">


          <button type="submit" class="button">Submit</button>
        </form>
      </div>
    </div>
  </div>

  @endsection
