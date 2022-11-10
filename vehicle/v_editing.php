<?php
if (isset($_GET['delete'])){
    $id =$_GET['delete'];
    $mysqli->query("DELETE FROM vehicles_tbl WHERE id=$id") or die($mysqli->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";

}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
 
    $result = $mysqli->query("SELECT * FROM vehicles_tbl WHERE id=$id") or die($mysqli_error());
 
       $vehicles_tbl = $result->fetch_array();
       $v_name = $vehicles_tbl['v_name'];
       $vin = $vehicles_tbl['vin'];
       $v_branch = $vehicles_tbl['v_branch'];
       $license_plate = $vehicles_tbl['license_plate'];
       $v_year = $vehicles_tbl['v_year'];
       $v_make = $vehicles_tbl['v_make'];
       $v_model = $vehicles_tbl['v_model'];
       $v_engine = $vehicles_tbl['v_engine'];

    } 

    if(isset($vehicles_tbl['update'])){

        $id=$vehicles_tbl['id'];

        $v_name = $_POST['v_name'];
        $vin = $_POST['vin'];
        $v_branch = $_POST['v_branch'];
        $license_plate = $_POST['license_plate'];
        $v_year = $_POST['v_year'];
        $v_make = $_POST['v_make'];
        $v_model = $_POST['v_model'];
        $v_engine = $_POST['v_engine'];

        $mysqli ->query("UPDATE vehicles_tbl SET 
                                                v_name ='$v_name',
                                                vin ='$vin',
                                                v_branch ='$v_branch',
                                                license_plate ='$license_plate',
                                                v_year ='$v_year',
                                                v_make ='$v_make',
                                                v_model ='$v_model',
                                                v_engine ='$v_engine',
                                                WHERE id=$id") or die($mysqli->error);

    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    

    }