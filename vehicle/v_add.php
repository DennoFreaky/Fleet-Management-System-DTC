
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA WHOLESALERS</title>

</head>
<body class="">
    <div class="d-flex">
        <?php require '../side_top_bar/sidebar.php';?>
        <div class="col"  >
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <div class="align-items-center">
                        <h5 class="my-3 text-center">Vehicle registration</h5>
                </div>
                <div class="row">
                    <div class="col-md m-1 shadow" >
                        <form class="form-row" style="font-weight:bold;"method="POST" action="../vehicle/v_form_process.php">
                            <h5>Identifier details</h5>
                            <div class="col form-group my-2">
                                <label for="v_id">Vehicle ID</label>
                                <?php if($row = $lastvehicle->fetch_assoc()):?>
                                <input type="number" class="form-control" name="v_id" value="<?php echo $row['v_id'] + $i = 1;?>"  id="v_id" placeholder="vehicle Id"/>
                                <?php else: ?>
                                <input type="number" class="form-control" name="v_id" value="11001"  id="v_id" placeholder="vehicle Id"/>
                                <?php endif; ?>
                            </div>
                            <div class="col form-group my-2">
                                <label for="vin">Vin number</label>
                                <input type="number" class="form-control" name="vin"  id="vin" placeholder="vehicle identity number"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="v_name">Vehicle Name</label>
                                <input type="text" class="form-control" name="v_name"  id="v_name" value=""  placeholder="Vehicle name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="license_plate">License Plate</label>
                                <input type="text" class="form-control" name="license_plate"  id="license_plate" placeholder="e.g KBY 893T"/>
                            </div>
                            <h5>General Information</h5>
                            <div class="col form-group my-2">
                                <label for="v_branch">Branch</label>
                                <?php if (isset($mega_admin)): ?>
                                <input type="text" class="form-control" name="v_branch" value="<?= ($mega_admin["branch"]) ?>"  id="v_branch" placeholder="v_branch"/>
                                <?php elseif (isset($fmo_tbl)): ?>
                                <input type="text" class="form-control" name="v_branch" value="<?= ($fmo_tbl["branch"]) ?>"  id="v_branch" placeholder="v_branch"/> 
                                <?php endif; ?>
                            </div>
                            <div class="col form-group my-2">
                                <label for="mileage">Current Mileage</label>
                                <input type="number" class="form-control" name="mileage"  id="mileage" placeholder="driven distance"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="name">Input Mileage for next Service</label>
                                <input type="number" class="form-control" name="service_after"  id="style" placeholder="set mileage until next service"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="status">Status</label>
                                <input type="text" class="form-control" name="status" value="NEW!"  id="status" placeholder="id number"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="v_year">Year</label>
                                <input type="text" class="form-control" name="v_year"  id="v_year" placeholder="year"/>
                            </div>
                            <div class="col form-group my-2">
                            <label for="v_make">Vehicle Make</label>
                                <input type="text" class="form-control" name="v_make"  id="v_make" placeholder="vehicle-make"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="v_model">Vehicle Model</label>
                                <input type="text" class="form-control" name="v_model"  id="v_model" placeholder="vehicle model"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="v_engine">Vehicle Engine</label>
                                <input type="number" class="form-control" name="v_engine"  id="v_engine" placeholder="Horse Power(HP)"/>
                            </div>
                            <h5>Specific Details</h5>
                            <div class="text-center form-group my-2">
                                <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>