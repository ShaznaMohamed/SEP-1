<?php

namespace App\Http\Controllers;

use App\Models\UserAdmin;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Laracasts\FlashServiceProvider;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Redirect;
use View;
use Session;
use Auth;

use Illuminate\Http\Request;
use App\Models\Dining;
use Illuminate\Support\Facades\Mail;
use DB;
use Illuminate\Support\Facades\Input;

class DiningController extends Controller
{

    public function index()
    {
        return view('dining/dining');

    }

    public function getEvents()
    {
        //return view('dining/dining');
        if(Auth::user())
        {
          return view::make('dining/dining', [
            'loggeduser' => Auth::user(),
          ]);
        }
        else{
          return view('dining/dine');
        }
    }

    public function getDining()
    {
          $dining = Dining::all();

          return view('dining/diningmanage', ['dining' => $dining]);

    }

    public function dinningdel($id){
        Dining::destroy($id);
        return redirect('diningmanage');
    }

    public function postEvents(Request $request)
    {
        $this->validate($request,[

            'first_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'arrival_date' => 'required|unique:dining',
            'arrival_time' => 'required',
            'arrival_adults' => 'required',
            'arrival_children' => 'required',

        ]);

        // $arr_date = $request->input('arrival_date');
        // $date =	DB::table('dining')->where('arrival_date', '=', $arr_date)->get();
        //
         $type = "Dining";
        //
        // if(count($date>0)){
        //
        //   echo "<script> alert('asas'); </script>";
        //
        //   return redirect()
        //       ->route('dining')
        //
        //
        // }
        // else {



        Dining::create([
            'title' => $request->input('title'),
            'first_name' => $request->input('first_name'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'arrival_date' => $request->input('arrival_date'),
            'arrival_time' => $request->input('arrival_time'),
            'arrival_adults' => $request->input('arrival_adults'),
            'arrival_children' => $request->input('arrival_children'),
            'notes' => $request->input('notes'),
            'type' => $type,
        ]);


        Mail::send([], [], function ($message) {
            $message->to(Input::get('email'), Input::get('first_name'))->subject('Thank you for registering with Amalya Reach.')->setbody('Hi,  We will get back to you soon.');
        });


        return redirect()
            ->route('restaurant')
            ->with('info', 'Reservation was succesful, Thank you.');
          }
    // }


}
