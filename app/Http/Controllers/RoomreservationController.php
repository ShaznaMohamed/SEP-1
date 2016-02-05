<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomreservation;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoomreservationController extends Controller
{
    public function getdata()
    {
        return view('roomform');
    }
    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'arrival' => 'required',
            'departure' => 'required',

        ],

            [

                'required' => 'The :attribute field is required.',

            ]
        );

        Roomreservation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'noofrooms' => $request->input('noofrooms'),
            'arrival' => $request->input('arrival'),
            'departure' => $request->input('departure'),
            'roomtype' => $request->input('roomtype'),
            'message' => $request->input('message'),
            'adult' => $request->input('adult'),
            'children' => $request->input('children'),

        ]);


//        return redirect()
//            ->route('wedding')
//            ->with('info', 'You request is submitted successfully ');

        return view('room', [' Your booking request is sent successfully.']);
    }
}
