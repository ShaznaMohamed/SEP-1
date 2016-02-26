@extends('layouts.master')

@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Password Reset</span>
          <span class="tagline">Welcome to the world of Amalaya</span></h1>
        </div>
      </div>
    </header>
    <main>
      <div class="centre">
        <div id="contact">
          <form role="form" method="POST" action="{{ url('/password/reset') }}">
            {!! csrf_field() !!}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="col"></div>
            <div class="col">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field"><input type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email"></div>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <div class="field"><input type="password" class="form-control" name="password" placeholder="New password"></div>
                @if ($errors->has('password'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                @endif
              </div>

              <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <div class="field"><input type="password" class="form-control" name="password_confirmation" placeholder="Confirm new password"></div>
                @if ($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="col" style="    visibility: hidden">
              <div class="field"><input type="text" placeholder="Your Name" /></div>
              <div class="field"><input type="text" placeholder="Your Name" /></div>
              <div class="field"><input type="text" placeholder="Your Name" /></div>
            </div>
            <button type="submit"><span data-hover="Reset Password">Reset Password</span></button>
          </div>
        </form>
      </div>
    </main>
@endsection
