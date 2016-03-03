<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Session;
use Auth;
use View;
use DB;

class subscribeController extends Controller
{
    
    /**
    /***--------------------------------------------------------------------------------------------
    /****-------------------------------------------------------------------------------------------
    This function is used in redirecting from home page footer section to either newsletter signup page when not logged in or if logged in you get         subscribed
    ------------------------------------------------------------------------------------------------
    */
    public function getSubscribe(Request $request)
    {
        
        if (Auth::user()){
        
            
            Mail::send([], [], function ($message)
        {
          $message->to(Auth::user()->email, "visal")
                      ->subject("Amalya Reach newsletter")
                      ->setBody("<html><h1>Amalya Reach Homagama</h1> Dear Sir, <br> You are now subscibed to our newsletter !</html>");
        });
    
            return view('newsletter/emailsuccess');
            
        }
        
        else {
        
        $checkmail = $request->input('email');

        if ($checkmail == "")
        {

          echo "<script>alert('Email Address is required');</script>";
          return view('index');
        }

        elseif((!filter_var($checkmail, FILTER_VALIDATE_EMAIL)))
        {

          echo "<script>alert('Please Enter an Vaild Email Address');</script>";
          return view('index');
        }
        else{

        return view('newsletter/newslettersignup');

      }
        }
    }
    
    
    
    /*------------------------------------------------------------------------------
    /**----------------------------------------------------------------------------
    This function is used when the subscribe to the newsletter is clicked
    /-------------------------------------------------------------------------------
    */

    public function postSubscribe(Request $request)
    {
        $emailadd = $request->input('confirm_email');
        Session::put('ea', $emailadd);
        
        $this->validate($request,[
            'first_name' => 'required',
            'confirm_email' => 'required',
            'email' => 'required|unique:subscriptions',
        ]);

        if($request->input('email') == $request->input('confirm_email'))
        {
        Subscription::create([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'province' => $request->input('province'),
            'zip' => $request->input('zip'),
            'country' => $request->input('country'),
            'email' => $request->input('email'),
            'confirm_email' => $request->input('confirm_email'),

        ]);
        Mail::send([], [], function ($message)
        {
          $message->to(Session::get('ea'), "visal")
                      ->subject("Amalya Reach newsletter")
                      ->setBody("<html><h1>Amalya Reach Homagama</h1> Dear Sir, <br> You are now subscibed to our newsletter !</html>");
        });


           return view('newsletter/emailsuccess');

          }

          else {
            echo "<script>alert('Email and Confirm Email Address mustt match');</script>";
            return view('newsletter/returnback');

          }

    }
    
    
    
    /*------------------------------------------------------------------------------
    /**----------------------------------------------------------------------------
    This function is used by admin to send newsletter to all the subscribers
    /-------------------------------------------------------------------------------
    */
    
    
    
    public function postSendNewsletter(Request $request)
    {
        
        $newsletterEmail = $request->input('body');
        Session::put('sendMeassage', $newsletterEmail);
        
        $sql = DB::table('subscriptions')->get();
        
        foreach($sql as $sr){
        Session::put('sr', $sr->email);    
        
        try{
        Mail::send([], [], function ($message)
        {
          $message->to(Session::get('sr'), "visal")
                      ->subject("Monthly Newsletter From Amaya")
                      ->setBody(Session::get('sendMeassage'));
        });
            
        }
            catch(\Exception $e)
            {
                echo("Exception Handled By " . $e->getMessage());
            }

        }
    }
    
    public function getSendNewsletter()
    {
        return view('NewsletterManagement/adminView');
    }

}
