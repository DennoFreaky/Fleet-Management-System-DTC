
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_WHOLESALER</title>

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
                <div class="align-items-center">
                        <h4 class="my-3 text-center">Vendor and Garage Regestration</h4>
                </div>
                <?php require_once '../php_lib/vendorandgarage.php' ?>
            </div>
        </div>
    </div>
</body>
</html>