
<?php
$mysqli = require __DIR__ . "../../authentication/mega_db.php";
$data = "SELECT * FROM vehicles_tbl";
$v_data = $mysqli->query($data);
$data1 = "SELECT * FROM drivers_tbl";
$d_data = $mysqli->query($data1);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>DIGI_TRANS</title>

</head>
<body class="">
    <div class="d-flex">
        <?php require '../side_top_bar/sidebar.php';?>
        <div class="col"  >
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <?php 
                if (isset($_SESSION['message_truck'])):?>
                <div class="alert alert-<?= $_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message_truck'];
                unset($_SESSION['message_truck']);
                ?>
                <?php endif ?>
                <?php require '../vehicle/v-assignbar.php';?>
                <div class="row">
                    
                </div>
            </div>
        </div>
    </div>
                                
</body>

</html>