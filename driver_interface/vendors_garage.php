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
                    <h4 class="fw-bold text-center">Vendors & Garage</h4>
                </div>
                <div class="row">
                    <div class="col-md my-2 m-1 text-start shadow">
                        <h4>Garages</h4><hr>
                        <div class="row">
                            <div class="col-12 text-start">
                            <?php while($row = $garages->fetch_assoc()): ?>
                                <a href="<?php echo $row['g_link']; ?>">
                                <p><b class="text-dark">Name: </b><?php echo $row['g_name']; ?></p>
                                <p><b class="text-dark"> Location: </b><?php echo $row['g_address']; ?></p></a><hr style="margin:0px;">
                                
                            <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md my-2 m-1 shadow text-center">
                        <h4>VENDORS</h4><hr>
                        <div class="row ">
                        <?php while($row1 = $vendors->fetch_assoc()): ?>
                            <div class="col-12 mx-2 m-1 text-start">
                                <p><b class="text-dark">Name: </b><?php echo $row1['vendor_name']; ?></p>
                                <p><b class="text-dark"> Location: <a href="<?php echo $row1['vendor_link']; ?>"></b><?php echo $row1['vendor_address']; ?></p></a>
                                <p><b class="text-dark"> Website: </b><a href="<?php echo $row1['weblink']; ?>"><?php echo $row1['weblink']; ?></p></a>
                                <hr style="margin:0px;">
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <div class="col-lg my-2 text-center">      
                        <h4></h4><hr>
                        <div class="row" id="map" style="overflow:scroll-y;width:100%;height:400px;">
                            <img src="../pics/shell-fuel-station-in-europe_100590975_m.jpg"/>
                            <div class="col text-center">
                                <p>Garage name </p>
                            </div>
                            <div class="col text-center">
                                <p>more info</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>