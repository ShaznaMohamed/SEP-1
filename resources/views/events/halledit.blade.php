@extends('layouts.adminmaster')
@section('maincontent')
  <header>
    <div id="header">
      <div class="h1">
        <h1><span>Hall Details Mangement</span><h1>
        </div>
      </div>
    </header>
    <main>
    	<div class="centre">
        <h3>breakfast</h3>
        <a href="hallDetailAdd" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>Topic</th>
                      <th>Value</th>
                      <th>Action</th>
                    </tr>
                    @foreach($detail as $details)
                    <tr>
                        <td>{{ $details->topic }}</td>
                        <td>{{ $details->value }}</td>
                        <td>
                          <a href="{{URL::route('hallDetailUpdate',array('id' => $details->id))}}"  id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('halledit',array('id' => $details->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </main>
@endsection
