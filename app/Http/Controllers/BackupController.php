<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use Artisan;


/*
*
*
Backup Controller manages the taking of backups in the system.
There are two types of backups as Application backup and Database backup.
Also the controller schedules backups using cron jobs in the server.
*/

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

    public function BackupList()
    {
      Artisan::call('backup:list');
      $output=(Artisan::output());

      return View("admin/backup/backedup")->with("output", $output);
    }

    public function BackupClean()
    {
      Artisan::call('backup:clean');
      $output=(Artisan::output());

      return View("admin/backup/backedup")->with("output", $output);
    }

}
