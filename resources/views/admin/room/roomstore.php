<?php
/**
 * Created by PhpStorm.
 * User: Shazna
 * Date: 3/21/2016
 * Time: 9:25 PM
 */

header('Content-Type: text/xml');
echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
echo '<response>';


$roomtype = $_GET['roomtype'];


if (isset($roomtype))
{
    echo "selected roomis " . $roomtype;
}



echo '</response>';



?>