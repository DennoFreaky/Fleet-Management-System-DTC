<?php
$conn = require __DIR__ . "../../authentication/mega_db.php";
if ($conn ->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}

$sql = "SELECT v_name,license_plate FROM vehicles_tbl ORDER BY license_plate";
if ($result=mysqli_query($conn, $sql)){
    //return no of rows
    $rowcount = mysqli_num_rows($result);
    printf("%d .\n", $rowcount);
    mysqli_free_result($result);

    mysqli_close($conn);
}