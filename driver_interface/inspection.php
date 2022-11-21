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
<body>
    <div class="d-flex">
        <div class="col">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="mobilehomepage" id="mobilehomepage">
                <div class="rowtwo"> 
                    <div class="row">
                        <div class="col m-1 rounded bg-transparent">
                            <?php require_once '../driver_interface/inspection_process.php'; ?>
                            <form class="shadow form-row" style="font-weight:bold;" id="inspection" method="POST" action="../driver_interface/inspection_process.php">
                                <?php if (isset($drivers_tbl)): ?>
                                    <input type="hidden" name="driver" value="<?= ($drivers_tbl["id_no"]) ?>"/>
                                <?php endif; ?>
                                <?php if($row1 = $status->fetch_assoc()): ?>
                                    <input type="hidden" name="status" value="<?php if($row1['window'or 'side_mirrors'or 'door'or 'reflector'or 'rims'or 'tirepressure'or 'headlight'or 'highbeam'or 'hazard'or 'turnsignals'or 'seatbelt'or 'windshield_wipers'or 'gauges'] == 'Good' or 'n/a' ){ echo "All Good" ;} else {  echo "Had Repairs Done"; } ?>"/>
                                <?php endif; ?>
                                <?php if($row = $allvehicle->fetch_assoc()): ?>
                                    <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>"/>
                                    <input type="hidden" name="v_name" value="<?php echo $row['v_name']; ?>"/>
                                    <?php date_default_timezone_set('Africa/Nairobi') == $date; $date = date("Y-m-d\TH:i"); ?>
                                    <input type="hidden" name="inspection_time" value="<?= $date ?>"/>
                                <?php endif; ?>
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <h4 class="p-3 text-center">INSPECTION CHECKLIST</h4>
                                
                                <?php if($submit == true): ?>
                                    <h6 class="text-center text-danger">Inspection in progress..</h6>
                                <?php else: ?>
                                <?php endif; ?>
                                <hr>
                                <h5 class="p-2 text-center">Walk-around Inspection</h5>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Window</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="window" value="Good" id="good" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="window" value="need repair" id="radio" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="window" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Side Mirrors</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="side_mirrors" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="side_mirrors" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="side_mirrors" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Door</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="door" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="door" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="door" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Reflectors</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="reflector" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="reflector" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="reflector" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h6 class="p-2 text-center">Tires</h6>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Rims</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="rims" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="rims" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="rims" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Tire Pressure</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="tirepressure" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="tirepressure" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="tirepressure" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="p-2 text-center">Lights and Signals</h5>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Headlight</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="headlight" value="Good" id="good" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="headlight" value="need repair" id="needrepair" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="headlight" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>High Beam</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="highbeam" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="highbeam" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="highbeam" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Hazard</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="hazard" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="hazard" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="hazard" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Turn Signals</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="turnsignals" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="turnsignals" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="turnsignals" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <h5 class="p-2 text-center">Vehicle Interior</h5>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Seat-Belt</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="seatbelt" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="seatbelt" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="seatbelt" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Windshield & Wipers</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="windshield_wipers" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="windshield_wipers" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="windshield_wipers" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm form-group m-5">
                                    <div class="row">
                                        <div class="col-3 text-center">
                                            <H6>Gauges</H6>
                                        </div>
                                        <div class="col-3 text-center">
                                            <label for="good">Good</label><br>
                                            <input type="radio" class="bghover bg-light" name="gauges" value="Good" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="needrepair" style="width:100px;">Need repair</label><br>
                                            <input type="radio" class="bghover bg-light" name="gauges" value="need repair" id="window" placeholder=""/>
                                        </div>
                                        <div class="col-3 text-center">      
                                            <label for="n/a">N/A</label><br>
                                            <input type="radio" class="bghover bg-light" name="gauges" value="not_assigned" id="n/a" placeholder=""/>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center">
                                <?php if($submit == true): ?>
                                    <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">SUBMIT</button>
                                <?php else: ?>
                                <?php endif; ?>
                                </div>
                            </form>
                        </div> 

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>