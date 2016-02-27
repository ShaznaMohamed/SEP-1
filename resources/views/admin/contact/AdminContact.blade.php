@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Contact Us Messages Inbox</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
              <a href="admincontactus" class="button"><span data-hover="Inbox">Inbox</span></a>
              <a href="admincontactusreply" class="button" id="emailpop"><span data-hover="Send new message">Send new message</span></a>
              <a href="admincontactsent" class="button"><span data-hover="Sent">Sent</span></a>
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($contact as $contacts)
                    <tr>
                        <td>{{ $contacts->id }}</td>
                        <td><strong>{{ $contacts->name }}</strong></td>
                        <td>{{ $contacts->email }}</td>
                        <td>{{ $contacts->mobile }}</td>
                        <td>{{ $contacts->message }}</td>
                        <td>
                            <a href="{{URL::route('admincontactusreplyuser',array('id' => $contacts->id))}}" id="tablebutton" class="editpop"><i class="fa fa-reply"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$contact->links()}}
            </div>
        </div>
    </main>
@endsection
