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

use App\Models\breakfast;
use App\Models\lunch;
use App\Models\dinner;
use App\Models\nonalcoholic;
use App\Models\coffee;
use App\Models\alcoholic;


class MenuEditController extends Controller
{
  public function getBreakfast()
  {
        $breakfast = breakfast::all();

        return view('restaurant/menueditb', ['breakfast' => $breakfast]);

  }

  public function getLunch()
  {
        $lunch = lunch::all();

        return view('restaurant/menueditl', ['lunch' => $lunch]);
  }

  public function getDinner()
  {
        $dinner = dinner::all();

        return view('restaurant/menueditd', ['dinner' => $dinner]);
  }

  public function getNonAlcoholic()
  {
        $nonalcoholic = nonalcoholic::all();

        return view('restaurant/menueditn', ['nonalcoholic' => $nonalcoholic]);
  }

  public function getCoffee()
  {
        $coffee = coffee::all();

        return view('restaurant/menueditc', ['coffee' => $coffee]);
  }

  public function getAlcoholic()
  {
        $alcoholic = alcoholic::all();

        return view('restaurant/menuedita', ['alcoholic' => $alcoholic]);
  }

// for breakfast
  public function breakfastEdit($id)
  {
    $user = Breakfast::find($id);

    return view('restaurant/menuupdate')->with("user",$user);

  }

  public function bEdit(Request $request)
  {

    $editid = $request->input('id');

    $useredit = Breakfast::find($editid);

    $input = $request->all();

    $useredit->fill($input)->save();

    Session::flash('flash_message', 'Edited');

    return redirect('menueditb');
  }

  public function breakfastAdd(Request $request)
  {

    Breakfast::create([

      'type' => $request->input('type'),
      'details' => $request->input('details'),
      'price' => $request->input('price'),
    ]);

    return redirect('menueditb');
  }

  public function getAdd()
  {
    return View('restaurant/menuadd');
  }

  public function breakfastdel($id){
      Breakfast::destroy($id);
      return redirect('menueditb');
  }

  // for lunch
    public function lunchEdit($id)
    {
      $user = Lunch::find($id);

      return view('restaurant/menuupdatelunch')->with("user",$user);

    }

    public function lEdit(Request $request)
    {

      $editid = $request->input('id');

      $useredit = Lunch::find($editid);

      $input = $request->all();

      $useredit->fill($input)->save();

      Session::flash('flash_message', 'Edited');

      return redirect('menueditl');
    }

    public function lunchAdd(Request $request)
    {

      Lunch::create([

        'type' => $request->input('type'),
        'details' => $request->input('details'),
        'price' => $request->input('price'),
      ]);

      return redirect('menueditl');
    }

    public function getlunchAdd()
    {
      return View('restaurant/menuaddlunch');
    }

    public function lunchdel($id){
        Lunch::destroy($id);
        return redirect('menueditl');
    }


    // for dinner
      public function dinnerEdit($id)
      {
        $user = Dinner::find($id);

        return view('restaurant/menuupdatedinner')->with("user",$user);

      }

      public function dEdit(Request $request)
      {

        $editid = $request->input('id');

        $useredit = Dinner::find($editid);

        $input = $request->all();

        $useredit->fill($input)->save();

        Session::flash('flash_message', 'Edited');

        return redirect('menueditd');
      }

      public function dinnerAdd(Request $request)
      {

        Dinner::create([

          'type' => $request->input('type'),
          'details' => $request->input('details'),
          'price' => $request->input('price'),
        ]);

        return redirect('menueditd');
      }

      public function getdinnerAdd()
      {
        return View('restaurant/menuadddinner');
      }

      public function dinnerdel($id){
          Dinner::destroy($id);
          return redirect('menueditd');
      }


      // for nonalcoholic
        public function nonalcoholicEdit($id)
        {
          $user = Nonalcoholic::find($id);

          return view('restaurant/menuupdatenonalcoholic')->with("user",$user);

        }

        public function nEdit(Request $request)
        {

          $editid = $request->input('id');

          $useredit = Nonalcoholic::find($editid);

          $input = $request->all();

          $useredit->fill($input)->save();

          Session::flash('flash_message', 'Edited');

          return redirect('menueditn');
        }

        public function nonalcoholicAdd(Request $request)
        {

          Nonalcoholic::create([

            'type' => $request->input('type'),
            'details' => $request->input('details'),
            'price' => $request->input('price'),
          ]);

          return redirect('menueditn');
        }

        public function getnonalcoholicAdd()
        {
          return View('restaurant/menuaddnonalcoholic');
        }

        public function nonalcoholicdel($id){
            Nonalcoholic::destroy($id);
            return redirect('menueditn');
        }

      // for coffee
        public function coffeeEdit($id)
        {
          $user = Coffee::find($id);

          return view('restaurant/menuupdatecoffee')->with("user",$user);

        }

        public function cEdit(Request $request)
        {

          $editid = $request->input('id');

          $useredit = Coffee::find($editid);

          $input = $request->all();

          $useredit->fill($input)->save();

          Session::flash('flash_message', 'Edited');

          return redirect('menueditc');
        }

        public function coffeeAdd(Request $request)
        {

          Coffee::create([

            'type' => $request->input('type'),
            'details' => $request->input('details'),
            'price' => $request->input('price'),
          ]);

          return redirect('menueditc');
        }

        public function getcoffeeAdd()
        {
          return View('restaurant/menuaddcoffee');
        }

        public function coffeedel($id){
            Coffee::destroy($id);
            return redirect('menueditc');
        }

        // for alcoholic
          public function alcoholicEdit($id)
          {
            $user = Alcoholic::find($id);

            return view('restaurant/menuupdatealcoholic')->with("user",$user);

          }

          public function aEdit(Request $request)
          {

            $editid = $request->input('id');

            $useredit = Alcoholic::find($editid);

            $input = $request->all();

            $useredit->fill($input)->save();

            Session::flash('flash_message', 'Edited');

            return redirect('menuedita');
          }

          public function alcoholicAdd(Request $request)
          {

            Alcoholic::create([

              'type' => $request->input('type'),
              'details' => $request->input('details'),
              'price' => $request->input('price'),
            ]);

            return redirect('menuedita');
          }

          public function getalcoholicAdd()
          {
            return View('restaurant/menuaddalcoholic');
          }

          public function alcoholicdel($id){
              Alcoholic::destroy($id);
              return redirect('menuedita');
          }
}
