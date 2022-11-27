<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/driverinterface.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_DRIVER</title>

</head>
<style>
.vdata{
    font-family: "Canva Sans", "Noto Sans Variable";
    font-weight:700;
    font-size: 24px;
    line-height:50px;
}
</style>
<body class="">
    <div class="d-flex ">
        <div class="col-12">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="row">
                <div class="col-md-1 rowtwo">
                </div>
                <div class="col rowtwo">
                    <div class="mobilehomepage row" id="mobilehomepage">
                        <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                                <?php if($row = $allvehicle->fetch_assoc()): ?>
                                <?php endif; ?>
                                <a href="../driver_interface/fueling.php?edit=<?php echo $row['id']; ?>">
                                        <div class="col bg-transparent p-2 text-center rounded-start bg-light">
                                                <h3 class="text-dark vdata" style="font-size:30px;margin:60px;padding:;">START FUELING</h3>
                                        </div>
                                </a>
                        </div>  
                        <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                                <a href="../driver_interface/inspection.php?edit=<?php echo $row['id']; ?>">
                                        <div class="col bg-transparent p-2 text-center rounded-start bg-light">
                                                <h3 class="text-dark vdata" style="font-size:30px;margin:60px;padding:;">PERFORM INSPECTION</h3>
                                        </div>
                                </a>
                        </div>
                        <div class="row shadow m-1"  style="height:250px;overflow:hidden;">  
                                <a href="../driver_interface/v_detail.php">
                                       <div class="col bg-transparent p-2 text-center rounded-start bg-light">
                                                <h3 class="text-dark vdata" style="font-size:30px;margin:60px;padding:;">VIEW VEHICLE DETAILS</h3>
                                        </div>
                                </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 rowtwo">
                        <img src="../pics/960x0.jpg">
                </div>
            </div>
        </div>
    </div>
</body>
</html>