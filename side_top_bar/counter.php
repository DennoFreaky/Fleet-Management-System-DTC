<?php
$sql = $mysqli->query("SELECT * FROM vehicles_tbl");
$rowcount = mysqli_num_rows($sql);

$sql1 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ");
$rowcount1 = mysqli_num_rows($sql1);

$sql2 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver !='none' ");
$rowcount2 = mysqli_num_rows($sql2);

$sql3 = $mysqli->query("SELECT * FROM drivers_log WHERE v_name='none' ");
$rowcount3 = mysqli_num_rows($sql3);