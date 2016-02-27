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
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Redirect;
use View;
use Session;


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

  public function adminuserdel($id){
      UserAdmin::destroy($id);
      return redirect('adminusers');
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

  public function getuserEdit($id)
  {
    $user = UserAdmin::find($id);
    return View("admin/user/adminuseredit")->with("user", $user);
  }

  public function userEdit(Request $request)
  {

    $editid = $request->input('id');

    $useredit = UserAdmin::find($editid);

    $input = $request->all();

    $useredit->fill($input)->save();

    Session::flash('flash_message', 'Edited');

    return redirect()->back();
  }


}
