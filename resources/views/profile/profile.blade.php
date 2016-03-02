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
        <div id="contact">
          </br>
          <h2>Your personal details</h2>

          <div align="center"> <img src={{ Auth::user()->gravatar }} width="300" height="300" /> </div>

            <table>
            <tr>
              <td>First name</td>
              <td>{{ $loggeduser->first }}</td>
            </tr>
            <tr>
              <td>Last name</td>
              <td>{{ $loggeduser->last }}</td>
            </tr>
            <tr>
              <td>Email</td>
              <td>{{ $loggeduser->email }}</td>

            </tr>
            <tr>
              <td>No</td>
              <td>{{ $loggeduser->address1 }}</td>
            </tr>
            <tr>
              <td>Street</td>
              <td>{{ $loggeduser->address2 }}</td>
            </tr>
            <tr>
              <td>City</td>
              <td>{{ $loggeduser->address3 }}</td>
            </tr>
            <tr>
              <td>Mobile</td>
              <td>{{ $loggeduser->mobile }}</td>
            </tr>
        </table>
        <a href="userPasswordChange" id="tablebutton" class="passpop"><span data-hover="Change password">Change password</span></a>
        <a href="userEmailChange" id="tablebutton" class="passpop"><span data-hover="Change email">Change email</span></a>
        <a href="{{URL::route('userProfileChange',array('id' => $loggeduser->id))}}" id="tablebutton" class="passpop"><span data-hover="Edit Profile">Edit Profile</span></a>
        </br>
    </div>
  </main>
@endsection
