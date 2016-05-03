<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Wedreservation;
use Illuminate\Redis\Database;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;

use DB;

/*
*
*
This controller is responsible for the management of specials for the  halls of the webiste.
It can manipulate the data of the special offers such as prices and other basic details.
*/

class specialformController extends Controller
{

    public function checkhallavailability()
    {

        $hall = $_POST['halltype'];
        $edate = $_POST['eventdate'];
        $rid = $_POST['id'];

        $tabledata = DB::table('wedreservation')
            ->where('status', 'Confirmed' )
            ->where('eventdate', $edate )
            ->where('halltype', $hall )
            ->get();


        if ($tabledata == null)
        {

            DB::table('wedreservation')
                ->where('id',$rid )
                ->update(['flexibility' => "Available"]);

        }
        else
        {
            DB::table('wedreservation')
                ->where('id',$rid )
                ->update(['flexibility' => "Not Available"]);
        }

        return redirect()
            ->route('/adimin/wedding/specialform')
            ->with('info', 'Your updation is done successfully ');
    }


    public function confirmation()
    {
        $get_id = $_POST['id'];

        DB::table('wedreservation')
            ->where('id',$get_id )
            ->where('flexibility', 'Available' )
            ->update(['status' => "Confirmed"]);

        return redirect()
            ->route('/admin/wedding/specialform')
            ->with('info', 'Your updation is done successfully ');
    }


//    public function sendEmailReminder(Request $request)
//    {
//        $get_id = $_POST['id'];
//
//
//        Mail::send('confirmation', ['wedreservation' => $get_id], function ($m) use ($get_id) {
//            $m->from('amalyareachlk@gmail.com', 'Amalya Reach');
//
//            //$m->to($get_id->email, $user->name)->subject('Your Reminder!');
//        });
//
//    }


    public   function myemailsending()
    {

        Mail::send([], [],function($message)
        {
           // $email = Request::input('email');
            $halltype = Input::get('halltype');
            $email = Input::get('email');
            $firstname = Input::get('firstname');
            $eventdate = Input::get('eventdate');
            $sessionn = Input::get('sessionn');
            $pax = Input::get('pax');
            $eventtype = Input::get('eventtype');

            $message->to($email, $firstname)
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
              ->route('/admin/wedding/specialform');
    }
}
