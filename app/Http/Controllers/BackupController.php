<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Artisan;

class BackupController extends Controller
{
    public function index()
    {
        return view('admin/backup/adminbackup');
    }

    public function BackupNow()
    {
      Artisan::call('backup:run');
      $output=(Artisan::output());
      return View("admin/backup/backedup")->with("output", $output);
    }

}
