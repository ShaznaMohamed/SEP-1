<?php

namespace App\Http\Controllers;

class SearchController extends Controller
{

    public function index()
    {
        return view('index');

    }

    public function test()
    {
      $ab =  "asdadsadsad";
      return $ab; 
    }

}
