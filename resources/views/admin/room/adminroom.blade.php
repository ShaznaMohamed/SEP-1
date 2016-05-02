@extends('layouts.adminmaster')
@section('maincontent')

<html>
    <header>
        <div id="header">
            <div class="h1">
                <h1><span>Manage Room Facilities</span></h1>
            </div>
        </div>
    </header>

    <head>
   {{--<script type="text/javascript" src="roomstore.js"></script>--}}

        <script type="text/javascript">
            function showmessage()
            {
                confirm("succesfully updated");
            }

            function getvalues()
            {

                var roomvalue  = document.getElementById("rooms").value;

                <?php
                        $royalprice="99";
                        $tabledata = DB::table('room')->where('roomtype', 'royal')->get();
                        foreach($tabledata as $row)
                        {
                           $royalprice = $row->price;
                        }
                        ?>

                    if(roomvalue == "royal") {
                    document.getElementById("contact-charge").value = "<?php echo $royalprice ?>";
                    }

                <?php
                $premierprice="99";
                $tabledata = DB::table('room')->where('roomtype', 'premier')->get();
                foreach($tabledata as $row)
                {
                    $premierprice = $row->price;
                }
                ?>

                if(roomvalue == "premier") {
                    document.getElementById("contact-charge").value = "<?php echo $premierprice ?>";
                }

                <?php
                $deluxeprice="99";
                $tabledata = DB::table('room')->where('roomtype', 'deluxe')->get();
                foreach($tabledata as $row)
                {
                    $deluxeprice = $row->price;
                }
                ?>


                if(roomvalue == "deluxe") {
                    document.getElementById("contact-charge").value = "<?php echo $deluxeprice ?>";
                }


                <?php
                $juniorprice="99";
                $tabledata = DB::table('room')->where('roomtype', 'junior')->get();
                foreach($tabledata as $row)
                {
                    $juniorprice = $row->price;
                }
                ?>

                if(roomvalue == "junior") {
                    document.getElementById("contact-charge").value = "<?php echo $juniorprice ?>";
                }


            }


        </script>

    </head>
<body>


<!--retrieving data from room table -->
<div class="centre">
    <table>
        <tr>
            <td>

                <h3>ROOM FEATURES</h3>

                <?php $tabledata = DB::table('room')->get(); ?>
                <main>
                    <table>
                        <thead>
                        <th>Room Type</th>
                        <th>Price</th>
                        <th>No of Rooms</th>
                        <th>Wifi</th>
                        <th>Aircondition</th>
                        <th>Cable TV</th>
                        <th>Telephone</th>
                        <th>Dining Table</th>


                        <!-- Converting  1 , 0 boolean into understandable values to view -->
                        </thead>
                        <tbody>
                        <?php
                        foreach($tabledata as $row)
                        {
                        if($row->wifi  == 1)
                            $wifi = "Available" ;
                        else
                            $wifi = "Not Available";
                        if($row->airconditioned  == 1)
                            $air = "Available" ;
                        else
                            $air = "Not Available";
                        if($row->cabletv  == 1)
                            $cable = "Available" ;
                        else
                            $cable = "Not Available";
                        if($row->telephone  == 1)
                            $tel = "Available" ;
                        else
                            $tel = "Not Available";
                        if($row->diningtable  == 1)
                            $din = "Available" ;
                        else
                            $din = "Not Available";

                        ?>
                        <tr>
                            <td><?php echo $row->roomtype;?></td>
                            <td><?php echo $row->price;?></td>
                            <td><?php echo $row->norooms; ?></td>
                            <td><?php echo $wifi; ?></td>
                            <td><?php echo $air; ?></td>
                            <td><?php echo $cable; ?></td>
                            <td><?php echo $tel; ?></td>
                            <td><?php echo $din; ?></td>



                        </tr>
                        <?php
                        }
                        ?>
                        </tbody>

                    </table>
                </main>
        </table>
</div>


</td>
<!--end of retrieved data showings-->
<!--formstarts-->
<td>
    <div class="centre">

        <h3>UPDATE ROOM FEATURES</h3>

        @if(Session::has('message21'))
            <div class="alert alert-danger">
                <label style="color: red" class="close"  data-dismiss="alert" aria-hidden="true"></label>
                <strong style="color: red">Failed!</strong> {{ Session::get('message21', '') }}
            </div>
        @endif

        @if(Session::has('message22'))
            <div class="alert alert-success">
                <label class="close" data-dismiss="alert" aria-hidden="true"></label>
                <strong style="color: green">Success!</strong> {{ Session::get('message22', '') }}
            </div>
        @endif

        @if(Session::has('message30'))
            <div class="alert alert-danger">
                <label style="color: red" class="close"  data-dismiss="alert" aria-hidden="true"></label>
                <strong style="color: red">Failed!</strong> {{ Session::get('message30', '') }}
            </div>
        @endif

        @if(Session::has('message31'))
            <div class="alert alert-success">
                <label class="close" data-dismiss="alert" aria-hidden="true"></label>
                <strong style="color: green">Success!</strong> {{ Session::get('message31', '') }}
            </div>
        @endif



        <main>
            <table>
                <form action="{{ url('adminroom') }}" role="form" method="post" novalidate>
                    <tr>
                        <td>

                            <label for="start_time" class="control-label">Select Room Type</label>
                            <div class="form-group{{ $errors->has('roomtypee') ? ' has-error' : ''}}">
                                <div class="field"> <select name="roomtypee" id="rooms" class="infants" onchange="getvalues()">
                                        <option value="royal" selected="selected">Royal Room</option>
                                        <option value="deluxe" >Deluxe</option>
                                        <option value="premier" >Premier Suite</option>
                                        <option value="junior" >Junior Suite</option>
                                    /</select></div>
                                @if ($errors->has('roomtypee')) <span class="help-block">{{ $errors->first('roomtypee') }}</span> @endif
                            </div>
                        </td>

                        <td>

                            <label for="start_time" class="control-label">Price</label>
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : ''}}">
                                <div class="field"><input name="price" type="text" placeholder="" id="contact-charge"  /></div>
                                @if ($errors->has('price')) <span class="help-block">{{ $errors->first('price') }}</span> @endif
                            </div>
                        </td>


                        <td>

                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <h3>Add a new Room </h3>

                        </td>
                        <td>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="start_time" class="control-label">Air Conditioned</label>
                            <div class="form-group{{ $errors->has('airconditioned') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('airconditioned', 'added') !!}</div>
                                @if ($errors->has('airconditioned')) <span class="help-block">{{ $errors->first('airconditioned') }}</span> @endif
                            </div>
                        </td>
                        <td>
                            <label for="start_time" class="control-label">Cable TV</label>
                            <div class="form-group{{ $errors->has('cabletv') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('cabletv', 'added')  !!}</div>
                                @if ($errors->has('cabletv')) <span class="help-block">{{ $errors->first('cabletv') }}</span> @endif
                            </div>
                        </td>
                        <td>
                            <label for="start_time" class="control-label">Telephone</label>
                            <div class="form-group{{ $errors->has('telephone') ? ' has-error' : ''}}">
                                <div class="field">{!! Form::checkbox('telephone', 'added') !!}</div>
                                @if ($errors->has('telephone')) <span class="help-block">{{ $errors->first('telephone') }}</span> @endif
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <label for="start_time" class="control-label">Select room type </label>
                            <div class="form-group{{ $errors->has('roomtype') ? ' has-error' : ''}}">
                                <div class="field"> <select name="roomtype" id="rooms" class="infants" >
                                        <option value="royal" selected="selected">Royal Room</option>
                                        <option value="deluxe" >Deluxe</option>
                                        <option value="premier" >Premier Suite</option>
                                        <option value="junior" >Junior Suite</option>
                                        /</select></div>
                                @if ($errors->has('roomtype')) <span class="help-block">{{ $errors->first('roomtype') }}</span> @endif
                            </div>
                        </td>
                        <td>
                            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                            <div class="form-group">
                                <h4><input type="submit" name="ub" value="Add" class="btn btn-default" />
                                    <span data-hover="Add"></span></h4>
                            </div>
                        </td>
                    </tr>

                    <td>
                        <label for="start_time" class="control-label">Dining Table</label>
                        <div class="form-group{{ $errors->has('diningtable') ? ' has-error' : ''}}">
                            <div class="field">{!! Form::checkbox('diningtable', 'added') !!}</div>
                            @if ($errors->has('diningtable')) <span class="help-block">{{ $errors->first('diningtable') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <label for="start_time" class="control-label">Wifi</label>
                        <div class="form-group{{ $errors->has('wifi') ? ' has-error' : ''}}">
                            <div class="field">{!! Form::checkbox('wifi', 'added') !!}</div>
                            @if ($errors->has('wifi')) <span class="help-block">{{ $errors->first('wifi') }}</span> @endif
                        </div>
                    </td>
                    <td>
                        <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                        <div class="form-group">
                            <h4><input type="submit" name="subadminroom" value="Update" class="btn btn-default" />
                                <span data-hover="Add"></span></h4>
                        </div>
                    </td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    </tr>
                </form>
            </table>
        </main>
    </div>
</td>
</tr>
</table>
</body>
</html>
@endsection
