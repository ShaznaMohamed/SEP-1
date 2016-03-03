@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Events Mangement</span><h1>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
        <h3>Events</h3>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Arrival Date</th>
                      <th>Phone Number</th>
                      <th>Type of Event</th>
                      <th>Email</th>
                      <th>Type</th>
                      <th>Event Handling Employee</th>
                      <th>Actions</th>

                    </tr>
                    @foreach($event as $events)
                    <tr>
                        <td>{{ $events->id }}</td>
                        <td>{{ $events->first_name }}</td>
                        <td>{{ $events->arrival_date }}</td>
                        <td>{{ $events->contact_number }}</td>
                        <td>{{ $events->type_of_event }}</td>
                        <td>{{ $events->email }}</td>
                        <td>{{ $events->type }}</td>
                        <td>{{ $events->event_handler }}</td>
                        <td>
                          <a href="{{URL::route('eventassign',array('id' => $events->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('eventmanage',array('id' => $events->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>

                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
