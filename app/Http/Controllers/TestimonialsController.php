<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use View;
use Session;

class TestimonialsController extends Controller
{
  /*
  | Administrator view testimonials
  */
  public function getReviewAdmin()
  {
    return view::make('admin\testimonials\AdminTestimonials',[
      'testimonials' => testimonials::where('hidden', '=', 0)->paginate(5)
    ]);
  }
  /*
  | Testimonials page view not hidden testimonials
  */
  public function getReview()
  {
    return view::make('testimonials/testimonials',[
      'testimonialsdata' => testimonials::where('hidden', '=', 0)->paginate(5)
    ]);
  }
  /*
  | Testimonials add form
  */
  public function getForm(){
    return View('testimonials/testimonialsform');
  }
  /*
  | Testimonials thank you after adding
  */
  public function getThankYou(){
    return View('testimonials/testimonialsthankyou');
  }
  /*
  | Testimonials sending to Database
  */
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
    return View('testimonials/testimonialsthankyou');
  }

  public function adminhide($id)
  {
    $hide = Testimonials::find($id);

    $hide->hidden = 1;

    $hide->save();

    return redirect()->back();
  }

  public function adminshow($id)
  {

    $hide = Testimonials::find($id);

    $hide->hidden = 0;

    $hide->save();

    return redirect()->back();
  }

}
