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
<body class="mycontainer" >

    <div class="d-flex shadow">
        
        <?php require_once '../side_top_bar/sidebar.php';?>
        <div class="col">
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container py-5" id="newform">
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
                                    <h6 class="m-2 text-success"><?php echo $rowcount ?> </h6>
                                <?php }else{ ?>
                                    <h6 class="m-2 text-primary"> <?php echo $rowcount ?></h6>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="">Active</a>
                            </div>
                            <div class="col m-1 text-end">
                                <p id="">Details</p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col m-1">
                                <a href="">Out of service</a>
                            </div>
                            <div class="col m-1 text-end">
                                <p class="">Details</p>
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
                                    var xValues = ["Monday","Tuesday","Wednesday","Thursday","Friday","Suturday"];
                                    
                                    new Chart("myChart1", {
                                      type: "line",
                                      data: {
                                        labels: xValues,
                                        datasets: [{ 
                                          data: [860,1140,1060,1060,1070,1110,1330],
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
                    <div class="col-md shadow m-1 rounded bg-light">
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
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Vehicle Overdue</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">5</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
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
                                        <p>Issues</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Open Issues</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">2</p>
                                        </div>
                                    </div>
                                </a>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                    <?php if (isset($mega_admin)): ?>
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Solved Issues</p>
                                        </div>
                                    <?php else: ?>
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Overdue</p>
                                        </div>
                                    <?php endif; ?>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">0</p>
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
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Assigned</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount2 == 0) { ?>
                                            <h6 class="m-2 text-success"><?php echo $rowcount2 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount2 ?></h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                                <a href="../vehicle/v_unassigned.php">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Unassigned </p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                        <?php if ($rowcount1 == 0) { ?>
                                            <h6 class="m-2 text-success"><?php echo $rowcount1 ?> </h6>
                                        <?php }else{ ?>
                                            <h6 class="m-2 text-primary"> <?php echo $rowcount1 ?></h6>
                                        <?php } ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm shadow m-1 rounded bg-light">
                                <div class="row">
                                    <div class="col fw-bold m-1">
                                        <p>Service Reminders</p>
                                    </div>
                                </div>
                                <a href="">
                                    <div class="row m-3 rounded-pill shadow">
                                        <div class="col text-center fw-bold m-1">
                                            <p class="m-2">Vehicle Overdue-soon</p>
                                        </div>
                                        <div class="col text-center fw-bold m-1 ">
                                            <p class="m-2 danger">5</p>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
</body>
</html>