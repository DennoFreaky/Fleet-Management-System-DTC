<?php
$sql = $mysqli->query("SELECT * FROM vehicles_tbl");
$rowcount = mysqli_num_rows($sql);

$sql1 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ");
$rowcount1 = mysqli_num_rows($sql1);

$sql2 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver !='none' ");
$rowcount2 = mysqli_num_rows($sql2);

$sql3 = $mysqli->query("SELECT * FROM drivers_tbl WHERE vname='none' ");
$rowcount3 = mysqli_num_rows($sql3);

$sql4 = $mysqli->query("SELECT * FROM vehicles_inspection WHERE (window != 'Good') or (side_mirrors != 'Good') or (door != 'Good') or (reflector != 'Good') or (rims != 'Good') or (tirepressure != 'Good') or (headlight != 'Good') or (highbeam != 'Good') or (hazard != 'Good')  or (turnsignals != 'Good') or (seatbelt != 'Good') or (windshield_wipers != 'Good') or (gauges != 'Good') ORDER BY `vehicles_inspection`.`v_id` ASC");
$rowcount4 = mysqli_num_rows($sql4);

$sql5 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE status = 'All Good' ");
$rowcount5 = mysqli_num_rows($sql5);

$sql6 = $mysqli->query("SELECT * FROM vehicles_fueling WHERE id = (SELECT max(id) FROM vehicles_fueling)");
$rowcount6 = mysqli_num_rows($sql6);