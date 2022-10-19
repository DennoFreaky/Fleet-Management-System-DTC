<?php

$id=0;
$update=false;
$v_name = '';
$vin = '';
$v_reg ='';
$v_branch = '';
$license_plate = '';
$v_year ='';
$v_make = '';
$v_model = '';
$v_engine = '';
$v_style = '';


if(isset($_POST['submit'])){


$v_name = $_POST['v_name'];
$vin = $_POST['vin'];
$v_reg = $_POST['v_reg'];
$v_branch = $_POST['v_branch'];
$license_plate = $_POST['license_plate'];
$v_year = $_POST['v_year'];
$v_make = $_POST['v_make'];
$v_model = $_POST['v_model'];
$v_engine = $_POST['v_engine'];
$v_style = $_POST['v_style'];

$conn = require __DIR__ . "../../authentication/mega_db.php";
if ($conn ->connect_error){
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("insert into vehicles_tbl(v_name,vin,v_reg,v_branch,license_plate, v_year,v_make,v_model,v_engine,v_style)
            values(?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssssss", $v_name,
                                           $vin,
                                           $v_reg,
                                           $v_branch,
                                           $license_plate,
                                           $v_year,
                                           $v_make,
                                           $v_model,
                                           $v_engine,
                                           $v_style);
            $stmt->execute();
            header("location: ../authentication/submitted.html");
            $stmt->close();
            $conn->close();
}
}
if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("DELETE FROM vehicles_tbl WHERE id=$id") or die($conn->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: ../vehicle/all_vehicles.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $result = $conn->query("SELECT * FROM vehicles_tbl WHERE id=$id") or die($conn_error());
 
       $vehicles_tbl = $result->fetch_array();
       $v_name = $vehicles_tbl['v_name'];
       $vin = $vehicles_tbl['vin'];
       $v_reg = $vehicles_tbl['v_reg'];
       $v_branch = $vehicles_tbl['v_branch'];
       $license_plate = $vehicles_tbl['license_plate'];
       $v_year = $vehicles_tbl['v_year'];
       $v_make = $vehicles_tbl['v_make'];
       $v_model = $vehicles_tbl['v_model'];
       $v_engine = $vehicles_tbl['v_engine'];
       $v_style = $vehicles_tbl['v_style'];

       header("location: ../vehicle/all_vehicles.php");
    
    } 


    if(isset($_POST['update'])){

        $id = $_POST['id'];
        
        $v_name = $_POST['v_name'];
        $vin = $_POST['vin'];
        $v_reg = $_POST['v_reg'];
        $v_branch = $_POST['v_branch'];
        $license_plate = $_POST['license_plate'];
        $v_year = $_POST['v_year'];
        $v_make = $_POST['v_make'];
        $v_model = $_POST['v_model'];
        $v_engine = $_POST['v_engine'];
        $v_style = $_POST['v_style'];


        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE vehicles_tbl SET  v_name ='$v_name',
                                                vin ='$vin',
                                                v_reg ='$v_reg',
                                                v_branch ='$v_branch',
                                                license_plate ='$license_plate',
                                                v_year ='$v_year',
                                                v_make ='$v_make',
                                                v_model ='$v_model',
                                                v_engine ='$v_engine',
                                                v_style ='$v_style'
                                                WHERE id=$id") or die($conn->error);

    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: ../vehicle/all_vehicles.php");
        
    }