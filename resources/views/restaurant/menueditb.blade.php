@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Menu Mangement</span><h1>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
        <h3>breakfast</h3>
        <a href="menuadd" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    @foreach($breakfast as $breakfasts)
                    <tr>
                        <td>{{ $breakfasts->id }}</td>
                        <td>{{ $breakfasts->type }}</td>
                        <td>{{ $breakfasts->details }}</td>
                        <td>{{ $breakfasts->price }}</td>
                        <td>
                          <a href="{{URL::route('menuupdate',array('id' => $breakfasts->id))}}" id="testimonialpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('menueditb',array('id' => $breakfasts->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
