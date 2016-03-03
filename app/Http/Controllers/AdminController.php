<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/admindashboard');
    }

    public function menu()
    {
        return view('admin/menudashboard');
    }

    public function wedding()
    {
        return view('admin/admin/weddingdashboard');
    }
    public function room()
    {
        return view('admin/admin/roomdashboard');
    }
}
