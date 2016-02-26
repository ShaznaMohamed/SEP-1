<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use View;

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
      $testimonials = testimonials::all();
      return View("testimonials/testimonials")->with("testimonialsdata", $testimonials);
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

}
