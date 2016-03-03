<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\packageModel;
use DB;
use App\Http\Controllers\Controller;

class AvailController extends Controller
{

    public function indexGet(Request $request)
    {
        $this->validate($request,[
            'arrival' => 'required',
            'departure' => 'required',

        ]);

        session(['checker' => '1']);
        //$users = DB::table('room')->paginate(1);
        //return view('displayckeckAvail', ['users' => $users]);
        return view('displayckeckAvail');

/*
            return redirect()
            ->route('check')
            ->with('info', 'You have added a new package !' );

*/

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
