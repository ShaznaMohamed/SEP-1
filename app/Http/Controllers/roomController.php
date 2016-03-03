<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\room;
use Illuminate\Support\Facades\Input;
use DB;

class roomController extends Controller
{

    public function getdatafortable()
    {
        return view('room/deluxe');
    }

    public function posttest()
    {
        return view('rommconfirmsub');

    }

    public function insertdataa(Request $request)
     {
        $this->validate($request, [
                'roomtype' => 'required',
                'price' => 'required',

            ]
        );


        $wifi = Input::has('wifi') ? true : false;
        $cabletv = Input::has('cabletv') ? true : false;
        $airconditioned = Input::has('airconditioned') ? true : false;
        $telephone = Input::has('telephone') ? true : false;
        $diningtable = Input::has('diningtable') ? true : false;

        $selectedroom = $_POST['roomtype'];
        $price = $_POST['price'];

        DB::table('room')
            ->where('roomtype',$selectedroom )
            ->update(['wifi' => $wifi,
                'cabletv' => $cabletv,
                'airconditioned' => $airconditioned,
                'telephone' => $telephone,
                'diningtable' => $diningtable,
                'price' => $price


            ]);

            return redirect('adminroom');

   }


}
