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
        <h3>Lunch</h3>
        <a href="menuaddlunch" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    @foreach($lunch as $lunchs)
                    <tr>
                        <td>{{ $lunchs->id }}</td>
                        <td>{{ $lunchs->type }}</td>
                        <td>{{ $lunchs->details }}</td>
                        <td>{{ $lunchs->price }}</td>
                        <td>
                          <a href="{{URL::route('menuupdatelunch',array('id' => $lunchs->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('menueditl',array('id' => $lunchs->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
