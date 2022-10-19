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
            <div class="container py-5" id="newform">
                <div class="my-1">
                    <h4 class="fw-bold">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-md shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Vehicle status</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            
                            <div class="col m-1">
                            <a href="../vehicle/all_vehicles.php">All vehicles</a>
                            </div>

                            <div class="col  m-1 text-end">
                                <h5 class=" text-primary">
                                <?php if ($rowcount == 0) { ?>
                                    <h6 class="m-2 text-success"><?php echo $rowcount ?> </h6>
                                <?php }else{ ?>
                                    <h6 class="m-2 text-primary"> <?php echo $rowcount ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="">Active</a>
                            </div>
                            <div class="col m-1 text-end">
                                <p id="cpm">Details</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="">Out of service</a>
                            </div>
                            <div class="col m-1 text-end">
                                <p class="">Details</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Fuel cost</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Service/Repair cost</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="row">
                            <div class="col-md shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Service Reminders</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Vehicle Overdue</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">5</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Due-soon</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2">3</p>
                                        </div>
                                    </div>
                                </a>
                                <div class="row m-3 rounded-pill shadow">
                                    <div class="col text-center fw-bold m-1" style="height:140px;">
        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-sm shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Issues</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Open Issues</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">2</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Overdue</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">0</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm fw-bold shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1 text-center">
                                        <p>Vehicle - Driver assignment</p>
                                    </div>
                                </div>
                                <a href="../vehicle/v_assigned.php">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Assigned</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount2 == 0) { ?>
                                            <h6 class="m-2 text-success"><?php echo $rowcount2 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount2 ?></h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <a href="../vehicle/v_unassigned.php">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Unassigned </p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount1 == 0) { ?>
                                            <h6 class="m-2 text-success"><?php echo $rowcount1 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount1 ?></h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Service Reminders</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Vehicle Overdue-soon</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">5</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
</body>
</html>