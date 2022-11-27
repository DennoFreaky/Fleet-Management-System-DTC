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
                        <div class="col-md m-1 rounded ">
                            <?php require_once '../driver_interface/inspection_process.php'; ?>
                            <form class="shadow form-row" style="font-weight:bold;" method="POST" action="../driver_interface/fueling_process.php">
                                <?php if (isset($drivers_tbl)): ?>
                                    <input type="hidden" name="driver" value="<?= ($drivers_tbl["id_no"]) ?>"/>
                                <?php endif; ?>
                                <?php if($row = $allvehicle->fetch_assoc()): ?>
                                    <input type="hidden" name="v_id" value="<?php echo $row['v_id']; ?>"/>
                                    <input type="hidden" name="v_name" value="<?php echo $row['v_name']; ?>"/>
                                    <?php date_default_timezone_set('Africa/Nairobi') == $date; $date = date("Y-m-d\TH:i"); ?>
                                    <input type="hidden" name="fueling_date" value="<?= $date ?>"/>
                                    <input type="hidden" name="fuel_after" value="<?php echo $row['mileage']; ?>"/>
                                    
                                <?php endif; ?>
                                <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                                <h4 class="p-3 text-center">FUEL ENTRY(If you dont have fuel card)</h4>
                                <?php if($submit == true): ?>
                                    <h6 class="text-center text-success fa-solid fa-gas-pump"><b>Fueling in progress..</b></h6>
                                <?php else: ?>
                                <?php endif; ?>
                                <div class="col-sm form-group m-5">
                                    <label for="v_fueltank">FUEL LITRES</label>
                                    <input type="number" class="form-control bghover bg-light" name="v_fueltank"  id="v_fueltank" placeholder="e.g. 0.0 L"/>
                                </div>
                                <div class="col form-group m-5">
                                    <label for="fuelcost">FUEL PRICE(ksh)</label>
                                    <input type="number" class="form-control bghover bg-light" name="fuelcost"  id="fuelcost" placeholder="e.g. ksh 0.00"/>
                                </div>
                                <div class="col form-group m-5">
                                    <label for="fuelcost">Dashboard Mileage(km)</label>
                                    <input type="number" class="form-control bghover bg-light" name="mileage"  id="fuelcost" placeholder="Input current meter reading [0 0 0 0 0]"/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">SUBMIT</button>
                                </div>
                            </form>
                        </div> 
                        <div class="col-sm m-1 rounded" style="overflow:scroll;width:475px;">
                            <img class="rounded"  src="../pics/960x0.jpg"/>
                        <hr>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>