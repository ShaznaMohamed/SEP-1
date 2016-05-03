<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Models\roomreservation;
use App\Models\Roomassistant;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

/*
*
*
This controller is responsible for the management of room assistant for room reservation of the webiste.
It can manipulate the data of the room assistant and assigning room assistants for relavent room reservatoina
and send notification emails.
*/
class RoomassistantController extends Controller
{
    public function assignroomassistant()
    {
        $button = Input::get('assbtton');
       // $entry = new found();
       // $entry->remember_token = Input::get('_token');

        if ($button == 'Assign Room Assistant') {


            $get_id = Input::get('id');
            $getplanner = Input::get('name');
            $assistant = Input::get('assistant');

            DB::table('roomreservation')
                ->where('id', $get_id)
                ->update(['status' => $assistant]);


        }
        return Redirect::to('roomconfirm')->with('message12', 'ROOM ASSISTANT ASSIGNED SUCCESSFULLY');
    }


    public   function roomassistantemailsending()
    {


        Mail::send([], [],function($message)
        {
            // $email = Request::input('email');
            $roomtype = Input::get('roomtype');
            //$eemail = Input::get('email');
            $noofchildren = Input::get('children');
            $arrival = Input::get('arrival');
            $noofadult = Input::get('adult');
            $noofrooms = Input::get('noofrooms');
            $departure = Input::get('departure');

            $cname = Input::get('name');
            $cemail = Input::get('uemail');
            $phone = Input::get('phone');
            $assname = Input::get('assname');


            //selecting the relevant assistant email
            $tabledata = DB::table('roomassistant')->where('name', $assname)->get();
            foreach($tabledata as $row)
            $eemail=$row->email;


            $message->to($eemail, $assname)
                ->subject("Reserved room allocation details")
                ->setBody("

                  You are assigned to one of the reserved room
                  The assigned reservation details....


                                 Customer Details:

                                       Name:             ".$cname."

                                       Email:            ".$cemail."

                                       Phone:            ".$phone."


                                 Reservation Details:

                                        Room Type:        ".$roomtype."


                                        Arrival Date:     ".$arrival."


                                        Departure Date:   ".$departure."


                                        Number of Adults:          ".$noofadult."


                                        Number of Children:        ".$noofchildren."


                                        Number of rooms reserved:   ".$noofrooms."


                                      -  Amalya Reach -"



                );
        });

        return Redirect::to('roomconfirm')->with('message11', 'NOTIFICATION EMAIL SENT SUCCESSFULLY');
    }


    public function addnewassistant(Request $request)
    {

        $button = Input::get('addassistantbtn');

        if ($button == 'Add Assistant') {

            $rules = array(
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|digits:10',
                'room' => 'required|string',

            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {

                return Redirect::to('roomconfirm')->withErrors($validator)->withInput()->with('message14', 'ADDING NEW ASSISTANT IS FAILED');

            } else {

                $status = "Added";

                roomassistant::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'room' => $request->input('room'),
                    'status' => $status

                ]);


                return Redirect::to('roomconfirm')->withErrors($validator)->withInput()->with('message13', 'SUCCESSFULLY NEW ROOM ASSISTANT IS ADDED');
            }
        }

        // return view('room', [' Your booking request is sent successfully.']);
    }

}
