<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DestinationReview extends Model
{
    protected $fillable=[
      'headline',
      'description',
      'destination_id',
      'rating'
    ];
}
