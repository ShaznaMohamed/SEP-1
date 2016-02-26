<?php


$iod = $_REQUEST['id'];

DB::table('wedreservation')
    ->where('id',$iod )
    ->update(['flexibility' => "Confirmed"]);



?>