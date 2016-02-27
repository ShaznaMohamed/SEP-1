@extends('layouts.master')

@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Hello {{ $loggeduser->name }}</span>
          <span class="tagline">Welcome to the world of Amalya</span>
        </div>
      </div>
    </header>
    <main>
      <div class="centre">
        <section id="menu">
          <div class="menu">
            <h4>Your Personal Details</h4>
            <ul>
            </ul>
          </div>
      </section>
    </div>
  </main>
@endsection
