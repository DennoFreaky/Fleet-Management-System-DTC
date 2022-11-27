<?php
session_start();
require_once '../driver_interface/loginsession.php';
require_once '../side_top_bar/counter.php';

$garages = $mysqli->query("SELECT * FROM garage_tbl") or die($mysqli->error);
//gets the last data in the vendor table row
$vendors_tbl = $mysqli->query("SELECT * FROM vendors_tbl WHERE id=(SELECT max(id) FROM vendors_tbl)") or die($mysqli->error);
//gets the data in the vendor table row
$vendors = $mysqli->query("SELECT * FROM vendors_tbl") or die($mysqli->error);
$allvehicle = $mysqli->query("SELECT * FROM vehicles_tbl WHERE v_id = ({$drivers_tbl["v_id"]}) ") or die($mysqli->error);
$allvehicle1 = $mysqli->query("SELECT * FROM vehicles_tbl WHERE v_id = ({$drivers_tbl["v_id"]}) ") or die($mysqli->error);
$inspection = $mysqli->query("SELECT * FROM vehicles_inspection WHERE v_id = ({$drivers_tbl["v_id"]}) and id=(SELECT max(id) FROM vehicles_inspection) ") or die($mysqli->error);
$fueling = $mysqli->query("SELECT * FROM vehicles_fueling WHERE v_id = ({$drivers_tbl["v_id"]}) and id=(SELECT max(id) FROM vehicles_fueling) ") or die($mysqli->error);

?>
<script src="../js/index.js"></script>
                <div class="col-12 shadow py-1"style="position:fixed;z-index:1;height:55px;background-color:rgb(244, 243, 243);">
                    <div class="d-flex">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-1 text-end m-1">
                                <p><a href="#" onclick="myFunction9()" class="dropbtn9"><img src= "../pics/dennis passport.jpg" style="width: auto; height: 40px" class="rounded-circle"/></a></p>
                                </div>
                                <div class="col text-start" style="overflow:hidden">
                                <?php if (isset($drivers_tbl)): ?>
                                    <p class="text-dark drivername"><b><a href="#" onclick="myFunction9()" class="dropbtn9 text-dark"><?= ($drivers_tbl["branch"]) ?> Driver:</b><?= ($drivers_tbl["fname"]) ?></a></p>
                                    <div class="col fw-bold shadow m-1 rounded bg-light dropdown-content9"  style="width:300px;" id="myDropdown9">
                                        <div class="row">
                                            <div class="col fw-bold m-1 text-center">
                                                <img src= "../pics/dennis passport.jpg" style="width: auto; height: 80px" class="rounded-circle"/>
                                            </div>
                                        </div>
                                        <div class="row m-3 text-muted rounded shadow">
                                            <div class="col text-start fw-bold m-1">
                                                <div class="row">
                                                    <div class="col-1 text-start">
                                                        <h6 class="m-2"><b>Name:</b></h6>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="m-2"><?= ($drivers_tbl["fname"]) ?>&nbsp;&nbsp;<?= ($drivers_tbl["sname"]) ?></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 text-start">
                                                        <h6 class="m-2"><b>Vehicle:</b></h6>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="m-2"><?= ($drivers_tbl["vname"]) ?></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 text-start">
                                                        <h6 class="m-2"><b>Email:</b></h6>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="m-2"> <?= ($drivers_tbl["email"]) ?></h6>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-1 text-start">
                                                        <h6 class="m-2"><b>Phone_No:</b></h6>
                                                    </div>
                                                    <div class="col text-end">
                                                        <h6 class="m-2"> <?= ($drivers_tbl["phone"]) ?></h6>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row m-3 rounded ">
                                            <div class="col text-start text-muted d-flex fw-bold m-1 logout">
                                                <a href="#"class="m-2">Change Password</a>
                                                <a href="../authentication/logout.php" class="m-2">Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-dark logout"><a href="../authentication/logout.php">Logout</a></p>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col-1 text-end m-1">
                                <p><img src= "../pics/scania.png" style="width: 40px; height: 40px;" class="rounded-circle"/></p>
                                </div>
                                <div class="col text-start">
                                <?php if (isset($drivers_tbl)): ?>
                                    <p class="text-dark drivername"><b>Vehicle:</b> <a href="../driver_interface/v_detail.php"><?= ($drivers_tbl["vname"]) ?></p></a>
                                    <p class="text-dark logout"><b>License Plate:</b> <?php if($row1 = $allvehicle1->fetch_assoc()): echo $row1['license_plate'];  endif; ?></a></p>
                                <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>