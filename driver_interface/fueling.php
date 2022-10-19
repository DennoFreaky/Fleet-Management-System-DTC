<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_DRIVER</title>

</head>
<body class="mobile">
    <div class="d-flex">
        <div class="col">
            <?php require_once '../driver_interface/sidetop_bar/topbar.php' ?>
            <div class="mobilehomepage" id="mobilehomepage">
                <div class="row rowtwo">  
                    <div class="col-md-6">
                        <form class="shadow form-row " style="font-weight:bold;"method="POST" action="">
                            <h4 class="p-3 text-center">INPUT THE FUELING DETAILS</h4>
                            <div class="col form-group m-5">
                                <label for="name">FUEL LITRES</label>
                                <input type="text" class="form-control bghover bg-light" name="name"  id="style" placeholder="vehicle-name"/>
                            </div>
                            <div class="col form-group m-5">
                                <label for="vin">FUEL PRICE(ksh)</label>
                                <input type="text" class="form-control bghover bg-light" name="style"  id="style" placeholder="style"/>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">SUBMIT</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="../pics/" >
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</body>
</html>