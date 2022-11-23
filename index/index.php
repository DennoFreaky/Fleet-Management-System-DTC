<?php

 ?>
 
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>DIGI_TRANS</title>

</head>
<body class="mycontainer">

    <div class="d-flex">
        
        <?php require_once '../side_top_bar/sidebar.php';?>
        <div class="col">
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container py-5" id="newform" style="position:relative;d-index:1;">
                <div class="my-1">
                    <h4 class="fw-bold">Dashboard</h4>
                </div>
                <div class="row">
                    <div class="col-md shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Vehicle status</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col m-1">
                            <a href="../vehicle/all_vehicles.php">All vehicles</a>
                            </div>

                            <div class="col  m-1 text-end">
                                <h5 class=" text-primary">
                                <?php if ($rowcount == 0) { ?>
                                    <h6 class="m-2 text-danger"><?php echo $rowcount ?> </h6>
                                <?php }else{ ?>
                                    <h6 class="m-2 text-primary"> <?php echo $rowcount ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="../vehicle/all_vehicles.php">Active</a>
                            </div>
                            <div class="col m-1 text-end">
                                <h6 class="m-2 text-primary"> <?php echo $rowcount5 ?></h6>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="<td><?php echo $row['v_name']; ?></td>">Out of service</a>
                            </div>
                            <div class="col m-1 text-end">
                                <h6 class="m-2 text-primary"> <?php echo $rowcount4 ?></h6>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="col-md shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Fuel cost</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                            <div class="row">
                                <canvas id="myChart1" style="width:100%;max-width:700px"></canvas>
                                <script>
                                    var xValues = ["Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday"];
                                    
                                    new Chart("myChart1", {
                                      type: "line",
                                      data: {
                                        labels: xValues,
                                        datasets: [{ 
                                          data: <?php echo json_encode($fuelprice); ?>,
                                          borderColor: "red",
                                          fill: false
                                        }, { 
                                          data: [1600,1700,1700,1900,2000,2700,4000],
                                          borderColor: "green",
                                          fill: false
                                        }, { 
                                          data: [300,700,2000,5000,6000,4000,2000],
                                          borderColor: "blue",
                                          fill: false
                                        }]
                                      },
                                      options: {
                                        legend: {display: false}
                                      }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 shadow m-1 rounded bg-light">
                        <div class="row">
                            <div class="col fw-bold m-1">
                                <p>Service/Repair cost</p>
                            </div>
                            <div class="col fw-bold m-1 text-end">
                                <p class="">Details</p>
                            </div>
                            <div class="row">
                                <canvas id="myChart2" style="width:100%;max-width:700px"></canvas>
                                <script>
                                    var xValues = [100,200,300,400,500,600,700,800,900,1000];
                                    
                                    new Chart("myChart2", {
                                      type: "line",
                                      data: {
                                        labels: xValues,
                                        datasets: [{ 
                                          data: [860,1140,1060,1060,1070,1110,1330,2210,7830,2478],
                                          borderColor: "red",
                                          fill: false
                                        }, { 
                                          data: [1600,1700,1700,1900,2000,2700,4000,5000,6000,7000],
                                          borderColor: "green",
                                          fill: false
                                        }]
                                      },
                                      options: {
                                        legend: {display: false}
                                      }
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 ">
                        <div class="row">
                            <div class="col-md shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Service Reminders</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded alert-danger shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Vehicle Overdue</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">5</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="row m-3 rounded shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Due-soon</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2">3</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md ">
                        <div class="row">
                            <div class="col-sm shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Inspections and Fueling</p>
                                    </div>
                                </div>
                                <a href="../php_lib/allhistory.php">
                                    <div class="row m-3 rounded shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">New Unqualified Inspection</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount4 == 5) { ?>
                                            <h6 class="m-2  text-danger"><?php echo $rowcount4 ?> </h6>
                                            <?php }else{ ?>
                                            <h6 class="m-2 text-primary"><?php echo $rowcount4 ?></h6>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <a href="../php_lib/allhistory.php">
                                    <div class="row m-3 rounded shadow">
                                    <?php if (isset($mega_admin)): ?>
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Recent Fueling</p>
                                        </div>
                                    <?php endif; ?>
                                        <div class="col text-center fw-bold m-1 ">
                                            <h6 class="m-2 text-primary"><?php echo $rowcount6 ?></h6>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-sm fw-bold shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1 text-center">
                                        <p>Vehicle - Driver assignment</p>
                                    </div>
                                </div>
                                <a href="../vehicle/v_assigned.php">
                                    <div class="row m-3 rounded shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Assigned</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount2 == 0) { ?>
                                            <h6 class="m-2  text-danger"><?php echo $rowcount2 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount2 ?></h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <a href="../vehicle/v_unassigned.php#nodriver">
                                    <div class="row m-3 rounded shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Unassigned </p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount1 == 0) { ?>
                                            <h6 class="m-2 text-success"><?php echo $rowcount1 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount1 ?> (Vehicle)</h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <a href="../vehicle/v_unassigned.php#novehicle">
                                    <?php if ($rowcount3 !== 0) { ?>
                                    <div class="row m-3 rounded shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Unassigned </p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount3 !== 0) { ?>
                                            <h6 class="m-2 text-info"><?php echo $rowcount3 ?> (driver)</h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                    <?php } else { ?>
                                    <?php } ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <hr>  
        </div>
    </div>
</body>
</html>