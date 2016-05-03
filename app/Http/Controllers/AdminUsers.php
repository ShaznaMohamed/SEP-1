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

/*
*
*
This controller is responsible for the management Administrators in the system.
Administrator information manipulation is done through add, edit and delete.
*/
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
    //Validation
    $this->validate($request, [
      'first' => 'required|max:255|alpha',
      'last' => 'required|max:255|alpha',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'mobile' => 'required|numeric',
    ]);
    //Creating database record
    AdminModel::create([
      'first' => $request->input('first'),
      'last' => $request->input('last'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'address1' => $request->input('address1'),
      'address2' => $request->input('address2'),
      'address3' => $request->input('address3'),
      'mobile' =>  $request->input('mobile'),
      'is_admin' => 1,
    ]);
    //Confirmation Mail
    Mail::send('emails.verify', [], function ($message) {
      $message->to(Input::get('email'), Input::get('name'))
      ->subject('You are now an Administrator');
    });
    return redirect('adminadded');
  }

  public function admindel($id){
    AdminModel::destroy($id);
    return redirect('adminlist');
  }

  public function getAdminEdit($id){
    return view::make('admin\admin\adminedit',[
      'admin' => AdminModel::find($id)
    ]);
  }

  /*
  | Validating edits against the rules
  | sends edited user data to the view to populate fields
  */
  public function adminEdit(Request $request){
    //Validation
    $this->validate($request, [
      'first' => 'required|max:255|alpha',
      'last' => 'required|max:255|alpha',
      'address1' => 'required',
      'address2' => 'required',
      'address3' => 'required',
      'mobile' => 'required|numeric',
    ]);
    //Saving edits
    $editid = $request->input('id');

    $useredit = AdminModel::find($editid);

    $input = $request->all();

    $useredit->fill($input)->save();

    return redirect()->back();
  }
}
