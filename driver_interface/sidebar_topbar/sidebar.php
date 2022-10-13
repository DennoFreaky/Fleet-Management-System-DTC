<?php require_once '../authentication/loginsession.php';?>


<script src="../js/index.js"></script>
        <div class="col-sm-2 shadow full-height bg-dark" id="sidebar" >             
            <div class="dflex">
                <div class="col-sm-12 shadow p-1" style="height:50px;overflow:hidden;">
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
                                <p class="account text-light" style="font-size:10px;"><b><?= ($mega_admin["branch"]) ?>&nbsp;Admin:</b>&nbsp;<a href="../authentication/logout.php"> Logout</a></p>
                            <div class="row">
                                <div class="col-sm m-0">
                                    <p class="fw-bold account text-light" style="font-size:10px;">&nbsp;&nbsp;<?= ($mega_admin["username"]) ?>
                    <?php else: ?>
                                    <a href="../authentication/login.php">Log in</a>&nbsp;<span class="text-light">or</span>&nbsp;<a href="../authenticaton/signup.html">sign up</a></p>
                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <hr>
            <div class="container-fluid">
                <div class="dflex">
                    <div class="col-md py-2 my-1" >
                        <div class=" dropdown py-2 account" style="">
                            <a href="../index/index.php" class="text-light">Dashboard</a>
                            <a href="#" onclick="myFunction()" class="dropbtn text-light">Vehicles</a>
                                <div id="myDropdown" class="dropdown-content shadow">
                                    <a href="../vehicle/all_vehicles.php">Vehicle list</a>
                                    <a href="../vehicle/v_overview.php">Vehicle overview</a>
                                    <a href="../php_lib/driverstable.php">Vehicle assignment</a>
                                </div>
                            <a href="#"onclick="myFunction1()" class="dropbtn1 text-light" >Inspection</a>
                                <div id="myDropdown1" class="dropdown-content1 shadow">
                                    <a href="#">Vehicle inspection</a>
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
                            <a href="#" class="text-light">Support</a>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>     
