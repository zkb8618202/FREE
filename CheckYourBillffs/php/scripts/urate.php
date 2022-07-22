<?php

include("../../dp.php");


if (isset($_POST['update_rates'])) {

    
    $id = $_POST['id'];
    $unit = $_POST['unit'];
    $rate = $_POST['rate'];
    $date = date('Y-m-d');
   
    $update = $con->query("UPDATE `rates` SET `unit`='$unit',`rate`='$rate',`date`='$date' WHERE id='$id'");

    if ($update) {
        header("location:../../?rate=true");
    } else {
        echo "Error";
    }
}