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
$conn = require __DIR__ . "../../authentication/mega_db.php";
$conn->query("INSERT INTO vehicles_fueling (driver,v_id,v_name,v_fueltank,fuelcost,fueling_date)
    VALUES ('$driver','$v_id','$v_name','$v_fueltank','$fuelcost','$fueling_date')") or die($conn->error);

header("location: ../driver_interface/submitted.html");

}

if(isset($_GET['edit'])){
    $id = $_GET['id'];
    $submit = true;
}