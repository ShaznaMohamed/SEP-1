<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use View;
use Session;

/*
*
*
This controller is responsible for the managemet of the reviews done by the users.
Administrators can only hide the reviews but not delete them.
*/

class ReviewController extends Controller
{
  public function showReviewsAll()
  {
    return view::make('reviews/reviews',[
      'reviewdata' => testimonials::where('hidden', '=', 0)->paginate(5)
    ]);
  }

  public function getForm(){
    return View('reviews/reviewform');
  }

  public function getThankYou(){
    return View('reviews/reviewthankyou');
  }

  public function postReview(Request $request)
  {
    $this->validate($request, [
      'name' => 'required||min:4',
      'location' => 'required|min:4',
      'email' => 'required|email',
      'service' => 'required|min:20',
      'title' => 'required|min:15',
      'message' => 'required|min:30',
    ]);

    Testimonials::create([
      'email' => $request->input('email'),
      'name' => $request->input('name'),
      'location' => $request->input('location'),
      'service' => $request->input('service'),
      'title' => $request->input('title'),
      'message' => $request->input('message'),
    ]);
    return View('reviews/reviewthankyou');
  }

  //Administrator Control

  public function adminreviews()
  {
    return view::make('reviews/reviewmanage',[
      'reviewsdata' => testimonials::paginate(5)
    ]);
  }

  public function reviewhide($id)
  {
    $hide = Testimonials::find($id);

    $hide->hidden = 1;

    $hide->save();

    return redirect()->back();
  }

  public function reviewshow($id)
  {

    $hide = Testimonials::find($id);

    $hide->hidden = 0;

    $hide->save();

    return redirect()->back();
  }
}
