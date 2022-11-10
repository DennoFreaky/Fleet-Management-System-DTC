<?php

$v_fueltank = $_POST['v_fueltank'];
$fuelcost = $_POST['fuelcost'];
$conn = require __DIR__ . "../../authentication/mega_db.php";
$conn->query("INSERT INTO vehicles_fueling (v_fueltank,fuelcost)
    VALUES ('$v_fueltank','$fuelcost')") or die($conn->error);

header("location: ../authentication/submitted.html");

