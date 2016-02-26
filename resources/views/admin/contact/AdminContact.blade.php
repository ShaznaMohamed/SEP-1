@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Contact Us Messages</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
                {{-- <h2><strong>Messages Received</h2> --}}
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
                        <td><a href="#" class="tablebutton"><i class="fa fa-reply"/></a></td>
                    </tr>
                    @endforeach
                </table>
                {{$contact->links()}}
            </div>
        </div>
    </main>
@endsection
