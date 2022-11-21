<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/driverinterface.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <link rel="stylesheet" href="../css/flipper.css">
    <title>DIGI_TRANS</title>

</head>
<body>
    <div class="d-flex">
        <div class="col">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="mobilehomepage" id="mobilehomepage">
                <div class="rowtwo">
                    <h4 class="fw-bold text-center">VEHICLE INFORMATION</h4>
                </div>
                <div class="row shadow" style="">
                    <div class="col my-2 text-start">
                        <h6>IDENTIFICATION DETAILS</h6><hr>
                        <?php if($row = $allvehicle->fetch_assoc()): ?>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Name:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['v_name']; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Identification_Number:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['vin']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>License_Plate:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['license_plate']; ?></h6>
                            </div>
                        </div><hr>
                        <h6>GENERAL INFORMATION</h6><hr>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Mileage:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['mileage']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Status:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['status']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Year:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['v_year']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>make:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['v_make']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Model:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['v_model']; ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-3 text-start">
                                <h6 class="m-2"><b>Engine:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><?php echo $row['v_engine']; ?></h6>
                            </div>
                        </div><hr>
                        <?php endif; ?>
                        <h6>SPECIFIC INFORMATION</h6><hr>
                    </div>
                    <div class="col-sm my-2 text-center">
                        <h6>RECENT ACTIVITIES</h6><hr>
                        <?php if(($row1 = $fueling->fetch_assoc()).($row2 = $inspection->fetch_assoc())): ?>
                        <div class="row">
                            <div class="col-1 text-start">
                                <h6 class="m-2"><b>Fueling:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><b class="text-success">Date&Time: </b><?php if($row1['fueling_date'] == null){ echo "none" ;} else { echo $row1['fueling_date'];} ?> </h6>
                                <h6 class="m-2"><b class="text-success">Litres(L): </b><?php  if($row1['v_fueltank'] == null){ echo "none" ;} else { echo $row1['v_fueltank']; }?> </h6>
                                <h6 class="m-2"><b class="text-success">Cost(Ksh): </b><?php if($row1['fuelcost'] == null){ echo "none" ;} else { echo $row1['fuelcost']; }?> </h6>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-1 text-start">
                                <h6 class="m-2"><b>Last Inspection:</b></h6>
                            </div>
                            <div class="col text-end">
                                <h6 class="m-2"><b class="text-success">Date: </b><?php if($row2['inspection_time'] == null){ echo "none" ;} else {  echo $row2['inspection_time']; } ?> </h6>
                                <h6 class="m-2"><b class="text-success">Status: </b><?php if($row2['window'or 'side_mirrors'or 'door'or 'reflector'or 'rims'or 'tirepressure'or 'headlight'or 'highbeam'or 'hazard'or 'turnsignals'or 'seatbelt'or 'windshield_wipers'or 'gauges'] == 'Good' or 'n/a' ){ echo "All Good" ;} else {  echo "Had Repairs Done"; } ?>
                            </div>
                        </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-md-6 my-2 text-center" >      
                        <h4>VEHICLE IMAGE</h4><hr>
                        <div class="row" style="overflow:hidden;">
                            <img src="../pics/scania.png"/>
                            <div class="col text-center">
                                <p>Vehicle Image </p>
                            </div>
                            <div class="col text-center">
                                <p></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>