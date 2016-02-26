@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Administrator Management</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
                <a href="adminadd" class="button" id="userpop"><span data-hover="Add new Administrator">Add new Administrator</span></a>
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address 1</th>
                      <th>Address 2</th>
                      <th>Address 3</th>
                      <th>Mobile</th>
                      <th>Action</th>
                    </tr>
                    @foreach($admins as $admin)
                    <tr>
                        <td>{{ $admin->id }}</td>
                        <td><strong>{{ $admin->name }}</strong></td>
                        <td>{{ $admin->email }}</td>
                        <td>{{ $admin->address1 }}</td>
                        <td>{{ $admin->address2 }}</td>
                        <td>{{ $admin->address3 }}</td>
                        <td>{{ $admin->mobile }}</td>
                        <td>
                          <a href="#" class="tablebutton"><i class="fa fa-pencil"></i></a>
                          <a href="#" class="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$admins->links()}}
            </div>
        </div>
    </main>
@endsection
