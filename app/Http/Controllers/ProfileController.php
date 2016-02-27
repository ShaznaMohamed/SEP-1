<?php namespace App\Http\Controllers;

use Auth;
use View;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */

  public function __construct()
  {
      $this->middleware('auth');
  }

  public function index()
  {
        if (Auth::user())
        {
          return view::make('profile/profile',[
            'loggeduser' => Auth::user()
          ]);
        }
  }

  public function show($id)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
}
