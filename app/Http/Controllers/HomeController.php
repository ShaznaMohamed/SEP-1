<?php


/*
*
*
This controller is responsible for the return of the index view of the system.
*/

namespace App\Http\Controllers;

class HomeController extends Controller
{

    public function index()
    {
        return view('index');
    }
}
