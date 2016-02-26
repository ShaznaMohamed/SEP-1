<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use View;

class ContactController extends Controller
{
    public function index()
    {
      return view::make('admin/contact/admincontact',[
        'contact' => contact::paginate(5)
      ]);
    }

    public function getContact()
    {
      return view('contactus/contact');
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
}
