<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
//use Input;
use Validator;
use Redirect;
use Request;
use Session;
class event_halluploadController extends Controller {
public function eventuploadImg1() {
/** image1 **/

  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('events/eventupload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'hallsDiningEvents'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal1.'.$extension;
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully');
      return Redirect::to('events/eventupload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('events/eventupload');
    }
  }

}
/** image2 **/

public function eventuploadImg2() {

      // getting all of the post data
  $file = array('image2' => Input::file('image2'));
  // setting up rules
  $rules = array('image2' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('events/eventupload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image2')->isValid()) {
      $destinationPath = 'hallsDiningEvents'; // upload path
      $extension = Input::file('image2')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal2.'.$extension;
      Input::file('image2')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully');
      return Redirect::to('events/eventupload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('events/eventupload');
    }
  }

}






}
