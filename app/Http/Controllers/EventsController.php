<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventsController extends Controller
{

    public function index()
    {
        return view('MeetingAndEvents');

    }

    public function getEvents()
    {
        return view('MeetingAndEvents');
    }

    public function postEvents(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'confirm_email' => 'required',
            'email' => 'required',
        ]);

        Event::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'venue' => $request->input('venue'),
            'pax' => $request->input('pax'),
            'contact-arrival' => $request->input('contact-arrival'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'contact_number' => $request->input('contact_number'),
            'type_of_event' => $request->input('type_of_event'),
            'preferred_time' => $request->input('preferred_time'),
            'email' => $request->input('email'),
            'confirm_email' => $request->input('confirm_email'),

        ]);
        return redirect()
            ->route('hallDetails')
            ->with('info', 'You are now subscribed to our newsletter');
    }


}
