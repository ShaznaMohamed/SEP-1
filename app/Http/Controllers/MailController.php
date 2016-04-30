<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\ContactSent;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Laracasts\FlashServiceProvider;
use Illuminate\Support\Facades\Redirect;
use View;

class MailController extends Controller
{
  public function index()
  {
    return view::make('mail/inbox',[
      'contact' => contact::paginate(5)
    ]);
  }

  //View Administrator sent messages

  public function indexSent()
  {
    return view::make('mail/sent',[
      'contactsent' => contactsent::paginate(5)
    ]);
  }

  //User contact us page

  public function getContact()
  {
    return view('contactus/contact');
  }

  //Message sending form

  public function adminSendForm()
  {
    return view('mail/reply');
  }

  //Message reply form

  public function adminSendFormUser($id)
  {
    $msg = Contact::find($id);
    return View("mail/replyuser")->with("msg", $msg);
  }

  //Sent user pop up

  public function adminSent()
  {
    return view('mail/replied');
  }

  //User contact us messages save to Database

  public function postContact(Request $request)
  {
    Contact::create([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'mobile' => $request->input('mobile'),
      'message' => $request->input('message'),
    ]);
    return redirect()
    ->route('home');
  }

  //Email sending function

  public function adminSend(Request $request)
  {
    Mail::send([], [],function($message) use ($request)
    {
      $message->to($request->input('email'), $request->input('name'))
      ->subject($request->input('subject'))->setBody($request->input('message'));
    });

    ContactSent::create([
      'toemail' => $request->input('email'),
      'name' => $request->input('name'),
      'subject' => $request->input('subject'),
      'message' => $request->input('message'),
    ]);

    return redirect()
    ->route('replied');
  }

}
