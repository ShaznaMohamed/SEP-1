<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dining;

class DiningController extends Controller
{

    public function sendsms()
    {

      return view('sendsms');
    }

    public function index()
    {
        return view('dining');

    }

    public function getEvents()
    {
        return view('dining');
    }

    public function postEvents(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'email' => 'required',
        ]);

        Dining::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'contact-arrival' => $request->input('contact-arrival'),
            'arrival_time' => $request->input('arrival_time'),
            'arrival_adults' => $request->input('arrival_adults'),
            'arrival_children' => $request->input('arrival_children'),
            'notes' => $request->input('notes'),

        ]);
        return redirect()
            ->route('dining')
            ->with('info', 'You are now subscribed to our newsletter');
    }


}
