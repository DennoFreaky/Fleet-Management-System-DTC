
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
            <?php 
                if (isset($_SESSION['message_truck'])):?>
                <div class="alert alert-<?= $_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message_truck'];
                unset($_SESSION['message_truck']);
                ?>
            <?php endif ?>
                <div class="align-items-center">
                        <h5 class="my-3 text-center">Vehicle regestration</h5>
                </div>
                <div class="row">
                    <div class="col-md-8 m-1 shadow" >
                        <form class="form-row" method="post" style="font-weight:bold;" action="../vehicle/v_form_process.php">
                            <h4>General info</h4>
                            <div class="form-group my-2">
                                <label for="v_name">Vehicle Name</label>
                                <input type="text" name="v_name" class="form-control"id="v_name" placeholder="E.g mercedes"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="vin">Vin</label>
                                <input type="text" class="form-control" name="vin"  id="vin" placeholder="vin-number"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_branch">Branch</label>
                                <?php if (isset($mega_admin)): ?>
                                <input type="text" class="form-control" name="v_branch"  value="<?= ($mega_admin["branch"]) ?>" id="v_branch" placeholder="branch"/>
                                <?php endif; ?>
                            </div>
                            <div class="form-group my-2">
                                <label for="license_plate">Licence Plate </label>
                                <input type="text" class="form-control" name="license_plate"  id="license_plate" placeholder="license_plate"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_year">Year</label>
                                <input type="text" class="form-control" name="v_year"  id="v_year" placeholder="year"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_make">Vehicle_Make</label>
                                <input type="text" class="form-control" name="v_make"  id="v_make" placeholder="vehicle-make"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_model">Model</label>
                                <input type="text" class="form-control" name="v_model"  id="v_model" placeholder="model"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_series">Series</label>
                                <input type="text" class="form-control" name="v_series"  id="v_series" placeholder="series"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_style">Style</label>
                                <input type="text" class="form-control" name="v_style"  id="v_style" placeholder="v_style"/>
                            </div>
                            <h4>Specific info</h4>
                            <div class="form-group my-2">
                                <label for="v_engine">Engine</label>
                                <input type="text" class="form-control" name="v_engine"  id="v_engine" placeholder="engine"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_gearbox">Gearbox</label>
                                <input type="text" class="form-control" name="v_gearbox"  id="v_gearbox" placeholder="gearbox"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_chassis">Chassis</label>
                                <input type="text" class="form-control" name="v_chassis"  id="v_chassis" placeholder="v_chassis"/>
                            </div>
                            <div class="form-group my-2">
                                <label for="v_fueltank">Fuel Tank</label>
                                <input type="text" class="form-control" name="v_fueltank"  id="v_fueltank" placeholder="fueltank"/>
                            </div>
                            <h4>Others</h4>
                            <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">Submit</button>

                        </form>
                    </div>
                    <div class="col-sm m-1 shadow">
                        <p class="p-2"><b>Add vehicle using Vehicle Identification Number(VIN)</b></p>
                        <form class=" form-row" style="font-weight:bold;"method="POST" action="">
                            <div class="col form-group my-2">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name"  id="style" placeholder="vehicle-name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="vin">VIN</label>
                                <input type="text" class="form-control" name="style"  id="style" placeholder="style"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="licence_plate">Licence-plate</label>
                                <input type="licence_plate" class="form-control" name="licence_plate"  id="licence_plate" placeholder="Licence_plate"/>
                            </div>
                            <div class="text-center my-2">
                                <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">Decode</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>