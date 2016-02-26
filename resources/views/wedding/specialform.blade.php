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

                window.location.href = "/specialform.blade.php?id=" +ioid ;
            <?php
                  $get_id = Request::input('id');

            //$iod = $_GET["id"];

            //$no = $_SERVER["QUERY_STRING"];
            DB::table('wedreservation')
                    ->where('id',7 )
                    ->update(['flexibility' => "Confirmed"]);

            ?>
            alert("Bokking ID " + ioid + " successfully confirmed" );
        }

    </script>
</head>
<body>
<h2>Customer Reservation Requests </h2>
<!--unconfirmed reservations showing table-->
<main>
<!--<?php $tabledata = DB::table('wedreservation')->get(); ?> //to retrieve all the raws-->
<?php $tabledata = DB::table('wedreservation')->where('flexibility', 'unconfirmed')->get(); ?>

    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Pax</th>
            <th>Arrival</th>
            <th>Departure</th>
            <th>HallType</th>
            <th>Message</th>
            <th>Session</th>
            <th>Status</th>
            <th>Confirmation</th>
        </thead>
        <tbody>
        <?php
        foreach($tabledata as $row)
        {
        ?>
        <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->pax; ?></td>
        <td><?php echo $row->arrival; ?></td>
        <td><?php echo $row->departure; ?></td>
        <td><?php echo $row->halltype; ?></td>
        <td><?php echo $row->message; ?></td>
        <td><?php echo $row->sessionn; ?></td>
        <td><?php echo $row->flexibility; ?></td>


        <form >
            <td>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <h4><input type="submit" name="sub" value="Confirm Reservation" class="btn btn-default" onclick="updateconfirm('<?php echo $row-> id ?>')">
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
<!--form starts -->
<main>
<div class="centre">
<form >
    <table>
        <tr>
            <td><label for="start_time" class="control-label">Select ID</label></td>
            <td><div class="field"><input name="id" type="text" placeholder="Reservation ID" id="contact-arrival" value=""></div></td>
            <td>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <div class="form-group">
                    <h4><input type="submit" name="sub" value="Confirm Reservation" class="btn btn-default" onclick="updateconfirm()">
                        <span data-hover="Add"></span></h4>
                </div>
            </td>
        </tr>
    </table>
</form>
</div>
</main>
<!--form ends-->
<!--changes showing table-->
<h3>Confirmation Status</h3>
<?php //$tabledata = DB::table('wedreservation')->where('id', $get_id)->get(); ?>
<main>
<table>
    <thead>
    <th>Id</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Pax</th>
    <th>Arrival</th>
    <th>Departure</th>
    <th>HallType</th>
    <th>Message</th>
    <th>Session</th>
    <th>Status</th>
    </thead>
    <tbody>
    <?php
    foreach($tabledata as $row)
    {
    ?>
    <tr>
        <td><?php echo $row->id; ?></td>
        <td><?php echo $row->name; ?></td>
        <td><?php echo $row->email; ?></td>
        <td><?php echo $row->phone; ?></td>
        <td><?php echo $row->pax; ?></td>
        <td><?php echo $row->arrival; ?></td>
        <td><?php echo $row->departure; ?></td>
        <td><?php echo $row->halltype; ?></td>
        <td><?php echo $row->message; ?></td>
        <td><?php echo $row->sessionn; ?></td>
        <td><?php echo $row->flexibility; ?></td>
    </tr>
    <?php
    }
    ?>
    </tbody>
</table>
</main>
</body>
</html>