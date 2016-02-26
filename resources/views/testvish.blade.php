<?php

$tempid = $_REQUEST['pid'];
echo "$tempid";
DB::table('Dining')->where('Id', '=', $tempid)->delete();
header("Location: http://localhost:8000/diningsummary");
 ?>
