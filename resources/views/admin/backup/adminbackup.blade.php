@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Application Backups</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
              <a href="adminbackupnow" class="button" id="backpop1"><span data-hover="Backup Now">Backup Now</span></a>

              <a href="adminbackuplist" class="button" id="backpop2"><span data-hover="View Backups">View Backups</span></a>

              <a href="adminbackupclean" class="button" id="backpop3"><span data-hover="Clean Backups">Clean Backups</span></a>

            </div>
        </div>
    </main>
@endsection
