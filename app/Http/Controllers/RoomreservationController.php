<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomreservation;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class RoomreservationController extends Controller
{
    public function getdataa()
    {
        return view('roomform');
    }

    public function getroom()
    {
        return view('room');
    }

    public function getroomconfirm()
    {
        return view('roomconfirm');
    }

    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'arrival' => 'required',
            'departure' => 'required',
            'noofrooms'=> 'required|numeric|max:12',

        ]
        );

        $status = "unconfirmed";
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
            'status' => $status

        ]);


        return redirect()
            ->route('roomform')
            ->with('info', 'You request is submitted successfully ');

       // return view('room', [' Your booking request is sent successfully.']);
    }
}
