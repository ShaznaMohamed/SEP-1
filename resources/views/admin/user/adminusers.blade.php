@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>User Management</span>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
            <div id="content">
                <a href="adminuseradd" class="button" id="userpop"><span data-hover="Add new User">Add new User</span></a>
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
                    @foreach($user as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        <td><strong>{{ $users->name }}</strong></td>
                        <td>{{ $users->email }}</td>
                        <td>{{ $users->address1 }}</td>
                        <td>{{ $users->address2 }}</td>
                        <td>{{ $users->address3 }}</td>
                        <td>{{ $users->mobile }}</td>
                        <td>
                          <a href="{{URL::route('adminuseredit',array('id' => $users->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('adminuserdel',array('id' => $users->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{$user->links()}}
            </div>
        </div>
    </main>
@endsection
