<?php

$window = $_POST['window'];
$side_mirrors = $_POST['side_mirrors'];
$door = $_POST['door'];
$reflector = $_POST['reflector'];
$rims = $_Post['rims'];
$tirepressure = $_Post['tirepressure'];
$headlight = $_POST['headlight'];
$highbeam = $_POST['highbeam'];
$hazard = $_POST['hazard'];
$turnsignals = $_POST['turnsignals'];
$seatbelt = $_POST['seatbelt'];
$windshield_wipers = $_POST['windshield_wipers'];
$gauges = $_POST['gauges'];

$conn = require __DIR__ . "../../authentication/mega_db.php";
$conn->query("INSERT INTO vehicles_inspection (window,side_mirrors,door,reflEctor,rims,tirepressure,headlight,highbeam,hazard,turnsignals,seatbelt,windshield_wipers,gauges)
    VALUES ('$window','$side_mirrors','$doors','$reflector','$rims','$tirepressure','$headlight','$highbeam','$hazard','$turnsignals','$seatbelt','$windshield_wipers','$gauges')") or die($conn->error);

header("location: ../authentication/submitted.html");

