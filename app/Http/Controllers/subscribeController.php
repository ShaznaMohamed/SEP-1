<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class subscribeController extends Controller
{
    public function getSubscribe()
    {
        return view('newsletter/newslettersignup');
    }

    public function postSubscribe(Request $request)
    {
        $this->validate($request,[
            'first_name' => 'required',
            'confirm_email' => 'required',
            'email' => 'required',
        ]);

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
            return redirect()
            ->route('home')
            ->with('info', 'You are now subscribed to our newsletter');



    }

}
