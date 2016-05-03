<?php

namespace App\Http\Controllers;

use App\Models\Wedreservation;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use Laracasts\FlashServiceProvider;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;


/*
*
*
This controller is responsible for the management wedding hall reservation request submission the webiste.
It can manipulate sending email regarding the request submission confirmation to the customer
*/
class WedreservationController extends  Controller
{
    public function getdata()
    {
        return view('wedding/weddingform');
    }

    public function getwedding()
    {
        return view('wedding/wedding');
    }

    public function getspecialform()
    {
        return view('/admin/wedding/specialform');
    }

    public function insertdata(Request $request)
    {
        $button = Input::get('sub');

        if ($button == 'Request for Quotation') {

            $rules = array(

                'firstname' => 'required|string',
                'lastname' => 'required|string',
                'city' => 'required|string',
                'email' => 'required|email',
                'phone' => 'required|digits:10',
                'eventdate' => 'required',
                'noofrooms' => 'numeric|max:2',
                'pax' => 'required|numeric|max:400',


            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {

                return Redirect::to('weddingform')->withErrors($validator)->withInput()->with('message17', 'REQUEST FOR QUOTATION IS FAILED');

            } else {

                $message = "Not Assigned";
                $status = "unconfirmed";
                Wedreservation::create([
                    'firstname' => $request->input('firstname'),
                    'lastname' => $request->input('lastname'),
                    'email' => $request->input('email'),
                    'phone' => $request->input('phone'),
                    'city' => $request->input('city'),
                    'pax' => $request->input('pax'),
                    'eventdate' => $request->input('eventdate'),
                    'eventtype' => $request->input('eventtype'),
                    'halltype' => $request->input('halltype'),
                    'noofrooms' => $request->input('noofrooms'),

                    'sessionn' => $request->input('sessionn'),
                    'flexibility' => $request->input('flexibility'),
                    'status' => $status,
                    'message' => $message

                ]);


                Mail::send([], [], function ($message) {

                    $eemail = Input::get('email');
                    $firstname = Input::get('firstname');


                    $message->to($eemail, $firstname)
                        ->subject("Booking Request Quotation")
                        ->setBody("

                 Thanks for making a booking request. We'll inform the confirmation status of your reservation shortly."
                        );
                });


                return Redirect::to('weddingform')->withErrors($validator)->withInput()->with('message18', 'YOUR REQUEST IS SUBMITTED SUCCESSFULLY. CHECK YOUR EMAIL');
//        return Redirect::to('/wedding')->with('success',true)->with('message','That was great!');
            }
        }

    }



public function calculateTotalPrice()
{

    $pax = 0 ;
    $noofguestroom =0;
    $selectedroom = Input::get('halltype');
    $pax = Input::get('pax');
    $noofguestroom = Input::get('noofrooms');
    $sessionn =  Input::get('sessionn');
    $hallprice = 0;
    $sessionprice = 0;


    $button = Input::get('submitcalc');

    if ($button == 'Calculate Total Rate') {

        $rules = array(
            'halltype' => 'required',
            'noofrooms' => 'required|numeric|max:2',
            'pax' => 'required|numeric|max:300',
            'sessionn' => 'required',

        );
        $validator = Validator::make(Input::all(), $rules);
        if ($validator->fails()) {

            return Redirect::to('weddingform')->withErrors($validator)->withInput()->with('message26', 'TOTAL RATE CALCULATION FAILED');

        } else {

            $tabledata = DB::table('weddingservices')
                ->where('halltype', $selectedroom)
                ->get();

            foreach($tabledata as $foundd)
            {
                $hallprice = $foundd->fullpayment;
            }

            if ($sessionn == "morning" || $sessionn == "afternoon" || $sessionn == "evening" )
            {
               $sessionprice = 1500.00;
            }
            else if ($sessionn == "halfday")
            {
                $sessionprice = 2500.00;
            }
            else if ($sessionn == "fullday")
            {
                $sessionprice = 5000.00;
            }

            $totalforhall = $hallprice * $pax ;
            $total = $totalforhall + ($noofguestroom * 1000 ) + $sessionprice;


            return Redirect::to('weddingform')->withErrors($validator)->withInput()->with('message27', 'TOTAL RATE FOR A FULL PAYMENT FOR YOUR SELECTION IS Rs.'.$total);
        }
    }

}



    public   function quotationemailsending()
    {
        $entry = new found();
        $entry->remember_token = Input::get('_token');

        Mail::send(['/admin/wedding/confirmation'], [],function($message)
        {

            $eemail = Input::get('email');
            $firstname = Input::get('firstname');


            $message->to($eemail, $firstname)
                ->subject("Booking Request Quotation")
                ->setBody("

                 Thanks for making a booking request. We'll inform the confirmation of your reservation shortly."
                );
        });

        return redirect()
            ->route('/wedding/weddingform');
    }



}
