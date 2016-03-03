
<!DOCTYPE html>
<html lang="en">
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

                    <li class="active"><a href="#one" data-toggle="tab">Manage Reservation</a></li>
                    <li><a href="#two" data-toggle="tab">Assign Wedding Planner</a></li>

                </ul>

                <div class="tab-content">
                    <div class="tab-pane active" id="one">

                        <div class="col-md-12">


                            <h4><font class="text-muted">Wedding Hall Reservation Request Details</font></h4>
                            <div align="right">


                                {{--<button type="submit" class="btn btn-success" data-toggle="modal" data-target="#report">Summary</button>--}}
                                <button id="Print" type="button" id="Print" class="btn btn-success">Print Summary</button>&nbsp;
                                <!--<input type="button"onclick="tableToExcel('table_ID00', 'W3C Example Table')" class="btn btn-success" id="ExportExcel"  value="Export to Excel">-->

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

                                                        <h4 style="font-family: sans-serif; text-align: center">Wedding Hall Reservation Report</h4>
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
                                                                        <th class="col-sm-2">Pax</th>
                                                                        <th class="col-sm-2">Event Date</th>
                                                                        <th class="col-sm-5">Event Type</th>
                                                                        <th class="col-sm-5">Hall Type</th>
                                                                        <th class="col-sm-5">No of Guest Rooms</th>
                                                                        <th class="col-sm-5">Messege</th>
                                                                        <th class="col-sm-5">Session</th>
                                                                        <th class="col-sm-5">Availability</th>
                                                                        <th class="col-sm-5">Status</th>

                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php $founds = DB::table('wedreservation') ->get(); ?>
                                                                    @foreach($founds as $found)
                                                                        <tr>

                                                                            <td class="col-sm-2">{{$found->id}} </td>
                                                                            <td class="col-sm-2">{{$found->firstname}} </td>
                                                                            <td class="col-sm-2">{{$found->email}}</td>
                                                                            <td class="col-sm-2">{{$found->phone}}</td>
                                                                            <td class="col-sm-2">{{$found->pax}}</td>
                                                                            <td class="col-sm-2">{{$found->eventdate}}</td>
                                                                            <td class="col-sm-3">{{$found->eventtype}}</td>
                                                                            <td class="col-sm-3">{{$found->halltype}}</td>
                                                                            <td class="col-sm-3">{{$found->noofrooms}}</td>
                                                                            <td class="col-sm-3">{{$found->message}}</td>
                                                                            <td class="col-sm-3">{{$found->sessionn}}</td>
                                                                            <td class="col-sm-3">{{$found->flexibility}}</td>
                                                                            <td class="col-sm-3">{{$found->status}}</td>



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

                                            <th class="col-sm-2">Pax</th>
                                            <th class="col-sm-2">Event Date</th>
                                            <th class="col-sm-5">Event Type</th>
                                            <th class="col-sm-5">Hall Type</th>
                                            <th class="col-sm-5">No of Guest Rooms</th>


                                            <th class="col-sm-5">Availability</th>
                                            <th class="col-sm-5">Status</th>
                                            <th class="col-sm-5">View Details</th>
                                            <th class="col-sm-5">Check Availability</th>
                                            <th class="col-sm-5">Confirm Requests</th>
                                            <th class="col-sm-5">Send Email</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($founds as $found)
                                            <tr>

                                                <td class="col-sm-2">{{$found->id}} </td>
                                                <td class="col-sm-2">{{$found->firstname}} </td>
                                                <td class="col-sm-2">{{$found->email}}</td>

                                                <td class="col-sm-2">{{$found->pax}}</td>
                                                <td class="col-sm-2">{{$found->eventdate}}</td>
                                                <td class="col-sm-3">{{$found->eventtype}}</td>
                                                <td class="col-sm-3">{{$found->halltype}}</td>
                                                <td class="col-sm-3">{{$found->noofrooms}}</td>


                                                <td class="col-sm-3">{{$found->flexibility}}</td>
                                                <td class="col-sm-3">{{$found->status}}</td>
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
                                                                                        <input type="text" disabled="true" name="itemname" id="TextInput" class="form-control" value={{$found->firstname}}>
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
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Pax</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" disabled="true" name="time" id="disabledTextInput" class="form-control" value="{{$found->pax}}">
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Event Date</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="image" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->eventdate}}">

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Event Type</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="attendant" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->eventtype}}">
                                                                                    </div><br><br>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Hall Type</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="room" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->halltype}}">
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">No of Guest Rooms</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="customer" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->noofrooms}}>

                                                                                    </div><br><br>
                                                                                </div>



                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Session</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="address" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->sessionn}} >
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Availability</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="contact" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->flexibility}}>

                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Status</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="email" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->status}}>

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Selected Hall Image</label>
                                                                                    <img src="{{asset('/wedimages/vb.jpg') }}"width="50%" height="50%"/>
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
                                                    <a type="button" class="btn btn-primary glyphicon glyphicon-question-sign" data-toggle="modal" data-target="#edit{{$found->id}}"></a>

                                                    <div id="edit{{$found->id}}" class="modal fade" role="dialog">
                                                        <div class="modal-dialog"  style="width: 40%" >

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Check Availability</font></strong></h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <fieldset>


                                                                        <form class="form-horizontal" method="post" action="" role="form">
                                                                        {{ csrf_token() }}


                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Reservation Id</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->id}}">

                                                                                </div><br><br>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Availability Status</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="flexibility" id="TextInput" class="form-control" value={{$found->flexibility}}>
                                                                                </div><br><br>
                                                                            </div>


                                                                            <div class="modal-footer">

                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf-token">

                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->eventdate}}" value="{{$found->eventdate}}" name="eventdate"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->halltype}}" value="{{$found->halltype}}" name="halltype"/>
                                                                                <input type="submit" class="btn btn-primary" name="btnn" value="Check Availability" />

                                                                            </div>

                                                                        </form>


                                                                    </fieldset>
                                                                </div>

                                                            </div>

                                                        </div>






                                                    </div>

                                                </td>



                                                <td align="center">
                                                    <a type="button" class="btn btn-primary glyphicon glyphicon-ok" data-toggle="modal" data-target="#add{{$found->id}}"></a>

                                                    <div id="add{{$found->id}}" class="modal fade" role="dialog">
                                                        <div class="modal-dialog"  style="width: 40%" >

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Confirm Reservation Requests</font></strong></h4>
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
                                                                                <label class="col-sm-4 control-label">Availablity</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->flexibility}}">

                                                                                </div><br><br>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Status</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->status}}">

                                                                                </div><br><br>
                                                                            </div>


                                                                            <div class="modal-footer">

                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <input type="hidden" name="_tokenn" value="{!! csrf_token() !!}">
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                                <input type="submit" class="btn btn-primary" name="btton" value="Confirm Reservation" />

                                                                            </div>

                                                                        </form>


                                                                    </fieldset>
                                                                </div>

                                                            </div>

                                                        </div>






                                                    </div>

                                                </td>

                                                <td align="center">
                                                    <a type="button" class="btn btn-primary glyphicon glyphicon-envelope" data-toggle="modal" data-target="#send{{$found->id}}"></a>

                                                    <div id="send{{$found->id}}" class="modal fade" role="dialog">
                                                        <div class="modal-dialog"  style="width: 40%" >

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Send Quotation Email</font></strong></h4>
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
                                                                                <label class="col-sm-4 control-label">Email</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->email}}">

                                                                                </div><br><br>
                                                                            </div>


                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <input type="hidden" name="_tokennn" value="{!! csrf_token() !!}">

                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->flexibility}}" value="{{$found->flexibility}}" name="availability"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->email}}" value="{{$found->email}}" name="email"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->eventdate}}" value="{{$found->eventdate}}" name="eventdate"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->halltype}}" value="{{$found->halltype}}" name="halltype"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->sessionn}}" value="{{$found->sessionn}}" name="sessionn"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->firstname}}" value="{{$found->firstname}}" name="firstname"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->eventtype}}" value="{{$found->eventtype}}" name="eventtype"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->pax}}" value="{{$found->pax}}" name="pax"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->sessionn}}" value="{{$found->sessionn}}" name="idd"/>
                                                                                <input type="submit" class="btn btn-primary" name="btnm" value="Send Email" />

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


                    <div class="tab-pane" id="two">

                        <div class="col-md-12">
                            <hr style="margin-top: 5%">
                            <h4><font class="text-muted">Wedding Planner Details</font></h4>
                            <div class="panel-default">
                                <div class="panel-body">
                                    <table id="table_ID01" class="table table-hover table-condensed table-bordered" >
                                        <thead>

                                        <tr class="success">

                                            <th class="col-sm-2">ID</th>

                                            <th class="col-sm-2">Name</th>
                                            <th class="col-sm-2">Email</th>
                                            <th class="col-sm-2">Phone</th>
                                            <th class="col-sm-2">Allocated Hall</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>

                                            <?php $found = DB::table('planner')->get(); ?>
                                            @foreach($found as $foundd)

                                                <td class="col-sm-2">{{$foundd->id}} </td>
                                                <td class="col-sm-2">{{$foundd->name}} </td>
                                                <td class="col-sm-2">{{$foundd->email}}</td>
                                                <td class="col-sm-2">{{$foundd->phone}}</td>
                                                <td class="col-sm-2">{{$foundd->monday}}</td>

                                        </tr>
                                        </tbody>
                                        @endforeach


                                    </table>

                                    <hr style="margin-top: 5%">
                                    <h4><font class="text-muted">Wedding Hall Reservation Details</font></h4>
                                    <?php $founds = DB::table('wedreservation') ->where('status', 'Confirmed' )->get(); ?>
                                    <table id="table_ID" class="table table-hover table-condensed table-bordered" >
                                        <thead>

                                        <tr class="success">
                                            <th class="col-sm-2">ID</th>

                                            <th class="col-sm-2">Name</th>
                                            <th class="col-sm-2">Email</th>

                                            <th class="col-sm-2">Pax</th>
                                            <th class="col-sm-2">Event Date</th>
                                            <th class="col-sm-5">Event Type</th>
                                            <th class="col-sm-5">Hall Type</th>
                                            <th class="col-sm-5">No of Guest Rooms</th>


                                            <th class="col-sm-5">Assigned Planner</th>
                                            <th class="col-sm-5">Status</th>
                                            <th class="col-sm-5">View Details</th>
                                            <th class="col-sm-5">Assign Wedding Planner</th>
                                            <th class="col-sm-5">Notify Wedding Planner</th>

                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($founds as $found)
                                            <tr>

                                                <td class="col-sm-2">{{$found->id}} </td>
                                                <td class="col-sm-2">{{$found->firstname}} </td>
                                                <td class="col-sm-2">{{$found->email}}</td>

                                                <td class="col-sm-2">{{$found->pax}}</td>
                                                <td class="col-sm-2">{{$found->eventdate}}</td>
                                                <td class="col-sm-3">{{$found->eventtype}}</td>
                                                <td class="col-sm-3">{{$found->halltype}}</td>
                                                <td class="col-sm-3">{{$found->noofrooms}}</td>


                                                <td class="col-sm-3">{{$found->message}}</td>
                                                <td class="col-sm-3">{{$found->status}}</td>
                                                <td align="center">
                                                    <a type="button" class="btn btn-primary glyphicon glyphicon-eye-open" data-toggle="modal" data-target="#planner{{$found->id}}"></a>

                                                    <div id="planner{{$found->id}}" class="modal fade" role="dialog">
                                                        <div class="modal-dialog"  style="width: 70%" >

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Confirmed Reservation Details</font></strong></h4>
                                                                </div>

                                                                <div class="modal-body">
                                                                    <fieldset>

                                                                        <form class="form-horizontal" method="post" action="">
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Name</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" disabled="true" name="itemname" id="TextInput" class="form-control" value={{$found->firstname}}>
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
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Pax</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text" disabled="true" name="time" id="disabledTextInput" class="form-control" value="{{$found->pax}}">
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Event Date</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="image" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->eventdate}}">

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Event Type</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="attendant" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->eventtype}}">
                                                                                    </div><br><br>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Hall Type</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="room" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->halltype}}">
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">No of Guest Rooms</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="customer" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->noofrooms}}>

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Wedding Planner</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="name" maxlength="100px" id="disabledTextInput"  class="form-control" value="{{$found->message}}">

                                                                                    </div><br><br>
                                                                                </div>





                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Session</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="address" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->sessionn}} >
                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Availability</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="contact" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->flexibility}}>

                                                                                    </div><br><br>
                                                                                </div>

                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Status</label>
                                                                                    <div class="col-sm-6">
                                                                                        <input type="text"disabled="true" name="email" maxlength="100px" id="disabledTextInput"  class="form-control" value={{$found->status}}>

                                                                                    </div><br><br>
                                                                                </div>


                                                                                <div class="form-group">
                                                                                    <label for="disabledTextInput" class="col-sm-4 control-label">Selected Hall Image</label>
                                                                                    <img src="{{asset('/wedimages/vb.jpg') }}"width="50%" height="50%"/>
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
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Assign Wedding Planner</font></strong></h4>
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
                                                                                <label class="col-sm-4 control-label">Hall Type</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->halltype}}">

                                                                                </div><br><br>
                                                                            </div>

                                                                            <?php
                                                                            $planner = "shaz";
                                                                            $hall = "{$found->halltype}" ;

                                                                            if ($hall == 'samro')
                                                                            {
                                                                                $planner = "Sarah" ;
                                                                            }

                                                                            if ($hall== 'poolside')
                                                                            {
                                                                                $planner = "Louise";
                                                                            }

                                                                            if ($hall== 'silver')
                                                                            {
                                                                                $planner = "Kelly";
                                                                            }

                                                                            if ($hall== 'grand')
                                                                            {
                                                                                $planner = "Ann";
                                                                            }
                                                                            ?>



                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Assigned Planner</label>
                                                                                <div class="col-sm-6">
                                                                                    <select class="form-control"  name="planner" id="planner">

                                                                                        <option value="Sarah" >Sarah</option>
                                                                                        <option value="Louise">Louise</option>
                                                                                        <option value="Kelly">Kelly</option>
                                                                                        <option value="Ann">Ann</option>
                                                                                    </select>
                                                                                </div><br><br>
                                                                            </div>


                                                                            <div class="modal-footer">

                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <input type="hidden" name="_tokenn" value="{!! csrf_token() !!}">
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->id}}" value="{{$found->id}}" name="id"/>
                                                                                <input type="submit" class="btn btn-primary" name="abtton" value="Assign Planner" />

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
                                                                    <h4 class="modal-title custom_align" id="Heading"><strong><font color="green">Notify Wedding Planner</font></strong></h4>
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
                                                                                <label class="col-sm-4 control-label">Assign Planner</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="itemcode2" id="TextInput" class="form-control" value={{$found->id}}>
                                                                                </div><br><br>
                                                                            </div>

                                                                            <div class="form-group">
                                                                                <label class="col-sm-4 control-label">Planner Email</label>
                                                                                <div class="col-sm-6">
                                                                                    <input type="text" readonly name="id" id="TextInput" class="form-control" value="{{$found->email}}">

                                                                                </div><br><br>
                                                                            </div>


                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                                <input type="hidden" name="_tokennn" value="{!! csrf_token() !!}">

                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->firstname}}" value="{{$found->firstname}}" name="name"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->email}}" value="{{$found->email}}" name="uemail"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->phone}}" value="{{$found->phone}}" name="phone"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$foundd->email}}" value="{{$found->email}}" name="email"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->eventdate}}" value="{{$found->eventdate}}" name="eventdate"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->halltype}}" value="{{$found->halltype}}" name="halltype"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->sessionn}}" value="{{$found->sessionn}}" name="sessionn"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->firstname}}" value="{{$found->firstname}}" name="firstname"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->eventtype}}" value="{{$found->eventtype}}" name="eventtype"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->pax}}" value="{{$found->pax}}" name="pax"/>
                                                                                <input type="text"  hidden="hidden" placeholder="{{$found->sessionn}}" value="{{$found->sessionn}}" name="idd"/>
                                                                                <input type="submit" class="btn btn-primary" name="betnm" value="Send Notification Email" />

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