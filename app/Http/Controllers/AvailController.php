<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packageModel;
use DB;
use App\Http\Controllers\Controller;


/*
*
*
This controller is responsible for showing the available rooms in the hotel.
It makes a new view the results of the search query.
*/

class AvailController extends Controller
{

    public function indexGet(Request $request)
    {
        $this->validate($request,[
            'arrival' => 'required',
            'departure' => 'required',

        ]);

        session(['checker' => '1']);
        return view('displayckeckAvail');
    }

    public function check()
    {
      $users = DB::table('room')->paginate(1);
      return view('displayckeckAvail', ['users' => $users]);
    }

    public function indexPost()
    {
        return view('displayckeckAvail');
    }


}
