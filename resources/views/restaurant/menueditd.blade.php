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
        <h3>Dinner</h3>
        <a href="menuadddinner" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    @foreach($dinner as $dinners)
                    <tr>
                        <td>{{ $dinners->id }}</td>
                        <td>{{ $dinners->type }}</td>
                        <td>{{ $dinners->details }}</td>
                        <td>{{ $dinners->price }}</td>
                        <td>
                          <a href="{{URL::route('menuupdatedinner',array('id' => $dinners->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('menueditd',array('id' => $dinners->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
