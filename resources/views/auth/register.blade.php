@extends('layouts.master')

@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Register</span>
          <span class="tagline">Welcome to the world of Amalaya</span></h1>
        </div>
      </div>
    </header>
    <main>
      <div class="centre">
        <div id="contact">
          <img src="images/pagemain/register.png" width="1200" height="400" alt="" />
          <form role="form" method="POST" action="{{ url('/register') }}">
            {!! csrf_field() !!}
            <div class="col"></div>
            <div class="col">

              <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                <div class="field"><input type="text" class="form-control" name="name" required placeholder="Name" value="{{ old('name') }}"></div>
                @if ($errors->has('name'))
                  <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field"><input type="email" class="form-control" name="email" required placeholder="E-mail" value="{{ old('email') }}"></div>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="field"><input type="password" class="form-control" name="password" required placeholder="Password"></div>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="field"><input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm password"></div>
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                <div class="field"><input type="text" class="form-control" name="address1" required placeholder="Address Line 1"></div>
              </div>

              <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                <div class="field"><input type="text" class="form-control" name="address2" required placeholder="Address Line 2"></div>
              </div>

              <div class="form-group{{ $errors->has('address3') ? ' has-error' : '' }}">
                <div class="field"><input type="text" class="form-control" name="address3" placeholder="Address Line 3"></div>
              </div>

              <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                <div class="field"><input type="text" class="form-control" name="mobile" required placeholder="Mobile number"></div>
                @if ($errors->has('mobile'))
                  <span class="help-block">
                    <strong>{{ $errors->first('mobile') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group">
                <div class="col"></div>
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-btn fa-user"></i>Register
                </button>
              </div>
            </div>
            <div class="col"></div>
          </form>
        </div>
      </main>
    @endsection
