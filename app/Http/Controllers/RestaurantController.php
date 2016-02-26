<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\breakfast;
use App\Models\lunch;

class RestaurantController extends Controller
{
    public function getMenu()
    {
      $breakfast = breakfast::all();
      $lunch = lunch::all();
      return view("restaurant/restaurant")->with("breakfastdata", $breakfast,"lunchdata", $lunch);
    }
}
