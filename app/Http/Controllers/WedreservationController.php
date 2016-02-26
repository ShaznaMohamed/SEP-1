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
        return view('weddingform');
    }

    public function getwedding()
    {
        return view('wedding');
    }

    public function getLeague()
    {
        $getSelectValue = Input::get('halltype');


        $my = $_POST['select_halltype'];
        echo "you have selected".$my;
    }


    public function getspecialform()
    {
        return view('specialform');
    }
    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'arrival' => 'required',
            'departure' => 'required',
            'pax'=> 'required|numeric|max:400',

        ]);

//            [
//
//                'required' => 'The :attribute field is required.',
//
//            ]



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


//        Mail::send('confirmation', [], function ($message) {
//            $message->to(Input::get('email'), Input::get('name'))
//                ->subject('Thank you for Booking in Amalya Reach');
//        });


       return redirect()
            ->route('weddingform')
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




}

