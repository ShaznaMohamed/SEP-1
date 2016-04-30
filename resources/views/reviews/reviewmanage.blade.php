@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Testimonials</span>
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
                        <th>Location</th>
                        <th>Service</th>
                        <th>Title</th>
                        <th>Message</th>
                        <th>Hidden</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($reviewsdata as $reviewdata)
                    <tr>
                        <td>{{ $reviewdata->id }}</td>
                        <td><strong>{{ $reviewdata->name }}</strong></td>
                        <td>{{ $reviewdata->email }}</td>
                        <td>{{ $reviewdata->location }}</td>
                        <td>{{ $reviewdata->service }}</td>
                        <td>{{ $reviewdata->title }}</td>
                        <td>{{ $reviewdata->message }}</td>
                        <td>{{ $reviewdata->hidden }}</td>
                        <td><a href="{{URL::route('reviewhide',array('id' => $reviewdata->id))}}" id="tablebutton"><i class="fa fa-eye-slash"></i></a>
                        <a href="{{URL::route('reviewshow',array('id' => $reviewdata->id))}}" id="tablebutton"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{$reviewsdata->links()}}
            </div>
        </div>
    </main>
@endsection
