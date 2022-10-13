<?php
$id=0;
$update = false;
$fname = '';
$sname ='';
$id_no ='';
$reg_no ='';
$branch='';
$address ='';
$phone = '';
$email ='';



if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $id_no = $_POST['id_no'];
    $reg_no = $_POST['reg_no'];
    $branch = $_POST['branch'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    $_SESSION['message_drivers'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO drivers_tbl (fname,sname,id_no,reg_no,branch,address,phone,email)
        VALUES ('$fname','$sname','$id_no',$reg_no,'$branch', '$address', '$phone','$email')") or die($conn->error);


header("location: ../authentication/submitted.html");

}


if (isset($_GET['delete'])){
    $id =$_GET['delete'];
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("DELETE FROM drivers_tbl WHERE id=$id") or die($conn->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: ../php_lib/driverstable.php");

}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $result = $conn->query("SELECT * FROM drivers_tbl WHERE id=$id") or die($conn_error());
 
       $drivers_tbl = $result->fetch_array();
       $fname = $drivers_tbl['fname'];
       $sname = $drivers_tbl['sname'];
       $id_no = $drivers_tbl['id_no'];
       $reg_no = $drivers_tbl['reg_no'];
       $branch = $drivers_tbl['branch'];
       $address = $drivers_tbl['address'];
       $phone = $drivers_tbl['phone'];
       $email = $drivers_tbl['email'];
       header("location: ../php_lib/driverstable.php");
    } 

    if(isset($_POST['update'])){

        $id=$_POST['id'];

        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $reg_no = $_POST['reg_no'];
        $id_no = $_POST['id_no'];
        $branch = $_POST['branch'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];

        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE drivers_tbl SET fname='$fname',sname='$sname',id_no='$id_no',reg_no='$reg_no',branch='$branch',address='$address',phone ='$phone',email='$email' WHERE id=$id") or die($conn->error);
    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: ../php_lib/driverstable.php");
    }
