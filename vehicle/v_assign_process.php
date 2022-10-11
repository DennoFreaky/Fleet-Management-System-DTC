<?php
$id=0;
$update=false;
$fname = '';
$branch = '';
$vname = '';
$email = '';



if (isset($_GET['delete'])){
    $id = $_GET['delete'];
    $conn->query("DELETE FROM drivers_log WHERE id=$id") or die($conn->error());
    header("location: ../vehicle/v_assignment.php");
}

if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $update = true;
    $result = $conn->query("SELECT * FROM drivers_log WHERE id=$id") or die($conn_error());
       $drivers_log = $result->fetch_array();
       $fname = $drivers_log['fname'];
       $branch = $drivers_log['branch'];
       $vname = $drivers_log['vname'];
       $email = $drivers_log['email'];


       header("location: ../vehicle/v_assignment.php");
    
    } 

    if(isset($_POST['update'])){
        $id = $_POST['id'];
        $fname = $_POST['fname'];
        $branch = $_POST['branch'];
        $vname = $_POST['vname'];
        $email = $_POST['email'];
        $conn ->query("UPDATE drivers_log SET  fname ='$fname',
                                               branch ='$branch',
                                               vname ='$vname',
                                               email ='$email',

                                                WHERE id=$id") or die($conn->error);

    
        $_SESSION['message'] = "Record has been Updated!";
        $_SESSION['msg_type'] = "warning";
    
        header("location: ../vehicle/v_assignment.php");
        
    }

    