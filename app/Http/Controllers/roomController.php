<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\room;
use Illuminate\Support\Facades\Input;

class roomController extends Controller
{
    public function getdataaa()
    {
        return view('adminroom');
    }

    public function getdatafortable()
    {
        return view('deluxe');
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
        room::create([
            'roomtype' => $request->input('roomtype'),
            'price' => $request->input('price'),
            'wifi' => $wifi,
            'airconditioned' => $airconditioned ,
            'cabletv' => $cabletv,
            'telephone' => $telephone,
            'diningtable' => $diningtable

        ]);


        return redirect()
            ->route('adminroom')
            ->with('info', 'You updation is done successfully ');

        // return view('room', [' Your booking request is sent successfully.']);
    }


}
