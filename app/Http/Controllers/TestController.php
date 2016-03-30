<?php

namespace App\Http\Controllers;
use App\Models\commentsModel;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;
use Auth;
use View;

class TestController extends Controller
{

  public function index()
  {
    return view('test');
  }

  public function com()
  {
    //return view('blog/leave_a_comment');


    if (Auth::user())
    {
      return view::make('blog/leave_a_comment',[
        'loggeduser' => Auth::user()
      ]);
    }

    else
    {
      return view('blog/LoggingFailed');
    }

  }



  public function rep()
  {
    if (Auth::user())
    {
      return view::make('blog/leave_a_reply',[
        'loggeduser' => Auth::user(),
        'temp' => $_REQUEST['id']
      ]);
    }

    else
    {
      return view('blog/LoggingFailed');
    }

  }

  public function editcomment()
  {
    Session::put('tempeditcomid', $_REQUEST['cid']);

    if (Auth::user())
    {
      return view::make('blog/edit_comment',[
        'loggeduser' => Auth::user(),
        'tempcommentid' => $_REQUEST['cid']
      ]);
    }

    else
    {
      return view('blog/LoggingFailed');
    }

  }


  public function posteditcomment(Request $request)
  {
    $tID = Session::get('tempeditcomid');
    $bd = $request->input('body');

    DB::table('comments')
    ->where('id', $tID)
    ->update(array('body' => $bd));

    return view('blog/SuccessfullyCommented');

  }

  public function blogF(){

    if (Auth::user())
    {

      return view::make('blog/blog-post',[
        'logvishuser' => Auth::user(),
        //'temp' => $_REQUEST['id']
      ]);
    }
    else
    {            // check this logic again.. not sure !!!
      $arrss = array('id'=>0, 'Ben'=>'37', 'Joe'=>"43");
      return view::make('blog/blog-post',[
        'logvishuser' => $arrss,
        //'temp' => $_REQUEST['id']
      ]);
    }
  }


  public function postcom(Request $request)
  {

    $user = Session::get('user_id');
    $post = Session::get('post_id');

    $this->validate($request,[
      'body' => 'required',

    ]);

    commentsModel::create([
      'body' => $request->input('body'),
      'user_id' => $user,
      'post_id' => $post,

    ]);
    return view('blog/SuccessfullyCommented');


  }

  public function postreply(Request $request)
  {

    $user = Session::get('user_id');
    $post = Session::get('post_id');
    $parent = Session::get('parent_id');

    $this->validate($request,[
      'body' => 'required',

    ]);

    commentsModel::create([
      'body' => $request->input('body'),
      'user_id' => $user,
      'post_id' => $post,
      'parent_id' => $parent,

    ]);
    return view('blog/SuccessfullyCommented');


  }

}
