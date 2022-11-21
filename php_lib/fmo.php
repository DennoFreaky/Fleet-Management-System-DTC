<?php


if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $fmoid = $_POST['fmoid'];
    $branch = $_POST['branch'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $password_hash = password_hash($_POST["password_hash"], PASSWORD_DEFAULT);

    $_SESSION['message_drivers'] = "Record has been saved!";
    $_SESSION['msg_type'] = "success";

    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("INSERT INTO fmo_tbl (fname,sname,fmoid,branch,address,phone,email,password_hash)
        VALUES ('$fname','$sname','$fmoid','$branch', '$address', '$phone','$email','$password_hash')") or die($conn->error);


header("location: ../authentication/submitted.html");
}

if (isset($_GET['delete'])){
    $id =$_GET['delete'];
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $conn->query("DELETE FROM fmo_tbl WHERE id=$id") or die($conn->error());
    $_SESSION['message'] = "Record has been deleted!";
    $_SESSION['msg_type'] = "danger";
    header("location: ../php_lib/fmotbl.php");

}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $conn = require __DIR__ . "../../authentication/mega_db.php";
    $result = $conn->query("SELECT * FROM fmo_tbl WHERE id=$id") or die($conn_error());
 
       $fmotbl = $result->fetch_array();
       $fname = $fmotbl['fname'];
       $sname = $fmotbl['sname'];
       $fmoid = $fmotbl['fmoid'];
       $branch = $fmotbl['branch'];
       $address = $fmotbl['address'];
       $phone = $fmotbl['phone'];
       $email = $fmotbl['email'];
       header("location: ../php_lib/fmotbl.php");
    } 


    if(isset($_POST['update'])){

        $id=$_POST['id'];

        $fname = $_POST['fname'];
        $sname = $_POST['sname'];
        $fmoid = $_POST['fmoid'];
        $branch = $_POST['branch'];
        $address = $_POST['address'];
        $phone = $_POST['phone'];
        $email =$_POST['email'];

        $conn = require __DIR__ . "../../authentication/mega_db.php";
        $conn ->query("UPDATE fmo_tbl SET fname='$fname',sname='$sname',fmoid='$fmoid',branch='$branch',address='$address',phone ='$phone',email='$email' WHERE id=$id") or die($conn->error);
    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: ../php_lib/fmotbl.php");
    }
