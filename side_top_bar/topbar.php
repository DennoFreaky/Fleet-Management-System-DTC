<?php
$loggedin = $mysqli->query("SELECT * FROM drivers_log") or die($mysqli->error);
?>
  <script src="../js/index.js"></script>
                <div class="col-10 shadow py-1"style="position:fixed;z-index:1;height:50px;overflow:scroll;background-color:rgb(244, 243, 243);">
                    <div class="d-flex">
                        <div class="col-6">
                        </div>
                        <div class="col py-2 text-center">
                            <a href="#" onclick="myFunction3()" class="dropbtn3 text-dark text-start"><b class="m-1">BRANCH</b></a>
                            <div id="myDropdown3" class="dropdown-content3 shadow " style="position:fixed;">
                                <a href="../../main_branch/index/index.php"><b>Nairobi branch</b></a>
                                <a href="../../branch1/index/index.php"><b>Nakuru</b></a>
                                <a href="#"><b>Branch3</b></a>
                                <a href="#"><b>Branch4</b></a>
                                <a href="#"><b>Branch5</b></a>
                                <a href="#"><b>Branch6</b></a>
                            </div>
                        </div>
                        <div class="col py-2 text-center">
                            <a href="../php_lib/d_login.php" class="dropbtn3 text-dark"><b class="m-1">Login as Driver</b></a>
                        </div>
                        <div class="col py-2 text-center">
                            <a href="#" onclick="myFunction0()" class="dropbtn0 text-dark "><b class="m-1">ADD</b></a>
                            <div id="myDropdown0" class="dropdown-content0 shadow " style="position:fixed;">
                            <?php if (isset($mega_admin)): ?>
                                <a href="../vehicle/v_add.php"><b>Add vehicle</b></a>
                                <a href="../php_lib/add_fmo.php"><b>Fleet Managent Officer</b></a>
                                <a href="../php_lib/add_driver.php"><b>Add Driver</b></a>
                            <?php else: ?>
                                <a href="../vehicle/v_add.php"><b>Add vehicle</b></a>
                                <a href="../php_lib/add_driver.php"><b>Add Driver</b></a>
                                <a href="../php_lib/add_driver.php"><b>Add Vendors</b></a>
                            <?php endif; ?>
                            </div>
                        
                        </div>
                    </div>
                </div>