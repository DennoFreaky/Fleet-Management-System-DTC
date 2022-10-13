
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
            <div class="container p-5" id="newform" style="overflow:scroll;">
                <?php 
                if (isset($_SESSION['message_truck'])):?>
                <div class="alert alert-<?= $_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message_truck'];
                unset($_SESSION['message_truck']);
                ?>
                <?php endif ?>
                <?php require '../vehicle/v_assignbar.php';?>
                <div class="row">
                    <?php require '../vehicle/v_assignment.php';?>
                </div>
                <h3 class="my-3 text-center">Vehicles without drivers</h3>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Vehicle name</th>
                      <th>Driver</th>
                      <th>Branch</th>
                      <th>License Plate</th>
                      <th>Model</th>
                      <th>Engine</th>
                      <th colspan="2">Action</th>
                    </tr>
                    <form method="post" action="../vehicle/v_form_process.php" id="">
                    <tr>
                    <?php require_once '../vehicle/v_form_process.php';?>
                    
                      <input type="hidden" name="id" value="<?php echo $id; ?>">
                      <th><input type="text" class="btn btn-outline-dark lg" name="v_name" value="<?php echo $v_name; ?>" id="v_name" placeholder="E.g mercedes" style="width:100px;"/></th>
                      <th><input type="text" class="btn btn-outline-dark lg" name="v_branch" value="<?php echo $v_branch; ?>" id="v_branch" placeholder="v_branch" style="width:100px;"/></th>
                      <th><input type="text" class="btn btn-outline-dark lg" name="license_plate" value="<?php echo $license_plate; ?>" id="license_plate" placeholder="licenseplate" style="width:100px;"/></th>
                      <th><input type="text" class="btn btn-outline-dark lg" name="v_model" value="<?php echo $v_model; ?>" id="v_model" placeholder="v_model in km" style="width:100px;"/></th>
                      <th><input type="text" class="btn btn-outline-dark lg" name="v_engine" value="<?php echo $v_engine; ?>" id="v_engine" placeholder="e.g 000hp" style="width:100px;"/></th>
                      <th colspan="2">
                        <?php if ($update == true):?>
                          <button type="submit" name="update" class="btn btn-secondary">Update</button>
                        <?php else: ?>
                          <b class="btn btn-sm btn-secondary">Click edit to Update</b>
                        <?php endif; ?>
                      </th>
                    </tr>
                    </form>
                  </thead>
                  <tbody>
                    <?php while($row = $result_unassigned->fetch_assoc()): ?>           
                            <tr>
                              <td><?php echo $row['v_name']; ?></td>
                              <td><?php echo $row['driver']; ?></td>
                              <td><?php echo $row['v_branch']; ?></td>
                              <td><?php echo $row['license_plate']; ?></td>
                              <td><?php echo $row['v_model']; ?></td>
                              <td><?php echo $row['v_engine']; ?></td>
                              <td>
                                <a href="../vehicle/all_vehicles.php?edit=<?php echo $row['id']; ?>"
                                  class="btn btn-info">Edit</a>
                                <a href="../vehicle/v_form_process.php?delete=<?php echo $row['id']; ?>"
                                  class="btn btn-danger">Delete</a>                       
                              </td>  
                            </tr>
                    <?php endwhile; ?>
        
                  </tbody>
                  
                </table>
            </div>
        </div>
    </div>
                                
</body>

</html>