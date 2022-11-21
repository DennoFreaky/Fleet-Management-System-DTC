<?php
$id=0;
$update=false;
$vname='';
$v_id='';
$fname='';


if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    
       $conn = require __DIR__ . "../../../authentication/mega_db.php";
       $result = $conn->query("SELECT * FROM drivers_tbl WHERE id=$id ") or die($conn_error());
       $result1 = $conn->query("SELECT * FROM vehicles_tbl where driver='none'") or die($conn_error());

       $drivers_tbl=$result->fetch_array();
       $fname = $drivers_tbl['fname'];

       $vehicles_tbl = $result1->fetch_array();
       $v_id = $vehicles_tbl['v_id'];
       $v_name = $vehicles_tbl['v_name'];
       header("location: ../../vehicle/v_unassigned.php");
       
    
}

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $conn = require __DIR__ . "../../../authentication/mega_db.php";

        $vname = $_POST['vname'];
        $v_id = $_POST['v_id'];
        $conn ->query("UPDATE drivers_tbl SET  vname ='$vname',v_id ='$v_id'
                                         WHERE id = $id ") or die($conn->error);

        $fname = $_POST['fname'];
        $conn ->query("UPDATE vehicles_tbl SET  driver = '$fname'
        WHERE  v_id = $v_id ") or die($conn->error);

        header("location: ../../vehicle/v_unassigned.php");             
    }
