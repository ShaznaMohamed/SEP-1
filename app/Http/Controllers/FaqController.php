<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\UserAdmin;
use View;
use Session;

class FaqController extends Controller
{
    public function getFaqAdmin()
    {
      return view::make('admin/faq/adminfaq',[
        'faq' => faq::paginate(5)
      ]);
    }

    public function getFaq()
    {
      $faqdata = faq::all();
      return View("faq/faqs")->with("faqdata", $faqdata);
    }

    public function getForm(){
      return View('admin/faq/faqadd');
    }

    public function getAdded(){
      return View('admin/faq/faqadded');
    }

    public function postFaq(Request $request)
    {
        faq::create([
            'question' => $request->input('question'),
            'answer' => $request->input('answer'),
        ]);
        return View('admin/faq/faqadded');
    }

    public function savefaqedit(Request $request)
    {

      $editid = $request->input('id');

      $useredit = faq::find($editid);

      $input = $request->all();

      $useredit->fill($input)->save();

      Session::flash('flash_message', 'Edited');

      return redirect()->back();
    }


    public function faqdel($id){
        Faq::destroy($id);
        return redirect('adminfaq');
    }

}
