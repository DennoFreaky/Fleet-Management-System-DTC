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
<body class="mobile">
    <div class="d-flex ">
        <div class="col-12">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="mobilehomepage row" id="mobilehomepage">
                
                <div class="col-sm rowtwo">
                    <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                        <a href="../driver_interface/fueling.php">
                            <div class="col bg-transparent text-center py-3 rounded-start bg-light">
                                <h3 class="text-dark " style="">Start Fueling</h3>
                                <img src="../pics/pngwing.com.png" style="height:180px;">
                            </div>
                        </a>
                    </div>
                </div>   

                <div class="col-sm rowtwo" >
                    <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                        <a href="../driver_interface/inspection.php">
                            <div class="col bg-transparent text-center py-3 rounded-start bg-light">
                                <h3 class="text-dark " style="">Start Inspection</h3>
                                <img src="../pics/pngwing.com.png" style="height:180px;">
                            </div>
                        </a>
                    </div>
                </div>  

            </div>
            <div class="mobilehomepage row" id="mobilehomepage">
                <div class="col-sm rowthree">
                    <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                        <a href="../driver_interface/fueling.php">
                            <div class="col bg-transparent text-center py-3 rounded-start bg-light">
                                <h3 class="text-dark " style="">Vehicle information</h3>
                                <img src="../pics/pngwing.com.png" style="height:180px;">
                            </div>
                        </a>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</body>
</html>