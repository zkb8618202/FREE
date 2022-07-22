<?php

session_start();
include("../../dp.php");

include("../../dp.php");

if(isset($_POST['profile'])){

    $uid=$_SESSION['uid'];
    $designation=$_POST['designation'];
    $personalinformation=$_POST['personalinformation'];
    // $picture=$_POST['picture'];
    $mobile=$_POST['mobile'];
    $fullname=$_POST['fullname'];
    $location=$_POST['location'];



    $img= $_FILES['picture']['name'];
    $img1 =$_FILES['picture']["tmp_name"];
    $targetfile="uploads/". $img;
    move_uploaded_file($img1,$targetfile);

    $insert = $con->query("INSERT INTO `profile`( `uid`, `designation`, `personalinformation`, `picture`, `mobile`, `fullname`, `location`) 
    VALUES ('$uid','$designation','$personalinformation','$img','$mobile','$fullname','$location')");

    if ($insert){
        header("location:../../?profile=true");
    } else {
        echo "Error";
    }



}