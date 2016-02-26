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
          @if (session('status'))
            <div class="alert alert-success">
              {{ session('status') }}
            </div>
          @endif
          <form role="form" method="POST" action="{{ url('/password/email') }}">
            {!! csrf_field() !!}
            <div class="col"></div>
            <div class="col">
              <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <div class="field"><input type="email" name="email" value="{{ old('email') }}" placeholder="Enter your email"></div>
                @if ($errors->has('email'))
                  <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                @endif
              </div>
            </div>
            <div class="col" style="    visibility: hidden">
              <div class="field"><input type="text" placeholder="Your Name" /></div>
            </div>
            <button type="submit"><span data-hover="Reset Password">Reset Password</span></button>
          </form>
        </div>
      </main>
    @endsection
