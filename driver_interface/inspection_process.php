<?php
$id=0;
$submit=false;


if(isset($_POST['submit'])){
$id = $_POST['id'];

$driver = $_POST['driver'];
$inspection_time = $_POST['inspection_time'];
$status = $_POST['status'];
$mileage = $_POST['mileage'];

$v_id = $_POST['v_id'];
$v_name = $_POST['v_name'];
$window = $_POST['window'];
$side_mirrors = $_POST['side_mirrors'];
$door = $_POST['door'];
$reflector = $_POST['reflector'];
$rims = $_POST['rims'];
$tirepressure = $_POST['tirepressure'];
$headlight = $_POST['headlight'];
$highbeam = $_POST['highbeam'];
$hazard = $_POST['hazard'];
$turnsignals = $_POST['turnsignals'];
$seatbelt = $_POST['seatbelt'];
$windshield_wipers = $_POST['windshield_wipers'];
$gauges = $_POST['gauges'];

$conn = require __DIR__ . "../../authentication/mega_db.php";
$conn->query("INSERT INTO vehicles_inspection (driver,inspection_time,v_id,v_name,window,side_mirrors,door,reflector,rims,tirepressure,headlight,highbeam,hazard,turnsignals,seatbelt,windshield_wipers,gauges)
    VALUES ('$driver','$inspection_time','$v_id','$v_name','$window','$side_mirrors','$door','$reflector','$rims','$tirepressure','$headlight','$highbeam','$hazard','$turnsignals','$seatbelt','$windshield_wipers','$gauges')") or die($conn->error);

$conn ->query("UPDATE vehicles_tbl SET status='$status',mileage = '$mileage' WHERE v_id=$v_id") or die($conn->error);
header("location: ../driver_interface/submitted.html");
}

if(isset($_GET['edit'])){
    $id = $_GET['id'];
    $submit = true;
    
}

