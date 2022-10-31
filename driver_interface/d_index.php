<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_DRIVER</title>

</head>
<body class="mobile" style="height:100vh;">
    <div class="d-flex">
        <div class="col">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="homepage row" id="mobilehomepage">
                <div class="col-sm rowtwo">
                    <div class="row"  style="overflow:hidden;">  
                        <div class="bg-secondary col m-left" value="Vehicle">
                            <a href="../driver_interface/vehicle_index.php">
                                <div class="row">
                                    <div class="col-4 bg-transparent text-center py-3 bg-light">
                                        <img src="../pics/pngwing.com.png" style="height:45px;">
                                    </div>
                                    <div class="col bg-transparent text-start py-4 bg-light">
                                        <h6 class="text-light" style="">Vehicle Assigned</h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="bg-secondary col m-right" value="Vehicle">
                            <a href="../driver_interface/vendors_garage.php">
                                <div class="row">
                                    <div class="col bg-transparent text-end py-4 bg-light">
                                        <h6 class="text-light" style="">Vendors & Garage</h6>
                                    </div>
                                    <div class="col-4 bg-transparent text-center py-3 bg-light">
                                        <img src="../pics/pngwing.com.png" style="height:45px;">
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>   
            </div>
            
            <div class="mobilehomepage row" id="mobilehomepage">
                <div class="col-sm">
                    <div class="row">
                        <div class="col bg-transparent text-start py-3 rounded-start bg-light">
                            <h6 class="fa fa-car " style=""> Vehicle:</h6>
                        </div>
                        <div class="col-4 bg-transparent text-end py-3 rounded-start bg-light">
                           <h7 class="" style="">vehicle name</h7>
                        </div>
                    </div>
                </div>
                <div class="col-sm">
                    <div class="row">
                        <div class="col bg-transparent text-start py-3 rounded-start bg-light">
                            <h6 class="fa fa-gears" style=""> Last service:</h6>
                        </div>
                        <div class="col-4 bg-transparent text-end py-3 rounded-start bg-light">
                           <h7 class="" style="">last service date</h7>
                        </div>
                    </div>
                </div>    
                <div class="col-sm">
                    <div class="row">
                        <div class="col bg-transparent text-start py-3 rounded-start bg-light">
                            <h6 class="fa fa-gears" style=""> Next service:</h6>
                        </div>
                        <div class="col-4 bg-transparent text-end py-3 rounded-start bg-light">
                           <h7 class="" style="">Next service date</h7>
                        </div>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>