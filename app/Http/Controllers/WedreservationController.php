<?php

namespace App\Http\Controllers;

use App\Models\Wedreservation;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        ]);

        Wedreservation::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'pax' => $request->input('pax'),
            'arrival' => $request->input('arrival'),
            'departure' => $request->input('departure'),
            'halltype' => $request->input('halltype'),
            'message' => $request->input('message'),

        ]);


        return redirect()
            ->route('wedding')
            ->with('info', 'You proposal is submitted successfully ');
    }




    }
