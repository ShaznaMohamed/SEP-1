<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Session;
use Auth;
use View;

class ChatController extends Controller
{

    public function index()
    {
      
      if (Auth::user())
         {
         return view::make('chat/index',[
             'loggeduser' => Auth::user()
          ]);
         }
        else
        {
        return view('chat/nerror');
        }


    }

   
  
}
?>
