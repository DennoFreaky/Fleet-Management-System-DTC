
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_WHOLESALER</title>

</head>
<body class="">
    <div class="d-flex">
        <?php require '../side_top_bar/sidebar.php';?>
        <div class="col"  >
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <?php 
                if (isset($_SESSION['message_truck'])):?>
                <div class="alert alert-<?= $_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message_truck'];
                unset($_SESSION['message_truck']);
                ?>
                <?php endif ?>
                <div class="align-items-center">
                    <h4 class="my-3 text-center">Vendor and Garage Regestration</h4>
                </div>
                <div class="row">
                    <div class="col-md m-1 shadow">
                        <u><h5 class="text-muted my-2">Vendor [Auto Spares - Shops]</h5></u>
                        <form class="form-row " style="font-weight:bold;"method="POST" action="../php_lib/v_gprocess.php">
                            <div class="col form-group my-2 hover-zoom">
                                <label for="fname">Id</label>
                                <?php if($row = $vendors_tbl->fetch_assoc()):?>
                                <input type="number" class="form-control" name="vendor_id" value="<?php echo $row['vendor_id'] + $i = 1;?>" id="fname" placeholder="id given by the system"/>
                                <?php else: ?>
                                <input type="number" class="form-control" name="vendor_id" value="17001" id="fname" placeholder="Id given by the system"/>
                                <?php endif; ?>
                            </div>
                            <div class="col form-group my-2">
                                <label for="sname">Name</label>
                                <input type="text" class="form-control" name="vendor_name"  placeholder="vendor name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="id_no">Location</label>
                                <input type="text" class="form-control" name="vendor_location"   placeholder="location"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="vendor_address"  placeholder="address"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone_number" id="phone" placeholder="07********"/>
                            </div>
                            <div class="col form-group my-2">
                            <label for="phone">Website(<i class="text-muted">optional link</i>)</label>
                                <input type="text" class="form-control" name="weblink"  id="style" placeholder="Their web link"/>
                            </div>
                            <div class="col form-group my-2">
                            <label for="phone">Vendor Map Link</label>
                                <input type="text" class="form-control" name="vendor_link"  id="style" placeholder="shared map link"/>
                            </div>
                            <div class="col form-group my-2 ">
                                <input type="submit" name="vendor_submit" class="form-control btn btn-outline-secondary"/>
                            </div>
                        </form>
                    </div>
                    <div class="col-md m-1 shadow">
                        <u><h5 class="text-muted my-2">Garages [Servics & Repair]</h5></u>
                        <form class="form-row" style="font-weight:bold;"method="POST" action="../php_lib/v_gprocess.php">
                            <div class="col form-group my-2">
                                <label for="fname">Id</label>
                                <?php if($row1 = $garage_tbl->fetch_assoc()):?>
                                <input type="number" class="form-control" name="g_id" value="<?php echo $row1['g_id'] + $i = 1;?>" id="fname" placeholder="id given by the system"/>
                                <?php else: ?>
                                <input type="number" class="form-control" name="g_id" value="17001" id="fname" placeholder="Id given by the system"/>
                                <?php endif; ?>
                            </div>
                            <div class="col form-group my-2">
                                <label for="sname">Name</label>
                                <input type="text" class="form-control" name="g_name"  placeholder="Name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="id_no">Location</label>
                                <input type="text" class="form-control" name="g_location"   placeholder="location"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="g_address"  placeholder="address"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="phone">Phone</label>
                                <input type="number" class="form-control" name="phone_number" id="phone" placeholder="07********"/>
                            </div>
                            <div class="col form-group my-2">
                            <label for="phone">Garage Map Link</label>
                                <input type="text" class="form-control" name="g_link"  id="style" placeholder="shared map link"/>
                            </div>
                            <div class="col form-group my-2 ">
                                <input type="submit" name="garage_submit" class="form-control btn btn-outline-secondary"/>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>