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

class ContactController extends Controller
{
    public function index()
    {
      return view::make('admin/contact/admincontact',[
        'contact' => contact::paginate(5)
      ]);
    }

    public function indexSent()
    {
      return view::make('admin/contact/admincontactsent',[
        'contactsent' => contactsent::paginate(5)
      ]);
    }

    public function getContact()
    {
      return view('contactus/contact');
    }

    public function adminSendForm()
    {
      return view('admin/contact/AdminContactReply');
    }

    public function adminSendFormUser($id)
    {
      $msg = Contact::find($id);
      return View("admin/contact/admincontactusreplyuser")->with("msg", $msg);
    }

    public function adminSent()
    {
      return view('admin/contact/AdminContactReplied');
    }

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
            ->route('admincontactusreplied');
    }

}
