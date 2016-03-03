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
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use DB;


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
        $this->validate($request, [
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'city' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'eventdate' => 'required|unique:wedreservation',
            'noofrooms'=> 'numeric|max:2',
            'pax'=> 'required|numeric|max:400',


        ]);

//            [
//
//                'required' => 'The :attribute field is required.',
//
//            ]


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


        Mail::send([], [],function($message)
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
            ->route('weddingform')
            ->withInput()
            ->with('info', 'You request is submitted successfully ');
//        return Redirect::to('/wedding')->with('success',true)->with('message','That was great!');

    }




//    public function index()
//    {
//       return view('specialform')->with('data',$data);
//        $data = DB::table('wedreservation')->get();
//        return view('specialform',
//            ['datas' => $data->name]
//
//        );
//    }

//    protected function create(array $data)
//    {
//        Wedreservation::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'phone' => $data['phone'],
//            'pax' => $data['pax'],
//            'arrival' => $data['arrival'],
//            'departure' => $data['departure'],
//            'halltype' => $data['halltype'],
//            'message' => $data['message'],
//            'session' => $data['session'],
//            'flexibility' => $data['flexibility'],
//        ]);
//
//        Mail::send('confirmation', [], function ($message) {
//            $message->to(Input::get('email'), Input::get('name'))
//                ->subject('Thank you for Booking in Amalya Reach');
//        });
//
//
//
//        return Wedreservation::create();
//
//    }


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
