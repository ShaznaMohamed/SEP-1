<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HallController extends Controller
{

  /*
  *
  *
  This controllers returns a view of the hall details page.
  */
    public function index()
    {
        return view('events/hallDetails');
    }
}
