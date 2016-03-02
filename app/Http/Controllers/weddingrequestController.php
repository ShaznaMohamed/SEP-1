<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\weddingrequests;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class weddingrequestController extends Controller
{
    public function getdataa()
    {
        return view('/wedding/weddingquotationform');
    }

    public function getroom()
    {
        return view('room/room');
    }

    public function getroomconfirm()
    {
        return view('/admin/room/roomconfirm');
    }

    public function insertdata(Request $request)
    {
        $this->validate($request, [

                'eventtype' => 'required',
                'halltype' => 'required',
                'eventdate' => 'required',

                'sessionn' => 'required',
                'pax' => 'required|numeric',

                'noofrooms' => 'required|numeric',



                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|numeric|min:10',
                'city' => 'required|string',

            'required' => 'The :attribute field is required.'
           ]




        );


        $status = "unconfirmed";
        weddingrequests::create([

            'eventtype' => $request->input('eventtype'),
            'halltype' => $request->input('halltype'),
            'eventdate' => $request->input('eventdate'),

            'sessionn' => $request->input('sessionn'),
            'pax' => $request->input('pax'),

            'noofrooms' => $request->input('noofrooms'),
            'guestfrom' => $request->input('guestfrom'),
            'guestto' => $request->input('guestto'),
            'salutation' => $request->input('salutation'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'city' => $request->input('city'),
            'message' => $request->input('message'),

            'status' => $status



        ]);


        return redirect()
            ->route('/wedding/weddingquotationform')
            ->with('info', 'You request is submitted successfully ');

        // return view('room', [' Your booking request is sent successfully.']);
    }
}
