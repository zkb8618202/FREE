<?php

include("../../dp.php");

if(isset($_POST['add_devices'])){

    $name=$_POST['name'];
    $type=$_POST['type'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $unit_it_takes=$_POST['unit_it_takes'];
    $description=$_POST['description'];



    $img= $_FILES['img']['name'];
    $img1 =$_FILES['img']["tmp_name"];
    $targetfile="uploads/".$img;
    
    move_uploaded_file($img1,$targetfile);

    $insert = $con->query("INSERT INTO `devices`(`name`, `type`, `brand`, `price`, `unit_it_takes`, `description`, `img`) VALUES ('$name','$type','$brand','$price','$unit_it_takes','$description','$img')");

    if($insert){
        header("location:../../?devices=true");
    }else{
        echo "Error";
    }



}
if(isset($_POST['add_devices'])){

    $name=$_POST['name'];
    $type=$_POST['type'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $unit_it_takes=$_POST['unit_it_takes'];
    $description=$_POST['description'];



    $img= $_FILES['img']['name'];
    $img1 =$_FILES['img']["tmp_name"];
    $targetfile="uploads/".$img;
    
    move_uploaded_file($img1,$targetfile);

    $insert = $con->query("INSERT INTO `devices`(`name`, `type`, `brand`, `price`, `unit_it_takes`, `description`, `img`) VALUES ('$name','$type','$brand','$price','$unit_it_takes','$description','$img')");

    if($insert){
        header("location:../../?devices=true");
    }else{
        echo "Error";
    }



}
if(isset($_POST['edit_devices'])){

    
    $id=$_POST['id'];
    $name=$_POST['name'];
    $type=$_POST['type'];
    $brand=$_POST['brand'];
    $price=$_POST['price'];
    $unit_it_takes=$_POST['unit_it_takes'];
    $description=$_POST['description'];



    $img= $_FILES['img']['name'];
    $img1 =$_FILES['img']["tmp_name"];
    $targetfile="uploads/".$img;
    
    move_uploaded_file($img1,$targetfile);

    $update = $con->query("UPDATE `devices` SET `name`='$name',`type`='$type',`brand`='$brand',`price`='$price',`unit_it_takes`='$unit_it_takes',`description`='$description',`img`='$img' WHERE `id`='$id'");

    if($update){
        header("location:../../?devices=true");
    }else{
        echo "Error";
    }



}


