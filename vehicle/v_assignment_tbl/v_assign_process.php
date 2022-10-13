<?php
$id=0;
$update=false;
$driver='';
$driver='';


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn = require __DIR__ . "../../../authentication/mega_db.php";
    $conn->query("DELETE FROM vehicles_tbl WHERE id=$id") or die($conn->error());
    header("location: ../../vehicle/v_unassigned.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $conn = require __DIR__ . "../../../authentication/mega_db.php";
    $result = $conn->query("SELECT * FROM vehicles_tbl WHERE id=$id") or die($conn_error());
       
       $vehicles_tbl = $result->fetch_array();
       $driver = $vehicles_tbl['driver'];
       header("location: ../../vehicle/v_unassigned.php");
    
    } 

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $driver = $_POST['driver'];
        $conn = require __DIR__ . "../../../authentication/mega_db.php";
        $conn ->query("UPDATE vehicles_tbl SET  driver ='$driver'
                                                WHERE id=$id") or die($conn->error);

        header("location: ../../vehicle/v_unassigned.php");  

    }