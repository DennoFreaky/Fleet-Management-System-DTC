<?php
$id=0;
$update=false;
$vname='';
$driver='';


if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("DELETE FROM drivers_log WHERE id=$id") or die($conn->error());
    header("location: ../vehicle/v_assignment.php");
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("DELETE FROM vehicles_tbl WHERE id=$id") or die($conn->error());
    header("location: ../vehicle/v_assignment.php");
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $result = $conn->query("SELECT * FROM drivers_log WHERE id=$id") or die($conn_error());
       
       $drivers_log = $result->fetch_array();
       $vname = $drivers_log['vname'];
       header("location: ../vehicle/v_assignment.php");
    
    } 
if(isset($_GET['edit'])){
        $id = $_GET['edit'];
        $update = true;
        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $result1 = $conn->query("SELECT * FROM vehicles_tbl WHERE id=$id") or die($conn_error());
           
           $vehicles_tbl = $result1->fetch_array();
           $driver = $vehicles_tbl['driver'];
           header("location: ../vehicle/v_assignment.php");
        
    } 

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $vname = $_POST['vname'];
        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE drivers_log SET  vname ='$vname'
                                                WHERE id=$id") or die($conn->error);

        header("location: ../vehicle/v_assignment.php");  

    }

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $driver = $_POST['driver'];
        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE vehicle_tbl SET  driver ='$driver'
                                                WHERE id=$id") or die($conn->error);
    
    
        header("location: ../vehicle/v_assignment.php");
    }
