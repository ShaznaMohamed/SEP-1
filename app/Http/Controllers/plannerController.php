<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planner;

use App\Http\Requests;
use App\Http\Controllers\Controller;
/*
*
*
This controller is responsible for the management of wedding hall planners of the webiste.
It can manipulate the data of the planners such as timetable and other basic details.
*/

class plannerController extends Controller
{

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
                'monday' => 'required|string',
                'tuesday' => 'required|string',
                'wednesday' => 'required|string',
                'thursday' => 'required|string',
                'friday' => 'required|string',
                'saturday' => 'required|string',

            ]
        );

        $status = "Available";
        planner::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'monday' => $request->input('monday'),
            'tuesday' => $request->input('tuesday'),
            'wednesday' => $request->input('wednesday'),
            'thursday' => $request->input('thursday'),
            'friday' => $request->input('friday'),
            'saturday' => $request->input('saturday'),
            'status' => $status

        ]);


        return redirect()
            ->route('/admin/wedding/adminplanner')
            ->with('info', 'You request is submitted successfully ');

        // return view('room', [' Your booking request is sent successfully.']);
    }
}
