<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use View;
use Session;

class TestimonialsController extends Controller
{
    public function getReviewAdmin()
    {
      return view::make('admin\testimonials\AdminTestimonials',[
        'testimonials' => testimonials::paginate(5)
      ]);
    }

    public function getReview()
    {
      // $testimonials = testimonials::all();
      // return View("testimonials/testimonials")->with("testimonialsdata", $testimonials);

      return view::make('testimonials/testimonials',[
        'testimonialsdata' => testimonials::where('hidden', '=', 0)->paginate(5)
      ]);
    }

    public function getForm(){
      return View('testimonials/testimonialsform');
    }

    public function getThankYou(){
      return View('testimonials/testimonialsthankyou');
    }

    public function postReview(Request $request)
    {
        Testimonials::create([
            'email' => $request->input('email'),
            'name' => $request->input('name'),
            'location' => $request->input('location'),
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

      Session::flash('flash_message', 'Edited');

      return redirect()->back();
    }

    public function adminshow($id)
    {

      $hide = Testimonials::find($id);

      $hide->hidden = 0;

      $hide->save();

      Session::flash('flash_message', 'Edited');

      return redirect()->back();
    }

}
