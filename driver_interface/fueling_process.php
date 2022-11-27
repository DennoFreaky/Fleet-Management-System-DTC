<?php
$id=0;
$submit=false;
$vname='';
$v_id='';

if(isset($_POST['submit'])){
$id = $_POST['id'];

$fueling_date = $_POST['fueling_date'];
$driver = $_POST['driver'];
$v_id = $_POST['v_id'];
$v_name = $_POST['v_name'];
$v_fueltank = $_POST['v_fueltank'];
$fuelcost = $_POST['fuelcost'];
$fuel_after = $_POST['fuel_after'];
$mileage = $_POST['mileage'];

$conn = require __DIR__ . "../../authentication/mega_db.php";
$conn->query("INSERT INTO vehicles_fueling (driver,v_id,v_name,v_fueltank,fuelcost,fueling_date,fuel_after)
    VALUES ('$driver','$v_id','$v_name','$v_fueltank','$fuelcost','$fueling_date',('$mileage' - '$fuel_after') )") or die($conn->error);


$conn->query("UPDATE vehicles_tbl SET mileage='$mileage' WHERE v_id='$v_id'");
header("location: ../driver_interface/submitted.html");

}

if(isset($_GET['edit'])){
    $id = $_GET['id'];
    $submit = true;
}