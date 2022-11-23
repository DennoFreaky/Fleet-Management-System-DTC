<?php

if(isset($_POST['garage_submit'])){
    $g_id = $_POST['g_id'];
    $g_name = $_POST['g_name'];
    $g_location = $_POST['g_location'];
    $g_address = $_POST['g_address'];
    $phone_number = $_POST['phone_number'];
    $g_link = $_POST['g_link'];

    $_SESSION['message_drivers'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO garage_tbl (g_id,g_name,g_location,g_address,phone_number,g_link)
        VALUES ('$g_id','$g_name','$g_location','$g_address','$phone_number','$g_link')") or die($conn->error);


header("location: ../authentication/submitted.html");
}


if(isset($_POST['vendor_submit'])){
    $vendor_id = $_POST['vendor_id'];
    $vendor_name = $_POST['vendor_name'];
    $vendor_location = $_POST['vendor_location'];
    $vendor_address = $_POST['vendor_address'];
    $phone_number = $_POST['phone_number'];
    $weblink = $_POST['weblink'];
    $vendor_link = $_POST['vendor_link'];

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO vendors_tbl (vendor_id,vendor_name,vendor_location,vendor_address,phone_number,weblink,vendor_link)
        VALUES ('$vendor_id','$vendor_name','$vendor_location','$vendor_address','$phone_number','$weblink','$vendor_link')") or die($conn->error);
header("location: ../authentication/submitted.html");
}