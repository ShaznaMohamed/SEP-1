@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Contact Us Messages Sent</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
              <a href="inbox" class="button"><span data-hover="Inbox">Inbox</span></a>
              <a href="reply" class="button" id="emailpop"><span data-hover="Send new message">Send new message</span></a>
              <a href="sent" class="button"><span data-hover="Sent">Sent</span></a>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>To</th>
                        <th>Subject</th>
                        <th>Message</th>
                    </tr>
                    @foreach($contactsent as $contactsents)
                    <tr>
                        <td>{{ $contactsents->id }}</td>
                        <td><strong>{{ $contactsents->name }}</strong></td>
                        <td>{{ $contactsents->toemail }}</td>
                        <td>{{ $contactsents->subject }}</td>
                        <td>{{ $contactsents->message }}</td>
                    </tr>
                    @endforeach
                </table>
                {{$contactsent->links()}}
            </div>
        </div>
    </main>
@endsection
