
<?php
$mysqli = require __DIR__ . "../../authentication/mega_db.php";
$data = "SELECT * FROM vehicles_tbl";
$v_data = $mysqli->query($data);
$data1 = "SELECT * FROM drivers_tbl";
$d_data = $mysqli->query($data1);
?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>DIGI_TRANS</title>

</head>
<body class="">
    <div class="d-flex">
        <?php require '../side_top_bar/sidebar.php';?>
        <div class="col"  >
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" style="overflow:scroll;">
                <?php require '../vehicle/v_assignbar.php';?>
                <?php if (isset($mega_admin)): ?>
                
                <?php else: ?>
                <div class="row">
                    <?php require '../vehicle/v_assignment.php';?>
                </div>
                <?php endif; ?>
                <h4 class="my-3 text-start" id="novehicle">Drivers without vehicle</h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Second Name</th>
                        <th>vname</th>
                        <th>Address</th>
                        <th>Branch</th>
                        <th>ID_number</th>
                        <th>Reg_number</th>
                        <th>Email</th>
                        <th>Phone_Number</th>
                        <?php if (isset($mega_admin)): ?>
                        <?php else: ?>
                        <th>Action</th>
                        <?php endif; ?>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        while($row1 = $v_unassigned->fetch_assoc()): ?>
                      <tr>
                        <td><?php echo $row1['fname']; ?></td>
                        <td><?php echo $row1["sname"]; ?></td>
                        <td><?php echo $row1["vname"]; ?></td>
                        <td><?php echo $row1["address"]; ?></td>
                        <td><?php echo $row1["branch"]; ?></td>
                        <td><?php echo $row1["id_no"]; ?></td>
                        <td><?php echo $row1["reg_no"]; ?></td>
                        <td><?php echo $row1["email"]; ?></td>
                        <td><?php echo $row1["phone"]; ?></td>
                        <?php if (isset($mega_admin)): ?>
                        <?php else: ?>
                        <td> <a href="../vehicle/v_unassigned.php?edit=<?php echo $row1['id']; ?>" class="form-control text-dark">ASSIGN</a></td>
                        <?php endif; ?>
                      </tr>
                        <?php endwhile; ?>
                    </tbody>
                    
                  </table>
                  <h4 class="my-3 text-start" id="nodriver">Vehicles without Drivers</h4>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Vehicle name</th>
                        <th>v_id</th>
                        <th>Driver</th>
                        <th>VIN</th>
                        <th>Branch</th>
                        <th>License Plate</th>
                        <th>Year</th>
                        <th>Make</th>
                        <th>Model</th>
                        <th>Engine</th>
                      </tr>
                      </form>
                    </thead>
                    <tbody>
                      <?php while($row = $nodriver->fetch_assoc()): ?>           
                              <tr>
                                <td><?php echo $row['v_name']; ?></td>
                                <td><?php echo $row['v_id']; ?></td>
                                <td><?php echo $row['driver']; ?></td>
                                <td><?php echo $row['vin']; ?></td> 
                                <td><?php echo $row['v_branch']; ?></td>
                                <td><?php echo $row['license_plate']; ?></td>
                                <td><?php echo $row['v_year']; ?></td>
                                <td><?php echo $row['v_make']; ?></td>
                                <td><?php echo $row['v_model']; ?></td>
                                <td><?php echo $row['v_engine']; ?></td>
                      <?php endwhile; ?>
          
                    </tbody>
                    
                  </table>
            </div>
        </div>        
    </div>
</body>

</html>