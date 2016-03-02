<?php namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\reservation;
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

class LostFoundController extends Controller
{


//    public function lostview()
//    {
//        $customer = DB::table('customer', 'reservation')
//            ->where('reservation.status','=',"Checked_Out")
//            ->join('reservation', 'customer.cus_id', '=', 'reservation.cus_id')
//            ->join('room_reservation_rate', 'reservation.res_id', '=', 'room_reservation_rate.res_id')->get();
//        $res = DB::table('reservation', 'customer')
//            ->join('customer', 'reservation.cus_id', '=', 'customer.cus_id')->get();
//
//        return view('Housekeeping_views.LostFound')
//            ->with('founds', found::all())
//            ->with('customer', $customer)
//            ->with('res', $res);
//
//    }

    public function getdata()
    {
        return view('/admin/wedding/managereservation');
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

            return Redirect::to('managereservation')->with('message2', 'UPDATED SUCCESSFULLY');
        }




    }


    public function checkhallavailability()
    {

        $button = Input::get('btnn');

        if ($button == 'Check Availability') {

            $halltype = Input::get('halltype');
            $edate = Input::get('eventdate');
            $rid = Input::get('id');
            $entry = new found();
            $entry->remember_token = Input::get('_token');

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

            return Redirect::to('managereservation')->with('message2', 'UPDATED SUCCESSFULLY');
        }
    }

    public function confirmreservation()
    {


        $button = Input::get('btton');
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        if ($button == 'Confirm Reservation') {


            $get_id = Input::get('id');

            DB::table('wedreservation')
                ->where('id', $get_id)
                ->where('flexibility', 'Available')
                ->update(['status' => "Confirmed"]);


        }
        return Redirect::to('managereservation')->with('message2', 'UPDATED SUCCESSFULLY');
    }


    public   function myemailsendingg()
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

            $message->to($eemail, $firstname)
                ->subject("Booking Request Confirmation")
                ->setBody("

                  Thank you for reserving with Amalya Reach Holiday Resort
                  Your Banquet Hall reservation request is confirmed at Amalya.



                               Your  Reservation Details:


                                        Hall Type:        ".$halltype."


                                        Event:            ".$eventtype."


                                        Date:             ".$eventdate."


                                        Session:          ".$sessionn."


                                        Pax:              ".$pax."


                  Now you may plan your wedding with us at Amalya's Luxuries.
                  Amalya is enthusiastically waiting for your presence."
                );
        });

        return redirect()
            ->route('managereservation');
    }


    public function assignplanner()
    {
        $button = Input::get('abtton');
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        if ($button == 'Assign Planner') {


            $get_id = Input::get('id');
            $getplanner = Input::get('planner');

            DB::table('wedreservation')
                ->where('id', $get_id)
                ->where('status', 'Confirmed')
                ->update(['message' => $getplanner]);


        }
        return Redirect::to('managereservation')->with('message2', 'UPDATED SUCCESSFULLY')
                                                ->withInput();

    }


}
