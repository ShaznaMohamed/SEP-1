<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Session;
use Auth;
use View;
use DB;

class ReportController extends Controller
{

    public function index()
    {
      
     
        return view('admin-profits/report');
        
  


    }
    
    
    
    public function indexes()
    {
      
        $RSTYPE ="";
        $reserves = DB::table('roomreservation')->get();
        return view('admin-profits/index', ['reserves' => $reserves] , ['RSTYPE' => $RSTYPE]);
        
    }
    
    
        public function Postindexes(Request $request)
    {
     
            // get input values from form elements
            $From =  $request->input('txtFromDate');
            $To =  $request->input('txtToDate');
            $ReservationType = $request->input('reservationType');
    
            
            //Convert the input values to Date variables
            $To = date($To);
            $From = date($From);
            
            //Convert the Date format to match the database
            $newFrom = date("Y-m-d", strtotime($From));
            $newTo = date("Y-m-d", strtotime($To));
            
            if($ReservationType == "roomreservation")
                $RSTYPE = "Room";
            else
                $RSTYPE = "Wedding";
            
            $reservations = DB::table($ReservationType)->where([
                                ['arrival','>=', $newFrom],
                                ['arrival','<=', $newTo]
                                ])->get();
       
           

            return view('admin-profits/index', ['reserves' => $reservations] , ['RSTYPE' => $RSTYPE ]);


    }

   
  
}
?>
