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
use Auth;
use Session;


class UserController extends Controller{

  /*
  | Filters Administrators from the databse and lists
  */
  public function getuserAdmin(){
    return view::make('admin/user/adminusers',[
      'user' => UserAdmin::where('is_admin', '=', 0)->paginate(5)
    ]);
  }

  /*
  | Adminitrator User adding form
  */
  public function getForm(){
    return View('admin/user/adminuseradd');
  }

  /*
  | Popup after adding a user
  */
  public function getAdded(){
    return View('admin/user/useradded');
  }

  /*
  | Deleting the user after getting the user id from the table as a parameter
  */
  public function adminuserdel($id){
    UserAdmin::destroy($id);
    return redirect('adminusers');
  }

  /*
  | Gets the user adding request and validtes against a set of parameters and then sends the data to the Database
  | followed by a Confirmation email.
  */
  public function userAdd(Request $request){
    //Validation
    $this->validate($request, [
      'first' => 'required|max:255|alpha',
      'last' => 'required|max:255|alpha',
      'email' => 'required|email|max:255|unique:users',
      'password' => 'required|confirmed|min:6',
      'mobile' => 'required|numeric',
    ]);
    //Creating database record
    UserAdmin::create([
      'first' => $request->input('first'),
      'last' => $request->input('last'),
      'email' => $request->input('email'),
      'password' => bcrypt($request->input('password')),
      'address1' => $request->input('address1'),
      'address2' => $request->input('address2'),
      'address3' => $request->input('address3'),
      'mobile' =>  $request->input('mobile'),
    ]);
    //Confirmation Mail
    Mail::send('emails.verify', [], function ($message) {
      $message->to(Input::get('email'), Input::get('name'))
      ->subject('Thank you for registering with Amalya Reach');
    });
    return View('admin/user/useradded');
  }

  /*
  | Gets the user account where the edit icon was clicked from the id
  | sends user data to the view to populate fields
  */
  public function getuserEdit($id){
    return view::make('admin\user\adminuseredit',[
      'user' => UserAdmin::find($id)
    ]);
  }

  /*
  | Validating edits against the rules
  | sends edited user data to the view to populate fields
  */
  public function userEdit(Request $request){
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

    $useredit = UserAdmin::find($editid);

    $input = $request->all();

    $useredit->fill($input)->save();

    Session::flash('flash_message', 'Edited');

    return redirect()->back();
  }

  /*
  | User Profile Edits
  */

  //Edit email form

  public function userEmailChangeForm(){
    return View('profile/profileemail');
  }

  //Edit email
  public function userEmailChange(Request $request){

    $this->validate($request, [
      'current_email' => 'required|max:255|exists:users,email|email',
      'email' => 'required|confirmed|max:255|unique:users|email',
    ]);

    Mail::send('emails.verify', [], function ($message) {
        $message->to(Input::get('email'), Input::get('name'))
            ->subject('Your email has been changed');
    });

    $user = UserAdmin::find($request->input('id'));
    $user->email = $request->input('email');
    $user->save();
    return redirect('userEmailChange');

  }

  //Edit password

  public function userPasswordChangeForm(){
    return View('profile/profilepassword');
  }

  public function userPasswordChange(Request $request){

    $this->validate($request, [
      'current_password' => 'required',
      'password' => 'required|confirmed|min:6',
    ]);   

    Mail::send('emails.verify', [], function ($message) {
        $message->to(Auth::user()->email, Auth::user()->name)
            ->subject('Your password has been changed');
    });

    $user = UserAdmin::find($request->input('id'));
    $user->password = bcrypt($request->input('password'));
    $user->save();
    return redirect()->back();
  }

  //Edit profile

  public function userProfileChangeForm($id){
    $user = UserAdmin::find($id);
    return View("profile/profileedit")->with("user", $user);
  }



}
