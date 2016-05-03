<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserAdmin;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Laracasts\FlashServiceProvider;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Redirect;
use View;
use Session;

use App\Models\HallDetails;


class HallEditController extends Controller
{
  public function getDetails()
  {

    $halldetails = HallDetails::all();
    return view("events/hallDetails")->with("halldata", $halldetails);
  }


  public function getHallDetails()
  {
        $detail = HallDetails::all();

        return view('events/halledit', ['detail' => $detail]);

  }

// for hallDetails update view
  public function hallDetailsEdit($id)
  {
    $user = HallDetails::find($id);

    return view('events/hallDetailUpdate')->with("user",$user);

  }

  public function hEdit(Request $request)
  {

    $editid = $request->input('id');

    $useredit = HallDetails::find($editid);

    $input = $request->all();

    $useredit->fill($input)->save();

    Session::flash('flash_message', 'Edited');

    return redirect('hallu');
  }

  public function detailAdd(Request $request)
  {

    HallDetails::create([

      'topic' => $request->input('topic'),
      'value' => $request->input('value'),
    ]);

    return redirect('hallu');
  }

  public function getsAdd()
  {
    return View('events/hallDetailAdd');
  }

  public function detailDelete($id){
      HallDetails::destroy($id);
      return redirect('halledit');
  }

}
