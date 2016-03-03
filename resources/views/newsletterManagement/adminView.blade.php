@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Newsletter Management</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
                <h1>Send Newsletters for Subscribers</h1>
                    <form action="{{route('sendnewsletter')}}" method="post">
                    <div class="field"><textarea name="body" id=" body" placeholder="Email content" required rows="30" cols="80"></textarea></div>

                    <input type="submit" value="Send Newsletters" />
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                  </form>
                </div>
              </div>
            </main>
        @endsection
