<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use App\Eloquent\Destination;

class UserController extends Controller
{
  public function profile()
  {
    return view('profile', array('user' => Auth::user()) );
  }

  public function update_avatar(Request $request)
  {
    if ($request->hasFile('avatar')) {
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename) );

      $user = Auth::user();
      $user->avatar = $filename;
      $user->save();

    }
    return view('profile',array('user' => Auth::user()) );
  }

  public function show_suggest()
  {
    return view('/suggest');
  }

  public function show_details()
  {
    return view('/details');
  }

  public function show_review()
  {
    $destination = Destination::find($id);
    return view('/review_form');
  }
}

?>
