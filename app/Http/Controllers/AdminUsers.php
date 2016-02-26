<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AdminModel;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Laracasts\FlashServiceProvider;
use Illuminate\Support\Facades\Redirect;
use View;

class AdminUsers extends Controller
{
  public function getAdminList()
  {
    return view::make('admin/admin/adminlist',[
      'admins' => AdminModel::where('is_admin', '=', 1)->paginate(5)
    ]);
  }

  public function getForm(){
    return View('admin/admin/adminadd');
  }

  public function getAdded(){
    return View('admin/admin/adminadded');
  }

  public function postadmin(Request $request)
  {
    $this->validate($request, [
      'name' => 'required|max:255',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'mobile' => 'required|numeric',
    ]);

    AdminModel::create([
      'name' => $request->input('name'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'address1' => $request->input('address1'),
      'address2' => $request->input('address2'),
      'address3' => $request->input('address3'),
      'mobile' =>  $request->input('mobile'),
      'is_admin' => 1,
    ]);

    return View('admin/admin/adminadded');
  }
}
