<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planner;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class plannerController extends Controller
{
    public function getdataa()
    {
        return view('adminplanner');
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
            ->route('adminplanner')
            ->with('info', 'You request is submitted successfully ');

        // return view('room', [' Your booking request is sent successfully.']);
    }
}
