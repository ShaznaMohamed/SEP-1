@extends('layouts.master')

@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Login</span>
          <span class="tagline">Welcome to the world of Amalaya</span></h1>
        </div>
      </div>
    </header>
    <main>
      <div class="centre">
        <div id="contact">
          <img src="images/pagemain/login.png" width="1200" height="400" alt="" />
          <form role="form" method="POST" action="{{ url('/login') }}">
            {!! csrf_field() !!}
            <div class="col"></div>
            <div class="col">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field"><input type="email" class="form-control" name="email" placeholder="e-mail" required value="{{ old('email') }}">
              </div>
              </div>
              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="field"><input type="password" class="form-control" name="password" placeholder="password" required/>
                </div>
              </div>
              @if ($errors->has('email'))
                  <strong>{{ $errors->first('email') }}</strong>
              @endif
              @if ($errors->has('password'))
                  <strong>{{ $errors->first('password') }}</strong>
              @endif
              <div class="col"></div>
              <button type="submit"><span data-hover="Login">Login</span></button>
            </div>
            <div class="col"></div>
            </form>
        </div>
      </main>
    @endsection
