<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HallController extends Controller
{
    /**
     * Create a new controller instance.
     *
     *
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('events/hallDetails');
    }
}
