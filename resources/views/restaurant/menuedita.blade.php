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
        <h3>Alcoholic Drinks</h3>
        <a href="menuaddalcoholic" class="button" id="userpop"><span data-hover="Add new Item">Add new Item</span></a>
            <div id="content">
                <table>
                    <tr>
                      <th>ID</th>
                      <th>Type</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                    </tr>
                    @foreach($alcoholic as $alcoholics)
                    <tr>
                        <td>{{ $alcoholics->id }}</td>
                        <td>{{ $alcoholics->type }}</td>
                        <td>{{ $alcoholics->details }}</td>
                        <td>{{ $alcoholics->price }}</td>
                        <td>
                          <a href="{{URL::route('menuupdatealcoholic',array('id' => $alcoholics->id))}}" id="tablebutton" class="editpop"><i class="fa fa-pencil"></i></a>
                          <a href="{{URL::route('menuedita',array('id' => $alcoholics->id))}}" id="tablebutton"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>
    </main>
@endsection
