<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roomreservation;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
/*
*
*
This controller is responsible for calculatibg totlal price for the room when the parameters such as
numer of rooms, adulst or children and othe room facilities and then directs the user in to the payment page.
Insertion of reservations data is done here.
*/
class RoomreservationController extends Controller
{
    public function getdataa()
    {
        return view('/room/roomform');
    }

    public function getroom()
    {
        return view('room/room');
    }

    public function getroomconfirm()
    {
        return view('/admin/room/roomconfirm');
    }

    public function paypalstart(Request $request)
    {
      $QTY = $request->input('noofrooms');
      $AMOUNT = $request->input('mytotal');

      $this->validate($request, [
          'name' => 'required|string',
          'email' => 'required|email',
          'phone' => 'required|numeric|min:10',
          'arrival' => 'required',
          'departure' => 'required',
          'noofrooms'=> 'required|numeric|max:12',

      ]
      );

      $temproom = DB::table('room')
          ->where('roomtype','=', $request->input('type'))
          ->value('id');

      $status = "unassigned";
      Roomreservation::create([
          'name' => $request->input('name'),
          'email' => $request->input('email'),
          'phone' => $request->input('phone'),
          'noofrooms' => $request->input('noofrooms'),
          'arrival' => $request->input('arrival'),
          'departure' => $request->input('departure'),
          'message' => $request->input('message'),
          'adult' => $request->input('adult'),
          'children' => $request->input('children'),
          'price' => $AMOUNT,
          'roomtype' => $request->input('type'),
          'roomID' => $temproom,



      ]);

      return view('paypal/paypal')->with('quantity',$QTY)->with('amount',$AMOUNT)->with('type' , $request->input('type'));

    }


    public function insertdata(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'phone' => 'required|numeric|min:10',
            'arrival' => 'required',
            'departure' => 'required',
            'noofrooms'=> 'required|numeric|max:12',

        ]
        );

        $status = "unconfirmed";
        Roomreservation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'noofrooms' => $request->input('noofrooms'),
            'arrival' => $request->input('arrival'),
            'departure' => $request->input('departure'),
            'message' => $request->input('message'),
            'adult' => $request->input('adult'),
            'children' => $request->input('children'),


        ]);


        return redirect()
            ->route('roomform')
            ->with('info', 'You request is submitted successfully ');

       // return view('room', [' Your booking request is sent successfully.']);
    }
}
