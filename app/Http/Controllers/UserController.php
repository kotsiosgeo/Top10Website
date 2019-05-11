<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests;
use Image;
use App\Eloquent\Destination;
use Mail;
use Session;
use Laracasts\Flash\Flash;

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

  public function post_suggest(Request $request)
  {
    $this->validate($request, [
      'email' => 'required|email',
      'destination' => 'min:2',
      'details' => 'min:10']);

      $data = array(
        'email' => $request->email,
        'destination' => $request->destination,
        'details' => $request->details
      );

      Mail::send('emails.suggest', $data, function($message) use ($data){
        $message->from($data['email']);
        $message->to('georgiouk95@gmail.com');
        $message->subject($data['destination']);
      });

      Flash::message('Your Suggestion was sent successfully!');
      return redirect()->route('home');
  }

  public function show_details()
  {
    return view('/details');
  }

  public function show_review()
  {
    //$destination = Destination::find($id);
    return view('/review_form');
  }
}

?>
