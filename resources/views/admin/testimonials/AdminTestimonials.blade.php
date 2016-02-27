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
                        <th>Title</th>
                        <th>Message</th>
                        <th>Hidden</th>
                        <th>Actions</th>
                    </tr>
                    @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td><strong>{{ $testimonial->name }}</strong></td>
                        <td>{{ $testimonial->email }}</td>
                        <td>{{ $testimonial->location }}</td>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->message }}</td>
                        <td>{{ $testimonial->hidden }}</td>
                        <td><a href="{{URL::route('admintestimonialhide',array('id' => $testimonial->id))}}" id="tablebutton"><i class="fa fa-eye-slash"></i></a>
                        <a href="{{URL::route('admintestimonialshow',array('id' => $testimonial->id))}}" id="tablebutton"><i class="fa fa-eye"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{$testimonials->links()}}
            </div>
        </div>
    </main>
@endsection
