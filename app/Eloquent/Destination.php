<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public $timestamps = true;
    protected $table = 'destinations';
    protected $guarded = ['id'];

}
