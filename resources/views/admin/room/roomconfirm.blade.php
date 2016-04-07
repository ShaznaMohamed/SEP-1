
@extends('layouts.adminmaster')
@section('maincontent')
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Manage Rooms & Suites Reservations</span></h1>
            </div>
        </div>
    </header>

    <head>
        {{--<script src="jquery-2.1.1.js" language="javascript"></script>--}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        {{--<script src="{{ asset('/css/js/bootstrap.min.js') }}"></script>--}}
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

        {{--<!-- <link href="{{ asset('/css/css/bootstrap.min.css') }}" rel="stylesheet">-->--}}

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        {{-- <link href="css/style.css" rel="stylesheet">--}}


        <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.8/css/jquery.dataTables.css">



        <!-- These links the date picker-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

        {{--drop down--}}




    </head>
    <body >

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <!-- tabs -->
                <div class="tabbable">
                    <ul class="nav nav-tabs">

                        <li class="active"><a href="#one" data-toggle="tab">Manage Room Reservation</a></li>
                        <li><a href="#two" data-toggle="tab">Assign Room Assistant</a></li>

                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="one">

                            <div class="col-md-12">


                                <h4><font class="text-muted">Room & Suites Reservation Details</font></h4>
                                <div align="right">


                                    {{--<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#report">Summary</button>--}}
                                    <button id="Print" type="button" id="Print" class="btn btn-success">Print Summary</button>&nbsp;
                                    <!--<input type="button"onclick="tableToExcel('table_ID00', 'W3C Example Table')" class="btn btn-success" id="ExportExcel"  value="Export to Excel">-->


                                    <!--success and failure message displaying-->
                                    @if(Session::has('message11'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Success!</strong> {{ Session::get('message11', '') }}
                                        </div>
                                    @endif

                                    @if(Session::has('message12'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Success!</strong> {{ Session::get('message12', '') }}
                                        </div>
                                    @endif

                                    @if(Session::has('message13'))
                                        <div class="alert alert-success">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Success!</strong> {{ Session::get('message13', '') }}
                                        </div>
                                    @endif

                                    @if(Session::has('message14'))
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                            <strong>Failed!</strong> {{ Session::get('message14', '') }}
                                        </div>
                                    @endif

                                    <div id="rep" class="modal fade" role="dialog">
                                        <div class="modal-dialog"  style="width: 100%" >

                                            <!-- Modal content-->
                                            <div class="modal-content">

                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>


                                                </div>

                                                <div class="modal-body" id="reportt">
                                                    <div class="panel-default">
                                                        <div class="panel-body">
                                                            {{--DO NOT TOUCH FROM HERE ONWARDS--}}


                                                            <div class="col-md-12">
                                                                <div class="col-md-4">
                                                                    <!--<img src="{//{asset('/wedimages/reserv.jpg')}}" style="width: 10%;margin-right:60%;margin-top: 3%">-->

                                                                </div>
                                                                <div style="top:-2%; left: 20%; position: absolute; margin-right: 60%;margin-top: 3% ">

                                                                    {{--<table style="border: none;" cellpadding="0">--}}

                                                                    {{--<tr>--}}
                                                                    {{--<td>--}}
                                                                    {{--<p id="heading">--}}
                                                                    {{--<b>Langdale by Amaya</b><br>--}}
                                                                    {{--Nanu Oya, Radalla,--}}
                                                                    {{--Nuwara Eliya.--}}

                                                                    {{--<table id="id" cellpadding="5">--}}
                                                                    {{--<tr>--}}
                                                                    {{--<td>Telephone</td> <td> +94 524 924 959</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                    {{--<td>Fax</td> <td>   +94 524 924 831</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--<tr>--}}
                                                                    {{--<td>Email</td> <td> res@amayaresorts.com</td>--}}
                                                                    {{--</tr>--}}
                                                                    {{--</table>--}}



                                                                    <table>
                                                                        <tr>
                                                                            <td>
                                                                                <table id="id" cellpadding="5">

                                                                                    <tr>

                                                                                        <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>

                                                                                    </tr>

                                                                                </table>



                                                                            </td>

                                                                            <td>

                                                                                {{--<p id="heading">--}}
                                                                                {{--<b>Amalya Reach Holiday Resort </b><br>--}}


                                                                                {{--<table id="id">--}}
                                                                                {{--<tr>--}}
                                                                                {{--<td>Telephone</td> <td> +94 114 767 846</td>--}}
                                                                                {{--</tr>--}}
                                                                                {{--<tr>--}}
                                                                                {{--<td>Fax</td> <td>   +94 114 767 867</td>--}}
                                                                                {{--</tr>--}}
                                                                                {{--<tr>--}}
                                                                                {{--<td>Email</td> <td> reservations@amayaresorts.com</td>--}}
                                                                                {{--</tr>--}}
                                                                                {{--</table>--}}
                                                                                {{--</p>--}}
                                                                            </td>

                                                                        </tr>

                                                                    </table>

                                                                </div>

                                                            </div>

                                                            <br>


                                                            {{--TO HERE--}}
                                                            <br>

                                                            <h4 style="font-family: sans-serif; text-align: center">Room Reservation Summary</h4>
                                                            <hr style="height: 1px; border: none; background-color: #000000">




                                                            <div class="panel-default">
                                                                <div class="panel-body">
                                                                    <table id="table_IDDD" class="table-responsive" align="center">
                                                                        <thead>

                                                                        <tr class="success">
                                                                            <th class="col-sm-2">ID</th>

                                                                            <th class="col-sm-2">Name</th>
                                                                            <th class="col-sm-2">Email</th>
                                                                            <th class="col-sm-2">Phone</th>
                                                                            <th class="col-sm-2">No of Rooms</th>
                                                                            <th class="col-sm-2">Arrival Date</th>
                                                                            <th class="col-sm-5">Departure Date</th>
                                                                            <th class="col-sm-5">Room Type</th>
                                                                            <th class="col-sm-5">Assigned Room Assistant</th>
                                                                            <th class="col-sm-5">No of Adults</th>
                                                                            <th class="col-sm-5">No of Children</th>



                                                                        </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <?php $founds = DB::table('roomreservation') ->get(); ?>
                                                                        @foreach($founds as $found)
                                                                            <tr>

                                                                                <td class="col-sm-2">{{$found->id}} </td>
                                                                                <td class="col-sm-2">{{$found->name}} </td>
                                                                                <td class="col-sm-2">{{$found->email}}</td>
                                                                                <td class="col-sm-2">{{$found->phone}}</td>
                                                                                <td class="col-sm-2">{{$found->noofrooms}}</td>
                                                                                <td class="col-sm-2">{{$found->arrival}}</td>
                                                                                <td class="col-sm-3">{{$found->departure}}</td>
                                                                                <td class="col-sm-3">{{$found->roomtype}}</td>
                                                                                <td class="col-sm-3">{{$found->message}}</td>
                                                                                <td class="col-sm-3">{{$found->adult}}</td>
                                                                                <td class="col-sm-3">{{$found->children}}</td>



                                                                        @endforeach
                                                                        </tbody>

                                                                    </table>

                                                                </div>
                                                            </div>

                                                            <br>
                                                            <hr style="height: 1px; border: none; background-color: #000000">



                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="panel-default">
                                    <div class="panel-body">
                                        <table id="table_ID" class="table table-hover table-condensed table-bordered" >
                                            <thead>

                                            <tr class="success">
                                                <th class="col-sm-2">ID</th>

                                                <th class="col-sm-2">Name</th>
                                                <th class="col-sm-2">Email</th>
                                                <th class="col-sm-5">Phone</th>
                                                <th class="col-sm-2">No of Rooms</th>
                                                <th class="col-sm-2">Arrival Date</th>
                                                <th class="col-sm-5">Departure Date</th>
                                                <th class="col-sm-5">Room Type</th>

                                                <th class="col-sm-5">No of Adults</th>
                                                <th class="col-sm-5">No of Children</th>
                                                <th class="col-sm-5">View Reservation Details</th>


                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($founds as $found)
                                                <tr>

                                                    <td class="col-sm-2">{{$found->id}} </td>
                                                    <td class="col-sm-2">{{$found->name}} </td>
                                                    <td class="col-sm-2">{{$found->email}}</td>
                                                    <td class="col-sm-2">{{$found->phone}}</td>
                                                    <td class="col-sm-2">{{$found->noofrooms}}</td>
                                                    <td class="col-sm-2">{{$found->arrival}}</td>
                                                    <td class="col-sm-3">{{$found->departure}}</td>
                                                    <td class="col-sm-3">{{$found->roomtype}}</td>



                                                    <td class="col-sm-3">{{$found->adult}}</td>
                                                    <td class="col-sm-3">{{$found->children}}</td>
                                                    <td align="center">
                                                        <a type="button" class="btn btn-primary glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#{{$found->id}}"></a>

                                                        <div id="{{$found->id}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog"  style="width: 70%" >

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                        <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Reservation Request Details</font></strong></h4>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <fieldset>

                                                                            <form class="form-horizontal" method="post" action="">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Name</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="itemname" id="TextInput" class="form-control" value={{$found->name}}>
                                                                                        </div> <br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Email</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="description" id="TextInput" class="form-control" value={{$found->email}}>
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Phone</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" readonly name="date"class="form-control"  id="description"  value="{{$found->phone}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Rooms</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="time" id="disabledTextInput" class="form-control" value="{{$found->noofrooms}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Arrival Date</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="image" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->arrival}}">

                                                                                        </div><br><br>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Departure Date</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="attendant" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->departure}}">
                                                                                        </div><br><br>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Room Type</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="room" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->roomtype}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Room Assistant</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="customer" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->status}}>

                                                                                        </div><br><br>
                                                                                    </div>



                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Adults</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="address" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->adult}} >
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Children</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="contact" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->children}}>

                                                                                        </div><br><br>
                                                                                    </div>

                                                                                  


                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Selected Room Image</label>
                                                                                        <img src="{{asset('images/room/rone.jpg') }}"width="50%" height="50%"/>
                                                                                    </div>
                                                                                </div>

                                                                            </form>





                                                                        </fieldset>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>





                                                        </div>

                                                    </td>



                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>

                                    </div>
                                </div>
                            </div>


                        </div>


                        <div class="tab-pane" id="two">
                            <div class="col-md-12">
                                <hr style="margin-top: 5%">
                                <h4><font class="text-muted">Room Assistant Details</font></h4>

                              <td align="center">
                                    <div align="right">
                                        <a type="button"  class="btn btn-success"  data-toggle="modal" data-target="#newassistant{{$found->id}}">Add New Assistant</a>
                                    </div>
                                    <div id="newassistant{{$found->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog"  style="width: 40%" >

                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Add New Room Assistant</font></strong></h4>
                                                </div>
                                                <div class="modal-body">
                                                    <fieldset>


                                                        <form class="form-horizontal" method="post" action="" >
                                                            <div class="form-group{{ $errors->has('name') ? ' has-error' : ''}}">
                                                                <label class="col-sm-4 control-label">Name</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="name" id="name" class="form-control" >
                                                                    @if ($errors->has('name')) <span class="help-block">{{ $errors->first('name') }}</span> @endif
                                                                </div><br><br>
                                                            </div>

                                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : ''}}">
                                                                <label class="col-sm-4 control-label">Email Address</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="email" id="email" class="form-control" >
                                                                    @if ($errors->has('email')) <span class="help-block">{{ $errors->first('email') }}</span> @endif
                                                                </div><br><br>
                                                            </div>

                                                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : ''}}">
                                                                <label class="col-sm-4 control-label">Phone Number</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="phone" id="phone" class="form-control" >
                                                                    @if ($errors->has('phone')) <span class="help-block">{{ $errors->first('phone') }}</span> @endif
                                                                </div><br><br>
                                                            </div>

                                                            <div class="form-group{{ $errors->has('room') ? ' has-error' : ''}}">
                                                                <label class="col-sm-4 control-label">Address</label>
                                                                <div class="col-sm-6">
                                                                    <input type="text" name="room" id="room" class="form-control" >
                                                                    @if ($errors->has('room')) <span class="help-block">{{ $errors->first('room') }}</span> @endif
                                                                </div><br><br>
                                                            </div>


                                                            <div class="modal-footer">

                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                <input type="hidden" name="_tokenn" value="{!! csrf_token() !!}">
                                                                <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                <input type="submit" class="btn btn-primary" name="addassistantbtn" value="Add Assistant" />

                                                            </div>

                                                        </form>


                                                    </fieldset>
                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </td>


                                <div class="panel-default">
                                    <div class="panel-body">
                                        <table id="table_ID01" class="table table-hover table-condensed table-bordered" >
                                            <thead>

                                            <tr class="success">

                                                <th class="col-sm-2">ID</th>

                                                <th class="col-sm-2">Name</th>
                                                <th class="col-sm-2">Email</th>
                                                <th class="col-sm-2">Phone</th>
                                                <th class="col-sm-2">Allocated Room</th>


                                            </tr>
                                            </thead>
                                            <tbody>

                                            <tr>

                                                <?php $found = DB::table('roomassistant')->get(); ?>
                                                @foreach($found as $foundd)

                                                    <td class="col-sm-2">{{$foundd->id}} </td>
                                                    <td class="col-sm-2">{{$foundd->name}} </td>
                                                    <td class="col-sm-2">{{$foundd->email}}</td>
                                                    <td class="col-sm-2">{{$foundd->phone}}</td>
                                                    <td class="col-sm-2">{{$foundd->room}}</td>

                                            </tr>
                                            </tbody>
                                            @endforeach


                                        </table>

                                        <hr style="margin-top: 5%">
                                        <h4><font class="text-muted">Room Reservation Details</font></h4>
                                        <?php $founds = DB::table('roomreservation') ->get(); ?>
                                        <table id="table_ID" class="table table-hover table-condensed table-bordered" >
                                            <thead>

                                            <tr class="success">
                                                <th class="col-sm-2">ID</th>

                                                <th class="col-sm-2">Name</th>
                                                <th class="col-sm-2">Email</th>
                                                <th class="col-sm-2">Phone</th>
                                                <th class="col-sm-2">No of Rooms</th>
                                                <th class="col-sm-2">Arrival Date</th>
                                                <th class="col-sm-5">Departure Date</th>
                                                <th class="col-sm-5">Room Type</th>
                                                <th class="col-sm-5">No of Adults</th>
                                                <th class="col-sm-5">No of Children</th>


                                                <th class="col-sm-5">Assigned Room Assistant</th>
                                                <th class="col-sm-5">View Details</th>
                                                <th class="col-sm-5">Assign Room Assistant</th>
                                                <th class="col-sm-5">Notify Room Assistant</th>

                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($founds as $found)
                                                <tr>

                                                    <td class="col-sm-2">{{$found->id}} </td>
                                                    <td class="col-sm-2">{{$found->name}} </td>
                                                    <td class="col-sm-2">{{$found->email}}</td>

                                                    <td class="col-sm-2">{{$found->phone}}</td>
                                                    <td class="col-sm-2">{{$found->noofrooms}}</td>
                                                    <td class="col-sm-3">{{$found->arrival}}</td>
                                                    <td class="col-sm-3">{{$found->departure}}</td>
                                                    <td class="col-sm-3">{{$found->roomtype}}</td>


                                                    <td class="col-sm-3">{{$found->adult}}</td>
                                                    <td class="col-sm-3">{{$found->children}}</td>
                                                    <td class="col-sm-3">{{$found->status}}</td>

                                                    <td align="center">
                                                        <a type="button" class="btn btn-primary glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#planner{{$found->id}}"></a>

                                                        <div id="planner{{$found->id}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog"  style="width: 70%" >

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                        <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Room Reservation Details</font></strong></h4>
                                                                    </div>

                                                                    <div class="modal-body">
                                                                        <fieldset>

                                                                            <form class="form-horizontal" method="post" action="">
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Name</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="itemname" id="TextInput" class="form-control" value={{$found->name}}>
                                                                                        </div> <br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Email</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="description" id="TextInput" class="form-control" value={{$found->email}}>
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Phone</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" readonly name="date"class="form-control"  id="description"  value="{{$found->phone}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Rooms</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text" disabled="true" name="time" id="disabledTextInput" class="form-control" value="{{$found->noofrooms}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Arrival Date</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="image" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->arrival}}">

                                                                                        </div><br><br>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Departure Date</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="attendant" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->departure}}">
                                                                                        </div><br><br>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Room Type</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="room" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->roomtype}}">
                                                                                        </div><br><br>
                                                                                    </div>

                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Adults</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="customer" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->adult}}>

                                                                                        </div><br><br>
                                                                                    </div>


                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">No of Children</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="name" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->children}}">

                                                                                        </div><br><br>
                                                                                    </div>





                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Assigned Room Assistant</label>
                                                                                        <div class="col-sm-6">
                                                                                            <input type="text"disabled="true" name="address" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->status}} >
                                                                                        </div><br><br>
                                                                                    </div>



                                                                                    <div class="form-group">
                                                                                        <label for="disabledTextInput" class="col-sm-4 control-label">Selected Room Image</label>
                                                                                        <img src="{{asset('images/room/rone.jpg') }}"width="50%" height="50%"/>
                                                                                    </div>
                                                                                </div>

                                                                            </form>





                                                                        </fieldset>

                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                </div>
                                                            </div>





                                                        </div>

                                                    </td>
                                                    <td align="center">
                                                        <a type="button" class="btn btn-primary glyphicon glyphicon-plus-sign" data-toggle="modal" data-target="#assign{{$found->id}}"></a>

                                                        <div id="assign{{$found->id}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog"  style="width: 40%" >

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                        <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Assign Room Assistant</font></strong></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <fieldset>


                                                                            <form class="form-horizontal" method="post" action="" >
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 control-label">Reservation ID</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly name="id" id="TextInput" class="form-control" value={{$found->id}}>
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 control-label">Room Type</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->roomtype}}">

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 control-label">Assigned Assistant</label>
                                                                                    <div class="col-sm-6">
                                                                                        <select class="form-control"  name="assistant" id="planner">

                                                                                            <?php $plan = DB::table('roomassistant') ->get();?>

                                                                                            @foreach($plan as $pname)
                                                                                                <option value="{{$pname->name}}" >{{$pname->name}}</option>
                                                                                            @endforeach


                                                                                        </select>
                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="modal-footer">

                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                    <input type="hidden" name="_tokenn" value="{!! csrf_token() !!}">
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                                    <input type="submit" class="btn btn-primary" name="assbtton" value="Assign Room Assistant" />

                                                                                </div>

                                                                            </form>


                                                                        </fieldset>
                                                                    </div>

                                                                </div>

                                                            </div>

                                                        </div>

                                                    </td>

                                                    <td align="center">
                                                        <a type="button" class="btn btn-primary glyphicon glyphicon-envelope" data-toggle="modal" data-target="#plansend{{$found->id}}"></a>

                                                        <div id="plansend{{$found->id}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog"  style="width: 40%" >

                                                                <!-- Modal content-->
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                        <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Send email to the Room Assistant</font></strong></h4>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <fieldset>


                                                                            <form class="form-horizontal" method="post" action="">
                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 control-label">Reservation ID</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly name="itemcode2" id="TextInput" class="form-control" value={{$found->id}}>
                                                                                    </div><br><br>
                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label class="col-sm-4 control-label">Assigned Room Assistant</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" readonly name="itemcode2" id="TextInput" class="form-control" value={{$found->message}}>
                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                    <input type="hidden" name="_tokennn" value="{!! csrf_token() !!}">

                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->name}}" value="{{$found->name}}" name="name"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->email}}" value="{{$found->email}}" name="uemail"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->phone}}" value="{{$found->phone}}" name="phone"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->email}}" value="{{$found->email}}" name="email"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->arrival}}" value="{{$found->arrival}}" name="arrival"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->roomtype}}" value="{{$found->roomtype}}" name="roomtype"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->adult}}" value="{{$found->adult}}" name="adult"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->departure}}" value="{{$found->departure}}" name="departure"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->children}}" value="{{$found->children}}" name="children"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->noofrooms}}" value="{{$found->noofrooms}}" name="noofrooms"/>
                                                                                    <input type="text"  hidden="hidden" placeholder="{{$found->message}}" value="{{$found->message}}" name="assname"/>

                                                                                    <input type="submit" class="btn btn-primary" name="beotnm" value="Send Notification Email" />

                                                                                </div>

                                                                            </form>


                                                                        </fieldset>
                                                                    </div>

                                                                </div>

                                                            </div>






                                                        </div>

                                                    </td>

                                                </tr>
                                            @endforeach
                                            </tbody>

                                        </table>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>


    <script>
        $('#Print').click(function(){

            var printContents = document.getElementById("reportt").innerHTML;
            var originalContents = document.body.innerHTML;

            document.body.innerHTML = printContents;

            window.print();

            document.body.innerHTML = originalContents;

        });

    </script>


    <script>


        var tableToExcel = (function() {
            var uri = 'data:application/vnd.ms-excel;base64,'
                    , template = '<html xmlns:o="urn:schemas-microsoft-com:office:office" xmlns:x="urn:schemas-microsoft-com:office:excel" xmlns="http://www.w3.org/TR/REC-html40"><head><!--[if gte mso 9]><xml><x:ExcelWorkbook><x:ExcelWorksheets><x:ExcelWorksheet><x:Name>{worksheet}</x:Name><x:WorksheetOptions><x:DisplayGridlines/></x:WorksheetOptions></x:ExcelWorksheet></x:ExcelWorksheets></x:ExcelWorkbook></xml><![endif]--></head><body><table>{table}</table></body></html>'
                    , base64 = function(s) { return window.btoa(unescape(encodeURIComponent(s))) }
                    , format = function(s, c) { return s.replace(/{(\w+)}/g, function(m, p) { return c[p]; }) }
            return function(table, name) {
                if (!table.nodeType) table = document.getElementById(table)
                var ctx = {worksheet: name || 'Worksheet', table: table.innerHTML}

                window.location.href = uri + base64(format(template, ctx))
            }
        })()

    </script>
    </body>
@endsection
