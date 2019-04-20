<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Eloquent\Movie;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Laracasts\Flash\Flash;

class CityController extends Controller
{
  public function show_nicosia()
    {
        return view('/cities/nicosia');
    }

    public function show_limassol()
    {
      return view('/cities/limassol');
    }

    public function show_paphos()
    {
      return view('/cities/paphos');
    }

    public function show_larnaca()
    {
      return view('/cities/larnaca');
    }
}
