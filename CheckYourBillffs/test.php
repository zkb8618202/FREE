<?php

include("dp.php");

$check_email = $con->query("SELECT * FROM 'users' WHERE 'email' = 'sufyanmemon2003@gmail.com'");

$count = mysqli_num_rows ($check_email);

echo $count;

?>