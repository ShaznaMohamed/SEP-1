<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{

    public function index()
    {
        return view('events/MeetingAndEvents');

    }

    public function getEvents()
    {
        return view('events/MeetingAndEvents');
    }

    public function postEvents(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'confirm_email' => 'required|email',
            'email' => 'required|email',
            'contact_number' => 'required|digits:10',
        ]);

        $type = "Events";

        Event::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'venue' => $request->input('venue'),
            'pax' => $request->input('pax'),
            'arrival_date' => $request->input('arrival_date'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'contact_number' => $request->input('contact_number'),
            'type_of_event' => $request->input('type_of_event'),
            'preferred_time' => $request->input('preferred_time'),
            'email' => $request->input('email'),
            'confirm_email' => $request->input('confirm_email'),
            'type' => $type,

        ]);
        return redirect()
            ->route('hallDetails')
            ->with('info', 'Reservation was succesful, Thank you.');
    }


}
