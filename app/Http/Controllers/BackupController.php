<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class BackupController extends Controller
{
    public function index()
    {
        return view('admin/backup/adminbackup');
    }

}
