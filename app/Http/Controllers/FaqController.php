<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Faq;
use App\Models\UserAdmin;
use View;
use Session;

class FaqController extends Controller
{
  /*
  | Administrator view FAQs
  */
  public function getFaqAdmin()
  {
    return view::make('admin/faq/adminfaq',[
      'faq' => faq::paginate(5)
    ]);
  }
  /*
  | FAQ page
  */
  public function getFaq()
  {
    $faqdata = faq::all();
    return View("faq/faqs")->with("faqdata", $faqdata);
  }
  /*
  | FAQ Add form
  */
  public function getForm(){
    return View('admin/faq/faqadd');
  }
  /*
  | FAQ added page, after adding
  */
  public function getAdded(){
    return View('admin/faq/faqadded');
  }
  /*
  | FAQ Add function
  */
  public function postFaq(Request $request)
  {
    $this->validate($request, [
      'question' => 'required|min:20',
      'answer' => 'required|min:20',
    ]);

    faq::create([
      'question' => $request->input('question'),
      'answer' => $request->input('answer'),
    ]);
    return View('admin/faq/faqadded');
  }
  /*
  | FAQ Delete, Administrator
  */
  public function faqdel($id){
    Faq::destroy($id);
    return redirect('adminfaq');
  }

}
