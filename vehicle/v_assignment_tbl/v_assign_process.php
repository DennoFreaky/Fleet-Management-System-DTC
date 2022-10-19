<?php
$id=0;
$update=false;
$vname='';



if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn = require __DIR__ . "../../../authentication/mega_db.php";
    $conn->query("DELETE FROM vehicles_tbl WHERE v_name !='none'") or die($conn->error());
    header("location: ../../vehicle/v_unassigned.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    
    $conn = require __DIR__ . "../../../authentication/mega_db.php";
       $result = $conn->query("SELECT * FROM drivers_log WHERE id=$id ") or die($conn_error());
       $drivers_log = $result->fetch_array();
       $v_name = $drivers_log['v_name'];

       header("location: ../../vehicle/v_unassigned.php");
       
    
    } 


    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $conn = require __DIR__ . "../../../authentication/mega_db.php";

        $v_name = $_POST['v_name'];
        $conn ->query("UPDATE drivers_log SET  v_name ='$v_name'
                                         WHERE id = $id ") or die($conn->error);

        header("location: ../../vehicle/v_unassigned.php");             
    }
