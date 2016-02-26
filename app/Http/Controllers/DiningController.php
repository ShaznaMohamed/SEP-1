<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dining;
use Illuminate\Support\Facades\Mail;

class DiningController extends Controller
{

    public function index()
    {
        return view('dining/dining');

    }

    public function posttest()
    {
        return view('testvish');

    }

    public function getEvents()
    {
        return view('dining/dining');

    }

    public function postEvents(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
        ]);

        $type = "Dining";

        Dining::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'arrival_date' => $request->input('arrival_date'),
            'arrival_time' => $request->input('arrival_time'),
            'arrival_adults' => $request->input('arrival_adults'),
            'arrival_children' => $request->input('arrival_children'),
            'notes' => $request->input('notes'),
            'type' => $type,
        ]);


        // Mail::send('emails.test', [], function ($message) {
        //     $message->to(Input::get('email'), Input::get('first_name'))->subject('Welcome');
        // });

        return redirect()
            ->route('restaurant')
            ->with('info', 'Reservation was succesful, Thank you.');

    }


}
