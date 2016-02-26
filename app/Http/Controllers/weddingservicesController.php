<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\weddingservices;
use Illuminate\Redis\Database;

use DB;

class weddingservicesController extends Controller
{
    public function getdataa()
    {
        return view('adminweddingpage');
    }

    public function getdatafortable()
    {
        return view('samroreception');
    }

    public function update()
    {
//
//        $getSelectValue = input::get('halltype');
//        DB::table('weddingservices')
//            ->where('halltype',$getSelectValue )
//            ->update(['advancepayment' => "$getSelectValue"]);
    }


    public function insertdata(Request $request)
    {
        $this->validate($request, [
                'halltype' => 'required',
                'advancepayment' => 'required',
                'minimumpax' => 'required',
                'additionalhour' => 'required',
                'fullpayment' => 'required',
                'corkage' => 'required',
                'beerlocal' => 'required',
                'icedcoffee' => 'required',
                'cutlery' => 'required',

            ]
        );


        weddingservices::Create([
            'halltype' => $request->input('halltype'),
            'advancepayment' => $request->input('advancepayment'),
            'minimumpax' => $request->input('minimumpax'),
            'additionalhour' => $request->input('additionalhour'),
            'fullpayment' => $request->input('fullpayment'),
            'corkage' => $request->input('corkage'),
            'beerlocal' => $request->input('beerlocal'),
            'icedcoffee' => $request->input('icedcoffee'),
            'cutlery' => $request->input('cutlery'),

        ]);



        return redirect()
            ->route('adminweddingpage')
            ->with('info', 'Your updation is done successfully ');



        // return view('room', [' Your booking request is sent successfully.']);
    }

    public function index()
    {
//        $data=DB::table('wedreservation')->get();
//        return view('specialform')->with('data',$data);
       $data = DB::table('weddingservices')->orderBy('id','desc')->first();
        return view('samroreception',
            ['data'=>$data->halltype],
            ['type' => $data->advancepayment]




        );

    }
}
