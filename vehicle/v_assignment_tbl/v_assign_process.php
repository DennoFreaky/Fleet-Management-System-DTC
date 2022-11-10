<?php
$id=0;
$update=false;
$v_name='';



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
       $result = $conn->query("SELECT * FROM drivers_tbl WHERE id=$id ") or die($conn_error());
       $drivers_tbl = $result->fetch_array();
       $v_name = $drivers_tbl['v_name'];

       header("location: ../../vehicle/v_unassigned.php");
       
    
}


    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $conn = require __DIR__ . "../../../authentication/mega_db.php";

        $v_name = $_POST['vname'];
        $conn ->query("UPDATE drivers_tbl SET  vname ='$v_name'
                                         WHERE id = $id ") or die($conn->error);

        header("location: ../../vehicle/v_unassigned.php");             
    }
