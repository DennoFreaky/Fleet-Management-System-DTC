<?php
$sql = $mysqli->query("SELECT * FROM vehicles_tbl");
$rowcount = mysqli_num_rows($sql);

$sql1 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'no_driver' ");
$rowcount1 = mysqli_num_rows($sql1);

$sql2 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver !='no_driver' ");
$rowcount2 = mysqli_num_rows($sql2);

$sql3 = $mysqli->query("SELECT * FROM drivers_log WHERE vname='none' ");
$rowcount3 = mysqli_num_rows($sql3);