<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <div class="rowtwo"> 
                    <div class="row">
                        <div class="col-md m-1 rounded ">
                            <form class="shadow form-row" style="font-weight:bold;" method="POST" action="../driver_interface/fueling_process.php">
                                <h4 class="p-3 text-center">INPUT THE FUELING DETAILS</h4>
                                <div class="col-sm form-group m-5">
                                    <label for="fuel_litres">FUEL LITRES</label>
                                    <input type="number" class="form-control bghover bg-light" name="fuel_litres"  id="fuel_litres" placeholder="e.g. 0.0"/>
                                </div>
                                <div class="col form-group m-5">
                                    <label for="fuel_ksh">FUEL PRICE(ksh)</label>
                                    <input type="number" class="form-control bghover bg-light" name="fuel_ksh"  id="fuel_ksh" placeholder="e.g. ksh 0.00"/>
                                </div>
                                <div class="text-center">
                                    <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">SUBMIT</button>
                                </div>
                            </form>
                        </div> 
                        <div class="col-sm m-1 rounded" style="overflow:scroll;width:475px;">
                            <img class=""  src="../pics/960x0.jpg"/>
                        <hr>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
</body>
</html>