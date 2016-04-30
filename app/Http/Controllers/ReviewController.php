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
