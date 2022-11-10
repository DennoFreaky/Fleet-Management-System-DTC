<?php
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