<?php

if(isset($_POST['garage_submit'])){
    $g_id = $_POST['g_id'];
    $g_name = $_POST['g_name'];
    $g_location = $_POST['g_location'];
    $g_address = $_POST['g_address'];
    $g_link = $_POST['g_link'];
    $oil_filter = $_POST['oil_filter'];
    $air_filter = $_POST['air_filter'];
    $cabin_filter = $_POST['cabin_filter'];
    $battery = $_POST['battery'];
    $alternator = $_POST['alternator'];
    $o2_sensor = $_POST['o2_sensor'];
    $drive_belt = $_POST['drive_belt'];
    $brakes = $_POST['brakes'];
    $speed_sensor = $_POST['speed_sensor'];
    $stabilizer = $_POST['stabilizer'];
    $ball_joint = $_POST['ball_joint'];
    $control_arm = $_POST['control_arm'];
    $shock_absobers = $_POST['shock_absobers'];
    $tier_rods = $_POST['tier_rods'];
    $spark_plug = $_POST['spark_plug'];

    $_SESSION['message_drivers'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO garage_tbl (g_id,g_name,g_location,g_address,g_link,oil_filter,air_filter,cabin_filter,	battery,	alternator,	o2_sensor,	drive_belt,	brakes,	speed_sensor,	stabilizer,	ball_joint,	control_arm	,shock_absobers,tier_rods,	spark_plug)
        VALUES ('$g_id','$g_name','$g_location','$g_address,'$g_link','$oil_filter','$air_filter','$cabin_filter','$battery',	'$alternator',	'$o2_sensor',	'$drive_belt',	'$brakes',	'$speed_sensor',	'$stabilizer',	'$ball_joint',	'$control_arm'	,'$shock_absobers',	'$tier_rods','$spark_plug')") or die($conn->error);


header("location: ../authentication/submitted.html");
}


if(isset($_POST['vendor_submit'])){
    $vendor_id = $_POST['vendor_id'];
    $vendor_name = $_POST['vendor_name'];
    $vendor_address = $_POST['vendor_address'];
    $vendor_location = $_POST['vendor_location'];
    $vendor_link = $_POST['vendor_link'];

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO vendors_tbl (vendor_id,vendor_name,vendor_location,vendor_address,vendor_link)
        VALUES ('$vendor_id','$vendor_name','$vendor_location','$vendor_address','$vendor_link')") or die($conn->error);
header("location: ../authentication/submitted.html");
}