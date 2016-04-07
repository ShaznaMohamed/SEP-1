<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\room;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DB;

class roomController extends Controller
{

    public function getdatafortable()
    {
        return view('room/deluxe');
    }

    public function posttest()
    {
        return view('rommconfirmsub');

    }

    public function insertdataa(Request $request)
     {
         $button = Input::get('subadminroom');

         if ($button == 'Update') {

             $rules = array(
                'roomtype' => 'required',
                'price' => 'required',


        );
             $validator = Validator::make(Input::all(), $rules);
             if ($validator->fails()) {

                 return Redirect::to('adminroom')->withErrors($validator)->withInput()->with('message21', 'ROOM FEATURE UPDATION IS FAILED');

             } else {


        $wifi = Input::has('wifi') ? true : false;
        $cabletv = Input::has('cabletv') ? true : false;
        $airconditioned = Input::has('airconditioned') ? true : false;
        $telephone = Input::has('telephone') ? true : false;
        $diningtable = Input::has('diningtable') ? true : false;

        $selectedroom = Input::get('roomtype');
        $price = $_POST['price'];

        DB::table('room')
            ->where('roomtype',$selectedroom )
            ->update(['wifi' => $wifi,
                'cabletv' => $cabletv,
                'airconditioned' => $airconditioned,
                'telephone' => $telephone,
                'diningtable' => $diningtable,
                'price' => $price


            ]);


                 return Redirect::to('adminroom')->withErrors($validator)->withInput()->with('message22', 'ROOM FEATURES UPDATED SUCCESSFULLY');
             }
         }

   }

    public function addnewroom(Request $request)
    {
        $selectedroom = Input::get('roomtype');
        $button = Input::get('ub');
        $noofrooms = 0;

        if ($button == 'Add') {

            $rules = array(
                'roomtype' => 'required',

            );
            $validator = Validator::make(Input::all(), $rules);
            if ($validator->fails()) {

                return Redirect::to('adminroom')->withErrors($validator)->withInput()->with('message30', 'NEW ROOM ADDINGIS FAILED');

            } else {

                $tabledata = DB::table('room')
                    ->where('roomtype', $selectedroom)
                    ->get();

                foreach ($tabledata as $foundd) {
                    $noofrooms = $foundd->norooms;
                }

                $noofrooms = $noofrooms + 1;

                DB::table('room')
                    ->where('roomtype', $selectedroom)
                    ->update(['norooms' => $noofrooms]);


                return Redirect::to('adminroom')->withErrors($validator)->withInput()->with('message31', 'NEW ROOM IS ADDED SUCCESSFULLY');
            }


        }
    }


}
