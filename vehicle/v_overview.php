<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>DIGI_TRANS</title>

</head>
<body class="mycontainer" >

    <div class="d-flex shadow">
        
        <?php require_once '../side_top_bar/sidebar.php';?>
        <div class="col">
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <div class="row">
                    <div class="col-sm shadow m-1 rounded-top bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1" style="font-size:13px;">
                                <p><a href="../store/truckstable.php">Vehicles list</a>/vehicle_name</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="row">
                                <div class="col m-1" >
                                    <p class="fw-bold ">vehicle_name <span class="" style="font-size:11px;">vehicle_name </span></p>    
                                </div>
                                <div class="col m-1 text-end">
                                    <p class="">Details</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-1" style="font-size:13px;">
                                    <a href="#">Mileage.</a>
                                    <a href="#">status.</a>
                                    <a href="#">branch.</a>
                                    <a href="#">Driver</a>
                                </div>
                                <div class="col m-1 text-end">
                                    <p class="">Details</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-sm m-1 bg-light">
                        <div class="row" >
                            <?php require_once '../vehicle/v_sidebar.php';?>
                            <div class="col-sm-6 fw-bold shadow m-1 rounded-bottom" >
                                <div class="row" style="font-size:13px;">
                                    <?php require_once '../vehicle/v_details.php';?>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Details</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 fw-bold shadow m-1 rounded-bottom">
                                <div class="row" style="font-size:13px;">
                                    <p class="m-1">Details</p>
                                    <hr>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <p>Details</p>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
</body>
</html>