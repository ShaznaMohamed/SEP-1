<?php namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
//use Input;
use Validator;
use Redirect;
use Request;
use Session;
class galleryController extends Controller {
public function uploadImg1() {
/** image1 **/
    
  // getting all of the post data
  $file = array('image' => Input::file('image'));
  // setting up rules
  $rules = array('image' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal1.'.$extension;
      Input::file('image')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    
}
/** image2 **/

public function uploadImg2() {    
    
      // getting all of the post data
  $file = array('image2' => Input::file('image2'));
  // setting up rules
  $rules = array('image2' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image2')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image2')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal2.'.$extension;
      Input::file('image2')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    
}
/** image 3 **/
 
public function uploadImg3() {    
    
      // getting all of the post data
  $file = array('image3' => Input::file('image3'));
  // setting up rules
  $rules = array('image3' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image3')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image3')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal3.'.$extension;
      Input::file('image3')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    
}
/** image 4 **/

public function uploadImg4() {    
      // getting all of the post data
  $file = array('image4' => Input::file('image4'));
  // setting up rules
  $rules = array('image4' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image4')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image4')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal4.'.$extension;
      Input::file('image4')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }
    
}
/** image5 **/
 
public function uploadImg5() {    
      // getting all of the post data
  $file = array('image5' => Input::file('image5'));
  // setting up rules
  $rules = array('image5' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image5')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image5')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal5.'.$extension;
      Input::file('image5')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }

}

/** image6**/
 
public function uploadImg6() {    
      // getting all of the post data
  $file = array('image6' => Input::file('image6'));
  // setting up rules
  $rules = array('image6' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image6')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image6')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal6.'.$extension;
      Input::file('image6')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }

}
    
/** image5 **/
 
public function uploadImg7() {    
      // getting all of the post data
  $file = array('image7' => Input::file('image7'));
  // setting up rules
  $rules = array('image7' => 'required|mimes:jpeg,png',); //mimes:jpeg,bmp,png and for max size max:10000
  // doing the validation, passing post data, rules and the messages
  $validator = Validator::make($file, $rules);
  if ($validator->fails()) {
    // send back to the page with the input data and errors
    return Redirect::to('upload')->withInput()->withErrors($validator);
  }
  else {
    // checking file is valid.
    if (Input::file('image7')->isValid()) {
      $destinationPath = 'uploads'; // upload path
      $extension = Input::file('image7')->getClientOriginalExtension(); // getting image extension
      //$fileName = rand(11111,99999).'.'.$extension; // renameing image vish commented replacing following
      $fileName = 'gal7.'.$extension;
      Input::file('image7')->move($destinationPath, $fileName); // uploading file to given path
      // sending back with message
      Session::flash('success', 'Upload successfully'); 
      return Redirect::to('upload');
    }
    else {
      // sending back with error message.
      Session::flash('error', 'uploaded file is not valid');
      return Redirect::to('upload');
    }
  }

}
    
    
    
    
}