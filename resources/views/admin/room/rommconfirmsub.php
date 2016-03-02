<?php


$iod = $_REQUEST['id'];

DB::table('roomreservation')
    ->where('id',$iod )
    ->update(['status' => "Confirmed",
             'message' => "Shazna"
            ]);


header("Location: http://localhost:8000/roomconfirm");
?>