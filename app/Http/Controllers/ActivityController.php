<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Eloquent\City;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Laracasts\Flash\Flash;

class ActivityController extends Controller
{
  public function show_paphosresaurants()
    {
        return view('/activities/paphosrestaurants');
    }

  public function show_paphosclubs()
    {
        return view('/activities/paphosclubs');
    }

  public function show_paphosmuseums()
    {
        return view('/activities/paphosmuseums');
    }

  public function show_paphossightseeing()
    {
        return view('/activities/paphossightseeing');
    }

  public function show_nicosiaresaurants()
    {
        return view('/activities/nicosiarestaurants');
    }

  public function show_nicosiaclubs()
    {
        return view('/activities/nicosiaclubs');
    }

  public function show_nicosiamuseums()
    {
        return view('/activities/nicosiamuseums');
    }

  public function show_nicosiasightseeing()
    {
        return view('/activities/nicosiasightseeing');
    }

  public function show_limassolresaurants()
    {
        return view('/activities/limassolrestaurants');
    }

  public function show_limassolclubs()
    {
        return view('/activities/limassolclubs');
    }

  public function show_limassolmuseums()
    {
        return view('/activities/limassolmuseums');
    }

  public function show_limassolsightseeing()
    {
        return view('/activities/limassolsightseeing');
    }

  public function show_larnacaresaurants()
    {
        return view('/activities/larnacarestaurants');
    }

  public function show_larnacaclubs()
    {
        return view('/activities/larnacaclubs');
    }

  public function show_larnacamuseums()
    {
        return view('/activities/larnacamuseums');
    }

  public function show_larnacasightseeing()
    {
        return view('/activities/larnacasightseeing');
    }
}
