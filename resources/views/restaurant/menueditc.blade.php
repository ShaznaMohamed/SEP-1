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
        <h3>Coffee Drinks</h3>
        <a href="menuaddcoffee" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    @foreach($coffee as $coffees)
                    <tr>
                        <td>{{ $coffees->id }}</td>
                        <td>{{ $coffees->type }}</td>
                        <td>{{ $coffees->details }}</td>
                        <td>{{ $coffees->price }}</td>
                        <td>
                          <a href="{{URL::route('menuupdatecoffee',array('id' => $coffees->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('menueditc',array('id' => $coffees->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
