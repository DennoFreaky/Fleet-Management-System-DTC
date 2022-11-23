<?php 
require_once '../authentication/loginsession.php';
require_once '../side_top_bar/counter.php';
//gets all vehicle data from the vehicle_tbl
$allvehicle = $mysqli->query("SELECT * FROM vehicles_tbl ORDER BY `vehicles_tbl`.`id` ASC") or die($mysqli->error);

//gets all active vehicles from vehicles_tbl using their status
$activevehicles = $mysqli->query("SELECT * FROM vehicles_tbl WHERE status='All Good' ") or die($mysqli->error);

//gets all inactive vehicles from vehicles_tbl using their status
$inactivevehicles = $mysqli->query("SELECT * FROM vehicles_tbl WHERE status != 'All Good' ") or die($mysqli->error);

//gets data of last vehicles  vehicles from vehicles_tbl
$lastvehicle = $mysqli->query("SELECT * FROM vehicles_tbl WHERE id=(SELECT max(id) FROM vehicles_tbl)") or die($mysqli->error);

$result_assigned = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver != 'none' ") or die($mysqli->error);

$result_unassigned = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);

$nodriver = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);
$d_unassigned = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);
$getvid = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);

$fetch = $mysqli->query("SELECT * FROM drivers_tbl ORDER BY `drivers_tbl`.`fname` ASC") or die($mysqli->error);

$fmodetails = $mysqli->query("SELECT * FROM fmo_tbl ORDER BY `fmo_tbl`.`fname` ASC") or die($mysqli->error);

$novehicle = $mysqli->query ("SELECT * FROM drivers_tbl WHERE vname = 'none'") or die($mysqli->error);
$v_unassigned = $mysqli->query ("SELECT * FROM drivers_tbl WHERE vname = 'none'") or die($mysqli->error);

//getting data all regestered garages
$garages = $mysqli->query("SELECT * FROM garage_tbl") or die($mysqli->error);

//gets the last data in the garage table row
$garage_tbl = $mysqli->query("SELECT * FROM garage_tbl WHERE id=(SELECT max(id) FROM garage_tbl)") or die($mysqli->error);
//gets the last data in the vendor table row
$vendors_tbl = $mysqli->query("SELECT * FROM vendors_tbl WHERE id=(SELECT max(id) FROM vendors_tbl)") or die($mysqli->error);
$vendors = $mysqli->query("SELECT * FROM vendors_tbl") or die($mysqli->error);

//Geting the 7 days fueling
$fuel_cost = $mysqli->query("SELECT * FROM vehicles_fueling order by `vehicles_fueling`.`fueling_date` ASC") or die($mysqli->error);
$fcost = $mysqli->query("SELECT * FROM vehicles_fueling order by `vehicles_fueling`.`fueling_date` DESC") or die($mysqli->error);
 while($cost = mysqli_fetch_array($fcost)){
       $fuelprice[] = $cost['fuelcost'];
 }

$fuelinghistory = $mysqli->query("SELECT * FROM vehicles_fueling") or die($mysqli->error);


//Geting the most recent inspection data
$inspectionhistory = $mysqli->query("SELECT * FROM vehicles_inspection WHERE (window != 'Good') or (side_mirrors != 'Good') or (door != 'Good') or (reflector != 'Good') or (rims != 'Good') or (tirepressure != 'Good') or (headlight != 'Good') or (highbeam != 'Good') or (hazard != 'Good')  or (turnsignals != 'Good') or (seatbelt != 'Good') or (windshield_wipers != 'Good') or (gauges != 'Good') ");

$inspectionhistory1 = $mysqli->query("SELECT * FROM vehicles_inspection WHERE (window != 'Good') or (side_mirrors != 'Good') or (door != 'Good') or (reflector != 'Good') or (rims != 'Good') or (tirepressure != 'Good') or (headlight != 'Good') or (highbeam != 'Good') or (hazard != 'Good')  or (turnsignals != 'Good') or (seatbelt != 'Good') or (windshield_wipers != 'Good') or (gauges != 'Good') ");
?>


<script src="../js/index.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
        <div class="col-2 shadow full-height bg-dark" id="sidebar"> 
            <div class="dflex" style="position:fixed">
                <div class="col-sm p-1" style="height:50px;overflow:scroll;">
                    <div class="row">
                        <div class="col-4 py-1 ">
                        <a href="#" onclick="myFunction3()" class="dropbtn3"><p><img
                                src= "../pics/dennis passport.jpg"
                                style="width: auto; height: 35px"
                                class="rounded-circle"
                                /></p></a>
                        </div>
                        <div class="col-8 logout py-1 d-flex">
                    <?php if (isset($mega_admin)): ?>
                                <p class="account text-light" style="font-size:10px;"><b><?= ($mega_admin["branch"]) ?></b>&nbsp;<a href="../authentication/logout.php"> Logout</a></p>
                            <div class="row">
                                <div class="col-sm m-0">
                                    <p class="fw-bold account text-light" style="font-size:10px;">&nbsp;&nbsp;<?= ($mega_admin["username"]) ?></p>
                    <?php elseif(isset($fmo_tbl)): ?>
                                    <p class="account text-light" style="font-size:10px;"><b><?= ($fmo_tbl["branch"]) ?></b>&nbsp;<a href="../authentication/logout.php"> Logout</a></p>
                                    <div class="row">
                                        <div class="col-sm m-0">
                                            <p class="fw-bold account text-light" style="font-size:10px;">&nbsp;&nbsp;<?= ($fmo_tbl["fname"]) ?></p>
                    <?php endif; ?>
                                        </div>
                                    </div>

                                </div>

                            </div>
                       </div>
                    </div>
                    <div class="row shadow my-5 mx-2 rounded bg-light dropdown-content3"  style="width:260px;position:absolute;z-index:4;" id="myDropdown3" >
                        <div class="col text-start fw-bold m-1">
                            <h5 class="text-center">YOUR PROFILE</h5>
                            <?php if (isset($fmo_tbl)): ?>
                            <div class="row">
                                <div class="col-1 text-start">
                                    <h6 class="m-2"><b>Full_Name:</b></h6>
                                </div>
                                <div class="col text-end">
                                    <h6 class="m-2"><?= ($fmo_tbl["fname"]) ?>&nbsp;&nbsp;<?= ($fmo_tbl["sname"]) ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-start">
                                    <h6 class="m-2"><b>Email:</b></h6>
                                </div>
                                <div class="col text-end">
                                    <h6 class="m-2"> <?= ($fmo_tbl["email"]) ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-1 text-start">
                                    <h6 class="m-2"><b>Phone_No:</b></h6>
                                </div>
                                <div class="col text-end">
                                    <h6 class="m-2"> <?= ($fmo_tbl["phone"]) ?></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <a href="#"><h6 class="m-2"><b>Change_Password</b></h6></a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center">
                                    <a href="../authentication/logout.php"><h6 class="m-2"><b>Logout</b></h6></a>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                <br>
                <br>
                <div class="container-fluid">
                    <div class="dflex" style="position:fixed;">
                        <div class="col-md py-5 my-1 " style="font-size:18px;">
                                <div class="dropdown py-2 account" style="d-index:-1;">
                                    <a href="../index/index.php" class="text-light">Dashboard</a>
                                    <a href="#" onclick="myFunction()" class="dropbtn text-light">Vehicles</a>
                                    <div id="myDropdown" class="dropdown-content shadow">
                                        <a href="../vehicle/all_vehicles.php">Vehicle list</a>
                                        <a href="../vehicle/v_unassigned.php">Vehicle assignment</a>
                                    </div>
                                    <?php if (isset($mega_admin)): ?>
                                    <a href="../php_lib/fmotbl.php" class="text-light">F.O.M </a>
                                    <a href="../php_lib/driverstable.php" class="text-light">Drivers</a>
                                    <?php else: ?>
                                        <a href="../php_lib/driverstable.php" class="text-light">Drivers</a>
                                        <a href="../php_lib/v_g_tbl.php" class="text-light">Vendors and Garage</a>
                                    <?php endif; ?>
                                    <a href="#"onclick="myFunction1()" class="dropbtn1 text-light" >History Report</a>
                                        <div id="myDropdown1" class="dropdown-content1 shadow">
                                                <a href="../php_lib/allhistory.php">Inspection & Fuel history</a>
                                        </div>
                                </div>
                        </div>
                    </div>
                </div>
                
            </div>     
