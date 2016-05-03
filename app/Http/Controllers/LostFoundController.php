<?php namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\reservation;
use App\Models\planner;
use App\losts;
use App\found;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Response;
use Auth;
use Session;
use App\task;
use App\notice;
use Illuminate\Support\Facades\DB;
use App\documents;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Models\Wedreservation;
use Illuminate\Support\Facades\Mail;

/*
*
*
This controller is responsible for the management of wedding hall reservations by the
administrator. Admin can send email to the customer and allocate wedding planner and send notifications
*/

class LostFoundController extends Controller
{


    public function getdata()
    {
      return redirect('managereservation');
    }

    public function addfound()
    {
        $button = Input::get('btn');

        if ($button == 'Save Changes') {

            $rules = array(


                'id' => 'required'
            );

            $validator = Validator::make(Input::all(), $rules);

            // check if the validator failed -----------------------
            if ($validator->fails()) {

                return Redirect::to('managereservation')->withErrors($validator)->withInput()->with('message1', 'UPDATE FAILED');

            } else {

                $entry = new found();
                $id = Input::get('id');
                $status = Input::get('status');
                $entry->remember_token = Input::get('_token');

                DB::table('wedreservation')
                    ->where('id', $id)
                    ->where('flexibility', 'Available')
                    ->update(array('status' => $status));
                return Redirect::to('managereservation')
                    ->with('message2', 'UPDATED SUCCESSFULLY')
                    ->withInput();
            }

        }

        elseif ($button == 'Check Availability') {

            $halltype = Input::get('halltype');
            $edate = Input::get('eventdate');
            $rid = Input::get('id');


            $tabledata = DB::table('wedreservation')
                ->where('status', 'Confirmed')
                ->where('eventdate', $edate)
                ->where('halltype', $halltype)
                ->get();


            if ($tabledata == null) {

                DB::table('wedreservation')
                    ->where('id', $rid)
                    ->update(['flexibility' => "Available"]);

            } else {
                DB::table('wedreservation')
                    ->where('id', $rid)
                    ->update(['flexibility' => "Not Available"]);
            }

            return redirect('managereservation');
        }
    }

/*this checks the reservation requested wedding hall availability
  The requested wedding hall date, wedding hall type are taken into consideratoin
  when a new reservation is to be made, before that the same requested date and hall type is checked in the database
  inorder to identify the whether it is already booked or not*/
    public function checkhallavailability()
    {

        $button = Input::get('btnn');

        //triggering the availability checking button click
        if ($button == 'Check Availability') {

            //getting the input values from the selected reservation request
            $halltype = Input::get('halltype');
            $edate = Input::get('eventdate');
            $rid = Input::get('id');

            //handling the token macth
            $entry = new found();
            $entry->remember_token = Input::get('_token');

            //query for checking same hall and date
            $tabledata = DB::table('wedreservation')
                ->where('status', 'Confirmed')
                ->where('eventdate', $edate)
                ->where('halltype', $halltype)
                ->get();

            //if same hall for same date is already booked
            if ($tabledata == null) {

                DB::table('wedreservation')
                    ->where('id', $rid)
                    ->update(['flexibility' => "Available"]);
                return Redirect::to('managereservation')->with('message8', 'HALL IS AVAILABLE');

           //if same hall for same date is not already booked
            } else {
                DB::table('wedreservation')
                    ->where('id', $rid)
                    ->update(['flexibility' => "Not Available"]);

                return Redirect::to('managereservation')->with('message7', 'HALL IS NOT AVAILABLE ');
            }


        }
    }

    public function confirmreservation()
    {


        $button = Input::get('btton');
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        if ($button == 'Confirm Reservation') {

             $get_id = Input::get('id');

             $my = " ";
             $found = DB::table('wedreservation') ->where('id', $get_id )->get();
             foreach($found as $foundd)
             {
                      $my = $foundd->flexibility;
             }
                if ( $my == 'Available')
                {
                    DB::table('wedreservation')
                        ->where('id', $get_id)
                        ->where('flexibility', 'Available')
                        ->update(['status' => "Confirmed"]);

                    return Redirect::to('managereservation')->with('message10', 'RESERVATION REQUEST CONFIRMED SUCCESSFULLY');
                }else
                    return Redirect::to('managereservation')->with('message9', 'RESERVATION REQUEST IS NOT CONFIRMED AS THE HALL IS NOT AVAIALBLE');

        }

    }


    public   function myemailsendingg()
    {
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        $availablity = Input::get('availability');

        if ( $availablity == "Available") {


            Mail::send([], [], function ($message) {
                // $email = Request::input('email');
                $halltype = Input::get('halltype');
                $eemail = Input::get('email');
                $firstname = Input::get('firstname');
                $eventdate = Input::get('eventdate');
                $sessionn = Input::get('sessionn');
                $pax = Input::get('pax');
                $eventtype = Input::get('eventtype');

                $message->to($eemail, $firstname)
                    ->subject("Booking Request Confirmation")
                    ->setBody("

                  Thank you for reserving with Amalya Reach Holiday Resort
                  Your Banquet Hall reservation request is confirmed at Amalya.



                               Your  Reservation Details:


                                        Hall Type:        " . $halltype . "


                                        Event:            " . $eventtype . "


                                        Date:             " . $eventdate . "


                                        Session:          " . $sessionn . "


                                        Pax:              " . $pax . "


                  Now you may plan your wedding with us at Amalya's Luxuries.
                  Amalya is enthusiastically waiting for your presence."
                    );
            });

        }

        else{

            Mail::send([], [], function ($message) {
                // $email = Request::input('email');
                $halltype = Input::get('halltype');
                $eemail = Input::get('email');
                $firstname = Input::get('firstname');
                $eventdate = Input::get('eventdate');
                $sessionn = Input::get('sessionn');
                $pax = Input::get('pax');
                $eventtype = Input::get('eventtype');

                $message->to($eemail, $firstname)
                    ->subject("Booking Request Quotation")
                    ->setBody("

                  Thank you for reserving with Amalya Reach Holiday Resort
                  Unfortunately Your Banquet Hall requested is not available on the requested date.



                               Your  Reservation Details:


                                        Hall Type:        " . $halltype . "


                                        Event:            " . $eventtype . "


                                        Date:             " . $eventdate . "


                                        Session:          " . $sessionn . "


                                        Pax:              " . $pax . "


                  Now you may try for another date or another hall type for better results.
                  Amalya is enthusiastically waiting for your presence.

                        -Amalya Reach-"
                    );
            });

        }

        return Redirect::to('managereservation')->with('message5', 'EMAIL SENT SUCCESSFULLY');

    }


    public function assignplanner()
    {
        $button = Input::get('abtton');
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        if ($button == 'Assign Planner') {


            $get_id = Input::get('id');
            $getplanner = Input::get('name');
            $selectedhall = Input::get('planner');

            DB::table('wedreservation')
                ->where('id', $get_id)
                ->where('status', 'Confirmed')
                ->update(['message' => $selectedhall]);


        }
        return Redirect::to('managereservation')->with('message3', 'WEDDING PLANNER ASSIGNED SUCCESSFULLY');

    }


    public   function planneremailsendingg()
    {
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        Mail::send([], [],function($message)
        {
            // $email = Request::input('email');
            $halltype = Input::get('halltype');
            $eemail = Input::get('email');
            $firstname = Input::get('firstname');
            $eventdate = Input::get('eventdate');
            $sessionn = Input::get('sessionn');
            $pax = Input::get('pax');
            $eventtype = Input::get('eventtype');

            $cname = Input::get('name');
            $cemail = Input::get('uemail');
            $phone = Input::get('phone');

            //selecting the relevant assistant email
            $tabledata = DB::table('planner')->where('name', $firstname)->get();
            foreach($tabledata as $row)
                $eemail=$row->email;

            $message->to($eemail, $firstname)
                ->subject("Wedding Hall Planning Notification")
                ->setBody("

                  You are assigned to one of the Wedding Hall planning
                  The assigned reservation details....


                                 Customer Details:

                                       Name:             ".$cname."

                                       Email:            ".$cemail."

                                       Phone:            ".$phone."


                                 Reservation Details:

                                        Hall Type:        ".$halltype."


                                        Event:            ".$eventtype."


                                        Date:             ".$eventdate."


                                        Session:          ".$sessionn."


                                        Pax:              ".$pax."


                                      -  Amalya Reach -"



                );
        });

        return Redirect::to('managereservation')->with('message2', 'NOTIFICATION EMAIL SENT SUCCESSFULLY');
    }


    public function addnewplanner(Request $request)
    {

        $button = Input::get('addplannerbtn');

        if ($button == 'Add Planner') {

            $rules = array(
                'name' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|digits:10',
                'monday' => 'required|string',

            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {

                return Redirect::to('managereservation')->withErrors($validator)->withInput()->with('message1', 'ADDING NEW PLANNER IS FAILED');

            } else {
                $tuesday = "Available";
                $wednesday = "Available";
                $thursday = "Available";
                $saturday = "Available";
                $friday = "Available";
                $status = "Available";

                planner::create([
                    'name' => $request->input('name'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'monday' => $request->input('monday'),
                    'tuesday' => $tuesday,
                    'wednesday' => $wednesday,
                    'thursday' => $thursday,
                    'friday' => $friday,
                    'saturday' => $saturday,
                    'status' => $status

                ]);


                return Redirect::to('managereservation')->withErrors($validator)->withInput()->with('message4', 'SUCCESSFULLY NEW PLANNER IS ADDED');
            }
        }

        // return view('room', [' Your booking request is sent successfully.']);
    }


}
