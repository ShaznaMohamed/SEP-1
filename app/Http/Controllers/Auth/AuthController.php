<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;
use Laracasts\FlashServiceProvider;
use Illuminate\Support\Facades\Redirect;


class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;    /**
     * Where to redirect users after login / registration / logout.
     *
     * @var string
     */
    protected $redirectTo = '';
    protected $redirectAfterLogout = '';

    /**
     * Create a new authentication controller instance.
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);

    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255|alpha',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
            'address1' => 'required',
            'address2' => 'required',
            'address3' => 'required',
            'mobile' => 'required|numeric',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */

    protected function create(array $data)
    {
       User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'address1' => $data['address1'],
            'address2' => $data['address2'],
            'address3' => $data['address3'],
            'mobile' => $data['mobile'],
        ]);

        Mail::send('emails.verify', [], function ($message) {
            $message->to(Input::get('email'), Input::get('name'))
                ->subject('Thank you for registering with Amalya Reach');
        });

       return User::create();

    }


}
