
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA-FLEET</title>

</head>
<style>
.mynumbers{
    font-family: "Courier New", Courier, monospace;
}
.vdata{
    font-family: "Canva Sans", "Noto Sans Variable", "Noto Sans", -apple-system, "system-ui", "Segoe UI", Helvetica, Arial, sans-serif;
    font-weight:700;
    font-size: 24px;
    line-height:38px;
}
</style>
<body class="mycontainer" >

    <div class="d-flex shadow">
        
        <?php require_once '../side_top_bar/sidebar.php';?>
        <div class="col">
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <div class="row">
                    <?php require_once '../vehicle/v_form_process.php';?>
                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                    <div class="col-sm shadow m-1 rounded-top bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1" style="font-size:13px;">
                                <p><a href="../vehicle/all_vehicles.php">Vehicles list</a>&nbsp;/&nbsp;<?php echo $v_name; ?></p>
                            </div>
                        </div>
                        <div class="row" class="">
                            <div class="row" style="font-type:;">
                                <div class="col m-1 vdata" style="font-size:15px;">
                                    <p class="">Name - <span class="fw-bold text-secondary" style="font-size:13px;"><?php echo $v_name; ?> </span></p>
                                </div>
                                <div class="col m-1 vdata" style="font-size:15px;">
                                    <p class="">License Plate - <span class="fw-bold text-secondary" style="font-size:13px;"><?php echo $license_plate; ?> </span></p>
                                </div>
                                <div class="col m-1 vdata" style="font-size:15px;">
                                    <p class="">VIN - <span class="mynumbers text-secondary" style="font-size:15px;"><?php echo $vin; ?> </span></p>
                                </div>
                                <div class="col m-1 vdata" style="font-size:15px;">
                                    <p class="">Vehicle Id - <span class="fw-bold text-secondary" style="font-size:13px;"><?php echo $v_id; ?> </span></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col m-1 vdata" style="font-size:15px;">
                                    <span class="m-1">Mileage:[<a href="#"><?php echo $mileage." KM"; ?></a>]</span>
                                    <span class="m-1">Status:[<a href="#"><?php echo $status; ?></a>]</span>
                                    <span class="m-1">Next-Service:[<a href="#"><?php echo $service_after; ?></a>]</span>
                                    <span class="m-1">Branch:[<a href="#"><?php echo $v_branch; ?></a>]</span>
                                    <span class="m-1">Driver:[<a href="#"><?php echo $driver; ?></a>]</span>
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
                                    <div class="col-7 mynumbers" style="font-size:14px;">
                                        <h6 class="text-start fw-bold"><u>Ownership Cost</u><h6>
                                        <p class="text-muted fw-bold">COST/KM - 
                                        <?php 
                                        // check whether vehicle id exist in the fueling table
                                           $vehicleid = $mysqli->query("SELECT id FROM vehicles_fueling WHERE v_id=$v_id") or die($mysqli->error);
                                           if($vehicleid->num_rows !== 0){
                                        // gets the fuel price for the vehicle that is being checked
                                            $fuel_ksh = $mysqli->query("SELECT * FROM vehicles_fueling WHERE v_id = $v_id") or die($mysqli->error);
                                            $distance_travelled = $mysqli->query("SELECT * FROM vehicles_fueling WHERE v_id = $v_id ") or die($mysqli->error);
                                            $fc = $fuel_ksh-> fetch_assoc();
                                            $dt = $distance_travelled-> fetch_assoc();
                                            $ckm = $fc['fuelcost']/$dt['fuel_after'];
                                            echo $ckm;}else{echo "no vehicle cost recorded!";}
                                        ?>
                                        </p>
                                        <p class="text-muted fw-bold">
                                        FUEL COSTS - 
                                        <?php
                                        // check whether vehicle id exist in the fueling table
                                           $vehicleid = $mysqli->query("SELECT id FROM vehicles_fueling WHERE v_id=$v_id") or die($mysqli->error);
                                           if($vehicleid->num_rows !== 0){
                                        // gets the fuel total cost for the vehicle that is being checked
                                            echo $totalfcost = $mysqli->query("SELECT SUM(fuelcost) FROM vehicles_fueling WHERE v_id = $v_id") or die($mysqli->error);
                                           
                                           }
                                        ?>
                                        </p>
                                    </div>
                                    <div class="col mynumbers" style="font-size:14px;">
                                        <div class="row mx-1">
                                            <div class="col text-start fw-bold">
                                                <p class="my-2">Service</p>
                                            </div>
                                            <div class="col text-end fw-bold">
                                                <p class="text-dark my-2"><?php $scheduled_service = $service_after-$mileage; if($scheduled_service <= 0){ echo "Overdue by-".$scheduled_service." km"; }else{ echo "remaining ".$scheduled_service." km";} ?></p>
                                            </div>
                                        </div>
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