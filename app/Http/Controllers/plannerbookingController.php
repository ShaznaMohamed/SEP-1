<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\plannerbooking;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class plannerbookingController extends Controller
{
    public function getdataa()
    {
        return view('/wedding/plannerform');
    }

    public function getroom()
    {
        return view('/room/room');
    }

    public function getroomconfirm()
    {
        return view('/admin/room/roomconfirm');
    }

    public function insertdata(Request $request)
    {
        $this->validate($request, [
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:10',
                'planner' => 'required',


            ]
        );

        $status = "unconfirmed";
        plannerbooking::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'planner' => $request->input('planner'),
            'status' => $status

        ]);


        return redirect()
            ->route('/wedding/plannerform')
            ->with('info', 'You request is submitted successfully ');

        // return view('room', [' Your booking request is sent successfully.']);
    }
}
