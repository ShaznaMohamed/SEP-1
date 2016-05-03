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
use DB;
use App\Models\breakfast;
use App\Models\lunch;
use App\Models\dinner;
use App\Models\nonalcoholic;
use App\Models\coffee;
use App\Models\alcoholic;
use App\Models\Roomreservation;


class HistoryController extends Controller
{
  public function getRooms($id)
  {
        $rooms = DB::table('roomreservation')->where('id',$id)->get();
        return view('profile/reservationhistory', ['rooms' => $rooms]);
  }
}
