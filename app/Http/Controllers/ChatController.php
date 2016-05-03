<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Session;
use Auth;
use View;


/*
*
*
This controller is responsible for delivery of chat pages when the user is chatting with the
administrator. It also checks whether the user is logged in or not.
*/

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
