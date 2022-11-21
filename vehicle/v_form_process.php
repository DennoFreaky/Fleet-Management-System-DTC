<?php
$id=0;
$update=false;
$v_id = '';
$vin = '';
$v_name = '';
$license_plate = '';
$v_branch = '';
$mileage = '';
$status = '';
$v_year ='';
$v_make = '';
$v_model = '';
$v_engine = '';


if(isset($_POST['submit'])){

$v_id = $_POST['v_id'];
$vin = $_POST['vin'];
$v_name = $_POST['v_name'];
$license_plate = $_POST['license_plate'];
$v_branch = $_POST['v_branch'];
$mileage = $_POST['mileage'];
$status = $_POST['status'];
$v_year = $_POST['v_year'];
$v_make = $_POST['v_make'];
$v_model = $_POST['v_model'];
$v_engine = $_POST['v_engine'];

$conn = require __DIR__ . "../../authentication/mega_db.php";

if ($conn ->connect_error){
    
    die('Connection Failed : '.$conn->connect_error);
}else{
    $stmt = $conn->prepare("INSERT INTO vehicles_tbl(v_id,vin,v_name,license_plate,v_branch,mileage,status, v_year,v_make,v_model,v_engine)
            values(?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param("sssssssssss",$v_id,
                                            $vin,
                                            $v_name,
                                            $license_plate,
                                            $v_branch,
                                            $mileage,
                                            $status,
                                            $v_year,
                                            $v_make,
                                            $v_model,
                                            $v_engine);
                                           
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
       $v_id = $vehicles_tbl['v_id'];
       $vin = $vehicles_tbl['vin'];
       $v_name = $vehicles_tbl['v_name'];
       $license_plate = $vehicles_tbl['license_plate'];
       $v_branch = $vehicles_tbl['v_branch'];
       $mileage = $vehicles_tbl['mileage'];
       $status = $vehicles_tbl['status'];
       $v_year = $vehicles_tbl['v_year'];
       $v_make = $vehicles_tbl['v_make'];
       $v_model = $vehicles_tbl['v_model'];
       $v_engine = $vehicles_tbl['v_engine'];

       header("location: ../vehicle/all_vehicles.php");
    
    } 


    if(isset($_POST['update'])){

        $id = $_POST['id'];
        $vin = $_POST['vin'];
        $v_name = $_POST['v_name'];
        $license_plate = $_POST['license_plate'];
        $v_branch = $_POST['v_branch'];
        $v_year = $_POST['v_year'];
        $v_make = $_POST['v_make'];
        $v_model = $_POST['v_model'];
        $v_engine = $_POST['v_engine'];


        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE vehicles_tbl SET  vin='$vin',v_name='$v_name',license_plate='$license_plate',v_branch='$v_branch',v_year='$v_year',v_make='$v_make',v_model='$v_model',v_engine= '$v_engine' WHERE id = $id") or die($conn->error);

    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: ../vehicle/all_vehicles.php");
        
    }