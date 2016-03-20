<?php

namespace App\Http\Controllers;


use App\Models\UserAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laracasts\FlashServiceProvider;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Redirect;
use View;
use Session;
use Auth;

use Illuminate\Http\Request;
use App\Models\Event;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Facades\Input;

class EventsController extends Controller
{

    public function index()
    {
        return view('events/MeetingAndEvents');

    }

    public function getEvents()
    {
        //return view('events/MeetingAndEvents');
        if(Auth::user())
        {
          return view::make('events/MeetingAndEvents', [
            'loggeduser' => Auth::user(),
          ]);
        }
        else{
          return view('events/events');
        }
    }

    public function getEventinfo()
    {
          $event = Event::all();

          return view('events/eventmanage', ['event' => $event]);

    }

    public function eventdel($id){
        Event::destroy($id);
        return redirect('eventmanage');
    }

    public function eventEdit($id)
    {
      $user = Event::find($id);

      return view('events/eventassign')->with("user",$user);

    }

    public function eEdit(Request $request)
    {

      $editid = $request->input('id');

      $useredit = Event::find($editid);

      $input = $request->all();

      $useredit->fill($input)->save();

      Session::flash('flash_message', 'Edited');

      return redirect('eventassigned');
    }



    public function postEvents(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'venue' => 'required',
            'pax' => 'required|numeric',
            'arrival_date' => 'required',
            'start' => 'required',
            'end' => 'required',
            'contact_number' => 'required|numeric',
            'type_of_event' => 'required',
            'preferred_time' => 'required',
            'email' => 'required|email',



        ]);

        $type = "Events";

        Event::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'venue' => $request->input('venue'),
            'pax' => $request->input('pax'),
            'arrival_date' => $request->input('arrival_date'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),
            'contact_number' => $request->input('contact_number'),
            'type_of_event' => $request->input('type_of_event'),
            'preferred_time' => $request->input('preferred_time'),
            'email' => $request->input('email'),
            'type' => $type,
            'event_handler' => $request->input('event_handler'),
            'h_email' => $request->input('h_email'),

        ]);

        Mail::send([], [], function ($message) {
            $message->to(Input::get('email'), Input::get('first_name'))->subject('Thank you for registering with Amalya Reach.')->setbody('Hi,  We will get back to you soon.');
        });

        // Mail::send([], [], function ($message) {
        //     $message->to(Input::get('h_email'), Input::get('first_name'))->subject('You have a new event assigned. Please contact the event manager.')->setbody('Hi..');
        // });

        return redirect()
            ->route('hallDetails')
            ->with('info', 'Reservation was succesful, Thank you.');
    }


}
