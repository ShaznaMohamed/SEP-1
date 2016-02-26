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
                        <th>Action</th>
                    </tr>
                    @foreach($testimonials as $testimonial)
                    <tr>
                        <td>{{ $testimonial->id }}</td>
                        <td><strong>{{ $testimonial->name }}</strong></td>
                        <td>{{ $testimonial->email }}</td>
                        <td>{{ $testimonial->location }}</td>
                        <td>{{ $testimonial->title }}</td>
                        <td>{{ $testimonial->message }}</td>
                        <td><a href="#" class="tablebutton"><i class="fa fa-eye-slash"></i></a></td>
                    </tr>
                    @endforeach
                </table>
                {{$testimonials->links()}}
            </div>
        </div>
    </main>
@endsection
