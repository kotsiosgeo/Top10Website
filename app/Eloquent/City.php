<?php

namespace App\Eloquent;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = true;
    protected $table = 'cities';
    protected $guarded = ['id'];

}
