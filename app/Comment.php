<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
  public function destination()
  {
    return $this->belongsTo('App\Eloquent\Destination');
  }
}
