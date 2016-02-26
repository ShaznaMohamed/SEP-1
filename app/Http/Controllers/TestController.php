<?php

namespace App\Http\Controllers;
use App\Models\commentsModel;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Session;

class TestController extends Controller
{

    public function index()
    {
        return view('test');

    }

    public function com()
    {
        return view('blog/leave_a_comment');

    }

    public function rep()
    {
        return view('blog/leave_a_reply');

    }

    public function blogF()
    {
        return View('blog/blog-post');

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
            return redirect()
            ->route('blog-post')
            ->with('info', 'You commented !');





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
            return redirect()
            ->route('blog-post')
            ->with('info', 'You replied!');



    }

}
