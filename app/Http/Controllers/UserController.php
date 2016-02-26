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
use Illuminate\Support\Facades\Redirect;
use View;

class UserController extends Controller
{
  public function getuserAdmin()
  {
    return view::make('admin/user/adminusers',[
      'user' => UserAdmin::where('is_admin', '=', 0)->paginate(5)
    ]);
  }

  public function getForm(){
    return View('admin/user/adminuseradd');
  }

  public function getAdded(){
    return View('admin/user/useradded');
  }

  public function userAdd(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'mobile' => 'required|numeric',
    ]);

    UserAdmin::create([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'address1' => $request->input('address1'),
      'address2' => $request->input('address2'),
      'address3' => $request->input('address3'),
      'mobile' =>  $request->input('mobile'),
    ]);

    Mail::send('emails.verify', [], function ($message) {
      $message->to(Input::get('email'), Input::get('name'))
      ->subject('Thank you for registering with Amalya Reach');
    });
    return View('admin/user/useradded');
  }

}
