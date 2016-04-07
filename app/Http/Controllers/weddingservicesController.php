<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;
use App\Models\weddingservices;
use Illuminate\Redis\Database;

use DB;

class weddingservicesController extends Controller
{
  public function getdataa()
  {
    return view('/admin/wedding/adminweddingpage');
  }

  public function getdatafortable()
  {
    return view('/wedding/samroreception');
  }

  public function update(Request $request)
  {
    $button = Input::get('updtebtn');

    if ($button == 'Update') {

      $rules = array(
      'halltype' => 'required',
      'advancepayment' => 'required|numeric',
      'minimumpax' => 'required|numeric',
      'additionalhour' => 'required|numeric',
      'fullpayment' => 'required|numeric',
      'corkage' => 'required|numeric',
      'beerlocal' => 'required|numeric',
      'icedcoffee' => 'required|numeric',
      'cutlery' => 'required|numeric',


  );
      $validator = Validator::make(Input::all(), $rules);
      if ($validator->fails()) {

        return Redirect::to('adminweddingpage')->withErrors($validator)->withInput()->with('message19', 'WEDDING FACILITIES UPDATION FAILED');

      } else {

  $selectedhall = $_POST['halltype'];
  $advance = $_POST['advancepayment'];
  $pax = $_POST['minimumpax'];
  $addition = $_POST['additionalhour'];
  $fullpay = $_POST['fullpayment'];
  $corkage = $_POST['corkage'];
  $beer = $_POST['beerlocal'];
  $iced = $_POST['icedcoffee'];
  $cutlery = $_POST['cutlery'];

  DB::table('weddingservices')
  ->where('halltype',$selectedhall )
  ->update(['advancepayment' => $advance,
  'minimumpax' => $pax,
  'additionalhour' => $addition,
  'fullpayment' => $fullpay,
  'corkage' => $corkage,
  'beerlocal' => $beer,
  'icedcoffee' => $iced,
  'cutlery' => $cutlery,

]);

        return Redirect::to('adminweddingpage')->withErrors($validator)->withInput()->with('message20', 'WEDDING HALL FEATURES UPDATED SUCCESSFULLY');
      }
    }

}

//public function insertdata(Request $request)
//{
//  $this->validate($request, [
//    'halltype' => 'required',
//    'advancepayment' => 'required',
//    'minimumpax' => 'required',
//    'additionalhour' => 'required',
//    'fullpayment' => 'required',
//    'corkage' => 'required',
//    'beerlocal' => 'required',
//    'icedcoffee' => 'required',
//    'cutlery' => 'required',
//
//  ]
//);
//
//
//weddingservices::Create([
//  'halltype' => $request->input('halltype'),
//  'advancepayment' => $request->input('advancepayment'),
//  'minimumpax' => $request->input('minimumpax'),
//  'additionalhour' => $request->input('additionalhour'),
//  'fullpayment' => $request->input('fullpayment'),
//  'corkage' => $request->input('corkage'),
//  'beerlocal' => $request->input('beerlocal'),
//  'icedcoffee' => $request->input('icedcoffee'),
//  'cutlery' => $request->input('cutlery'),
//
//]);
//
//
//return redirect('adminweddingpage');
//
//
//
//
//// return view('room', [' Your booking request is sent successfully.']);
//}

public function index()
{
  //        $data=DB::table('wedreservation')->get();
  //        return view('specialform')->with('data',$data);
  $data = DB::table('weddingservices')->orderBy('id','desc')->first();
  return view('/wedding/samroreception',
  ['data'=>$data->halltype],
  ['type' => $data->advancepayment]


);

}
}
