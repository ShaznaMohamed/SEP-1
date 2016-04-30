<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonials;
use View;
use Session;

class ReviewController extends Controller
{
  public function showReviewsAll()
  {
    return view::make('reviews/reviews',[
      'reviewdata' => testimonials::where('hidden', '=', 0)->paginate(5)
    ]);
  }
}
