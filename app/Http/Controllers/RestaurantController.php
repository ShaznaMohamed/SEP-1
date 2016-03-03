<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\breakfast;
use App\Models\lunch;
use App\Models\dinner;
use App\Models\nonalcoholic;
use App\Models\coffee;
use App\Models\alcoholic;

class RestaurantController extends Controller
{
    public function getMenu()
    {

      $breakfast = breakfast::all();
      $lunch = lunch::all();
      $dinner = dinner::all();
      $nonalcoholic = nonalcoholic::all();
      $coffee = coffee::all();
      $alcoholic = alcoholic::all();
      return view("restaurant/restaurant")->with("breakfastdata", $breakfast)->with("luncdata", $lunch)->with("dinnerdata", $dinner)
                  ->with("nonalcoholicdata", $nonalcoholic)->with("coffeedata", $coffee)->with("alcoholicdata", $alcoholic);
    }



}
