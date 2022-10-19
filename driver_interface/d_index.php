<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_DRIVER</title>

</head>
<body class="mobile">
    <div class="d-flex ">
        <div class="col-12">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="mobilehomepage" id="mobilehomepage">
                <a href="../driver_interface/fueling.php" >
                    <div class="row rowtwo shadow ">  
                        <div class="col-4 bg-transparent text-start py-3 rounded-start bg-light">
                            <h3 class="text-dark " style="">START FUELING</h3>
                        </div>
                        <div class="col-8 bg-transparent text-start py-3  rounded-end bg-light">
                            <h3 class="text-dark  " style="">Fuel Tank (litres): </h3>
                        </div>
                    </div>
                </a>
            
                <a href="../driver_interface/inspection.php" >
                    <div class="row rowthree shadow">
                        <div class="col-4 bg-transparent text-start py-3 rounded-start bg-light">
                            <h3 class="text-dark" style="">START INSPECTION</h3>
                        </div>
                        <div class="col-8 bg-transparent text-start py-3 rounded-end bg-light">
                            <h3 class="text-dark" style="">START INSPECTION</h3>
                            <div class="d-flex" style="overflow:scroll;">
                                <img src="../pics/1291276.jpg" style="height:150px;"/>
                                <img src="../pics/1291276.jpg" style="height:150px;"/>
                            </div>
                        </div>
                    </div>
                </a>
            
                <a href="../driver_interface/vendors_garage.php" >
                    <div class="row rowthree shadow">
                        <div class="col-4 text-start shadow py-3 rounded-start bg-light">
                            <h3 class="text-dark" style="">VENDORS & GARAGE</h3>
                        </div>
                        <div class="col-8 text-start shadow py-3 rounded-end bg-light">
                            <h3 class="text-dark" style="">GARAGE</h3>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>