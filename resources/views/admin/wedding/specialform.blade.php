<!DOCTYPE HTML>
<html>
<head>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Amalya Reach Holiday Resort | Wedding Banquet Halls Sri Lanka | Parties | Events</title>
    <link rel="stylesheet" href="/css/global.css">
    <link class="colour" rel="stylesheet" href="/css/colour-gold.css">
    <link class="pattern" rel="stylesheet" href="/css/pattern-china.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <script type="text/javascript">
        function updateconfirm(iid)
        {
            var ioid = iid;
            <?php
                  $get_id = Request::input('id');

           // $iod = $_GET["id"];
            //$iod = $_REQUEST['id'];

            //$no = $_SERVER["QUERY_STRING"];
            DB::table('wedreservation')
                    ->where('id',$get_id )
                    ->update(['flexibility' => "Confirmed"]);

            ?>
            alert("Bokking ID " + ioid + " successfully confirmed" );
        }

        function assignplanner()
        {
            <?php
            $rid = Request::input('id');
            $edate = Request::input('eventdate');
            $hall = Request::input('halltype');

                    $tabledata = DB::table('wedreservation')
                                           ->where('status', 'Confirmed' )
                                           ->where('eventdate', $edate )
                                           ->where('halltype', $hall )
                                           ->get();
                    if ($tabledata == null)
                    {
                         DB::table('wedreservation')
                    ->where('id',$rid )
                    ->update(['status' => "Available"]);


                    }
                    else
                    {
                        DB::table('wedreservation')
                                ->where('id',$rid )
                                ->update(['status' => "Not available"]);
                    }
                    ?>

        }

    </script>
</head>
<body>
<h2>Customer Wedding Hall Booking Requests </h2>
<!--unconfirmed reservations showing table-->
<main>
<!--<?php $tabledata = DB::table('wedreservation')->get(); ?> //to retrieve all the raws-->
<?php $tabledata = DB::table('wedreservation')->get(); ?>

    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>

            <th>Pax</th>
            <th>Event Date</th>
            <th>Event Type</th>
            <th>HallType</th>




            <th>Availability Status</th>
            <th>Confirmation status</th>
            <th>Availability Cheking</th>
            <th>Make Confirmation</th>
            <th>Send Confirmation Email</th>
        </thead>
        <tbody>
        <?php
        foreach($tabledata as $row)
        {
        ?>
        <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->firstname; ?></td>
        <td><?php echo $row->email; ?></td>

        <td><?php echo $row->pax; ?></td>
        <td><?php echo $row->eventdate; ?></td>
        <td><?php echo $row->eventtype; ?></td>
        <td><?php echo $row->halltype; ?></td>




        <td><?php echo $row->flexibility; ?></td>
        <td><?php echo $row->status; ?></td>


            <form action="{{route('/adminspecialform')}}" role="form" method="post">

            <td>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <input type="text"  hidden="hidden" placeholder="<?php $row->id ?>" value="<?php echo $row->id ?>" name="id"/>
                    <input type="text"  hidden="hidden" placeholder="<?php $row->eventdate ?>" value="<?php echo $row->eventdate ?>" name="eventdate"/>
                    <input type="text"  hidden="hidden" placeholder="<?php $row->halltype ?>" value="<?php echo $row->halltype ?>" name="halltype"/>
                    <h4><input type="submit" name="subb" value="Check Availability" class="btn btn-default"  />
                        <span data-hover="Add"></span></h4>

                </div>
            </td>


            <td>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <input type="text"  hidden="hidden" placeholder="<?php $row->id ?>" value="<?php echo $row->id ?>" name="idd"/>
                    <h4><input type="submit" name="sub" value="Confirm Request" class="btn btn-default" >
                        <span data-hover="Add"></span></h4>
                </div>
            </td>

             <td>
                     <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class="form-group">
                        <input type="text"  hidden="hidden" placeholder="<?php $row->email ?>" value="<?php echo $row->email ?>" name="email"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->eventdate ?>" value="<?php echo $row->eventdate ?>" name="eventdate"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->halltype ?>" value="<?php echo $row->halltype ?>" name="halltype"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->sessionn ?>" value="<?php echo $row->sessionn ?>" name="sessionn"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->firstname ?>" value="<?php echo $row->firstname ?>" name="firstname"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->eventtype ?>" value="<?php echo $row->eventtype ?>" name="eventtype"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->pax ?>" value="<?php echo $row->pax ?>" name="pax"/>
                        <input type="text"  hidden="hidden" placeholder="<?php $row->sessionn ?>" value="<?php echo $row->sessionn ?>" name="idd"/>

                        <h4><input type="submit" name="subbb" value="Send Confirmation Email" class="btn btn-default" >
                            <span data-hover="Add"></span></h4>
                    </div>
                </td>
        </form>

        </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</main>
<!--end of unconfirmed reservations showing table-->

</body>
</html>
