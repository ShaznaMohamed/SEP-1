<?php

namespace App\Http\Controllers;

use App\Models\Wedreservation;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;


class WedreservationController extends  Controller
{
    public function getdata()
    {
        return view('weddingform');
    }
    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'arrival' => 'required',
            'departure' => 'required',

        ],

            [

                'required' => 'The :attribute field is required.',

            ]
        );

        Wedreservation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'pax' => $request->input('pax'),
            'arrival' => $request->input('arrival'),
            'departure' => $request->input('departure'),
            'halltype' => $request->input('halltype'),
            'message' => $request->input('message'),
            'sessionn' => $request->input('sessionn'),
            'flexibility' => $request->input('flexibility'),

        ]);


//        return redirect()
//            ->route('wedding')
//            ->with('info', 'You request is submitted successfully ');

        return view('wedding', [' Your request is sent successfully.']);
    }



    public function index()
    {
        $data=DB::table('wedreservation')->get();
        return view('specialform')->with('data',$data);


    }

    public function validation()
    {

        $rules = array(
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'arrival' => 'required',
            'departure' => 'required',
        );

        $messages = array(
            'required' => 'The :attribute is really really really important.',

        );


        $validator = Validator::make(Input::all(),$rules,$messages);

        if($validator->fails()){
            $messages = $validator->messages();
            return Redirect::to('weddingform')
                ->withErrors($validator);
        }
        else{
            $Wedreservation = new Wedreservation;
            $Wedreservation->name = Input::get('name');
            $Wedreservation->email = Input::get('email');
            $Wedreservation->phone = Input::get('phone');
            $Wedreservation->pax = Input::get('pax');
            $Wedreservation->arrival = Input::get('arrival');
            $Wedreservation->departure = Input::get('departure');
            $Wedreservation->halltype = Input::get('halltype');
            $Wedreservation->message = Input::get('message');
            $Wedreservation->session = Input::get('session');
            $Wedreservation->flexibility = Input::get('flexibility');

            $Wedreservation->save();

            return Redirect::to('weddingform')->with('message', 'Request is sent Successfully !!!');
        }
    }


    }

