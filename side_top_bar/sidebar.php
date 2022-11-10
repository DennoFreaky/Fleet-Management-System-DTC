<?php 
require_once '../authentication/loginsession.php';
require_once '../side_top_bar/counter.php';

$allvehicle = $mysqli->query("SELECT * FROM vehicles_tbl ORDER BY `vehicles_tbl`.`id` ASC") or die($mysqli->error);

$result_assigned = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver != 'none' ") or die($mysqli->error);

$result_unassigned = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);

$nodriver = $mysqli->query("SELECT * FROM vehicles_tbl WHERE driver = 'none' ") or die($mysqli->error);

$fetch = $mysqli->query("SELECT * FROM drivers_tbl ORDER BY `drivers_tbl`.`fname` ASC") or die($mysqli->error);

$fmodetails = $mysqli->query("SELECT * FROM fmo_tbl ORDER BY `fmo_tbl`.`fname` ASC") or die($mysqli->error);

$novehicle = $mysqli->query("SELECT * FROM drivers_tbl WHERE vname = 'none' ") or die($mysqli->error);

?>


<script src="../js/index.js"></script>
<script
src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
</script>
        <div class="col-2 shadow full-height bg-dark" id="sidebar" >             
            <div class="dflex" style="position:fixed">
                <div class="col-sm p-1" style="height:50px;overflow:scroll;">
                    <div class="row">
                        <div class="col-3 py-1 ">
                                <p><img
                                src= "../pics/dennis passport.jpg"
                                style="width: auto; height: 35px"
                                class="rounded-circle"
                                /></p>
                        </div>
                        <div class="col-9 logout py-1 d-flex">
                    <?php if (isset($mega_admin)): ?>
                                <p class="account text-light" style="font-size:10px;"><b><?= ($mega_admin["branch"]) ?></b>&nbsp;<a href="../authentication/logout.php"> Logout</a></p>
                            <div class="row">
                                <div class="col-sm m-0">
                                    <p class="fw-bold account text-light" style="font-size:10px;">&nbsp;&nbsp;<?= ($mega_admin["username"]) ?>
                    <?php elseif(isset($fmo_tbl)): ?>
                                <p class="account text-light" style="font-size:10px;"><b><?= ($fmo_tbl["branch"]) ?></b>&nbsp;<a href="../authentication/logout.php"> Logout</a></p>
                            <div class="row">
                                <div class="col-sm m-0">
                                    <p class="fw-bold account text-light" style="font-size:10px;">&nbsp;&nbsp;<?= ($fmo_tbl["fname"]) ?>
                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <hr>
            <div class="container-fluid">
                <div class="dflex" style="position:fixed">
                    <div class="col-md py-5 my-1" >
                        <div class="dropdown py-2 account" style="">
                            <a href="../index/index.php" class="text-light">Dashboard</a>
                            <a href="#" onclick="myFunction()" class="dropbtn text-light">Vehicles</a>
                            <div id="myDropdown" class="dropdown-content shadow">
                                <a href="../vehicle/all_vehicles.php">Vehicle list</a>
                                <a href="../vehicle/v_overview.php">Vehicle overview</a>
                                <a href="../vehicle/v_unassigned.php">Vehicle assignment</a>
                            </div>
                            <?php if (isset($mega_admin)): ?>
                            <a href="../php_lib/fmotbl.php" class="text-light">Fleet Managemnet Officers</a>
                            <a href="../php_lib/driverstable.php" class="text-light">Drivers</a>
                            <?php else: ?>
                                <a href="../php_lib/driverstable.php" class="text-light">Drivers</a>
                                <a href="../php_lib/driverstable.php" class="text-light">Vendors and Garage</a>
                            <?php endif; ?>
                            <a href="#"onclick="myFunction1()" class="dropbtn1 text-light" >Inspection</a>
                                <div id="myDropdown1" class="dropdown-content1 shadow">
                                    <a href="#">Inspection history</a>
                                </div>
                            <a href="#" class="text-light">Issues</a>
                            <a href="#" class="text-light">Reminders</a>
                            <a href="#" onclick="myFunction2()" class="dropbtn2 text-light">Services</a>
                                <div id="myDropdown2" class="dropdown-content2 shadow">
                                    <a href="#">Service history</a>
                                    <a href="#">Service cost</a>
                                </div>
                            <a href="#" class="text-light">Fuel History</a>
                            <a href="#" class="text-light">Reports</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>     
