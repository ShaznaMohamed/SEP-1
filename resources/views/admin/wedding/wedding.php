<?php
/**
 * Created by PhpStorm.
 * User: Shazna
 * Date: 3/21/2016
 * Time: 8:04 PM
 */
            $selected_val='';
            if(isset($_GET['halltype'])){
                $selected_val = $_GET['halltype'];
            }
            echo $selected_val;
?>

