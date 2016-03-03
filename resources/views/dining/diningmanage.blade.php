@extends('layouts.adminmaster')
@section('maincontent')
<header>
    <div id="header">
      <div class="h1">
        <h1><span>Dining Mangement</span><h1>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
        <h3>Dining</h3>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Full Name</th>
                      <th>Email</th>
                      <th>Phone Number</th>
                      <th>Arrival Date</th>
                      <th>Type</th>
                      <th>Actions</th>

                    </tr>
                    @foreach($dining as $dinings)
                    <tr>
                        <td>{{ $dinings->id }}</td>
                        <td>{{ $dinings->first_name }}</td>
                        <td>{{ $dinings->email }}</td>
                        <td>{{ $dinings->phone }}</td>
                        <td>{{ $dinings->arrival_date }}</td>
                        <td>{{ $dinings->type }}</td>
                        <td>
                          <a href="{{URL::route('diningmanage',array('id' => $dinings->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
