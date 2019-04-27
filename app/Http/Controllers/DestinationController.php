<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Eloquent\Destination;
use App\Http\Requests;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\View;
use Laracasts\Flash\Flash;

class DestinationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $destinations = Destination::all();
        return View::make('destinations.index')
          ->with('destinations', $destinations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $destinations = Destination::all();
      // load the create form (app/views/teams/create.blade.php)
      return View::make('destinations.create')
      ->with('destinations', $destinations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
          'destination_name'  => 'required|unique:destinations',
          'destination_details'=> 'required',
          'price_range'   => 'required',
          'address'   => 'required',
          'phone_number'   => 'required',
          'categories'   => 'required',
        );
          // store
          $destination = new destination;
          $destination->destination_name     = Input::get('destination_name');
          $destination->destination_details  = Input::get('destination_details');
          $destination->price_range  = Input::get('price_range');
          $destination->address  = Input::get('address');
          $destination->phone_number  = Input::get('phone_number');
          $destination->categories  = Input::get('categories');
          $destination->save();
          // redirect
          Flash::message('Successfully added destination!');
          return Redirect::to('destinations');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    // get the destination
    $destination = Destination::find($id);
    // show the view and pass the destination to it
    return View::make('destinations.show')
      ->with('destination', $destination);
  }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
    // delete
      $destination = Destination::find($id);
      $destination->delete();
      // redirect
      Flash::message('Successfully deleted destination!');
      return Redirect::to('destinations');
  }

}
