<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;
use willvincent\Rateable\Rateable;

class Destination extends Model
{
    use Rateable;

    public $timestamps = true;
    protected $table = 'destinations';
    protected $guarded = ['id'];
    /*
    public function reviews()
    {
      return $this->hasMany(DestinationReview::class);
    }
    */

}
