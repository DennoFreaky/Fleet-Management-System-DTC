
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <!-- css for sorting data tables -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
<!-- scripts for table sorting and searching -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA WHOLESALERS</title>

</head>
<body class="bg-muted">

  <div class="d-flex">
    <?php require_once '../side_top_bar/sidebar.php';?>
    <div class="col-sm-10">
      <?php require_once '../side_top_bar/topbar.php';?>
      <?php 
      if (isset($_SESSION['message_truck'])):?>
      <div class="alert alert-<?= $_SESSION['msg_type']?>">
          <?php
              echo $_SESSION['message_truck'];
              unset($_SESSION['message_truck']);
          ?>
      </div>
      <?php endif ?>
      <div class="container py-2" style="overflow:scroll;">
        <h2 class="my-5 text-center">All vehicles and Activity Status</h2>
        <table id="vehiclestable" class="table table-striped table-bordered table-sm" style="width:100%">
          <thead>
            <tr>
              <th>Id</th>
              <th>Name</th>
              <th>Driver</th>
              <th>Status</th>
              <th>Mileage</th>
              <th style="width:100px;">Next Service in</th>
              <th>VIN</th>
              <th>Branch</th>
              <th>License_Plate</th>
              <th>Year</th>
              <th>Make</th>
              <th>Model</th>
              <th>Engine</th>
              <?php if(isset($mega_admin)): ?>
              <th colspan="2" >Action</th>
              <?php else: endif; ?>
            </tr>
            <?php if(isset($mega_admin)): ?>
            <form method="post" action="../vehicle/v_form_process.php" id="">
            <tr>
            <?php require_once '../vehicle/v_form_process.php';?>
            
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <th><input type="number" class="btn btn-outline-dark lg" name="v_id" value="<?php echo $v_id; ?>" id="v_id" placeholder="id" style="width:100px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="v_id" value="<?php echo $v_name; ?>" id="v_name" placeholder="name" style="width:100px;"/></th>
              <th></th>
              <th></th>
              <th></th>
              <th><input type="number" class="btn btn-outline-dark lg" name="vin" value="<?php echo $service_after; ?>" id="vin" placeholder="update next serivce mileage" style="width:100px;"/></th>
              <th><input type="number" class="btn btn-outline-dark lg" name="vin" value="<?php echo $vin; ?>" id="vin" placeholder="vin" style="width:100px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="v_branch" value="<?php echo $v_branch; ?>" id="v_branch" placeholder="v_branch" style="width:100px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="license_plate" value="<?php echo $license_plate; ?>" id="license_plate" placeholder="licenseplate" style="width:100px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="v_year" value="<?php echo $v_year; ?>" id="v_year" placeholder="v_year in km" style="width:50px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="v_make" value="<?php echo $v_make; ?>" id="v_make" placeholder="v_make in km" style="width:100px;"/></th>
              <th><input type="text" class="btn btn-outline-dark lg" name="v_model" value="<?php echo $v_model; ?>" id="v_model" placeholder="v_model in km" style="width:100px;"/></th>
              <th><input type="number" class="btn btn-outline-dark lg" name="v_engine" value="<?php echo $v_engine; ?>" id="v_engine" placeholder="e.g 000hp" style="width:50px;"/></th>
              <th colspan="">
                <?php if ($update == true):?>
                  <input type="submit" class="btn btn-secondary" name="update" Value="UPDATE" class="btn btn-secondary">
                <?php else: ?>
                  <b class="btn btn-sm btn-secondary">Click Edit</b>
                <?php endif; ?>
              </th>
            </tr>
            <?php else: endif; ?>
            
            </form>
          </thead>
          <tbody>
            <?php while($row = $allvehicle->fetch_assoc()): ?>           
                    <tr>
                      <td><?php echo $row['v_id']; ?></td>
                      <td><?php echo $row['v_name']; ?></td>
                      <td><b><?php echo $row['driver']; ?></b></td>
                      <?php if($row['status']!== 'All Good'): ?><td class="text-danger fw-bold" style="width:100px;"><?php echo $row['status']; ?></td><?php else: ?><td class="text-success fw-bold" style="width:100px;"><?php echo $row['status']; ?></td><?php endif; ?>
                      <td><?php echo $row['mileage']; ?></td>
                        <?php if($ns = $row['service_after'] - $row['mileage'] < 0 ): ?><td class="text-danger"><?php echo "Service Overdue"; else: ?></td><td> <?php echo $ns = $row['service_after'] - $row['mileage']." km"; endif?></td> 
                      <td><?php echo $row['vin']; ?></td> 
                      <td><?php echo $row['v_branch']; ?></td>
                      <td><?php echo $row['license_plate']; ?></td>
                      <td><?php echo $row['v_year']; ?></td>
                      <td><?php echo $row['v_make']; ?></td>
                      <td><?php echo $row['v_model']; ?></td>
                      <td><?php echo $row['v_engine']; ?></td>
                      <?php if(isset($mega_admin)): ?>
                      <td style="width:110px;">
                        <a href="../vehicle/all_vehicles.php?edit=<?php echo $row['id']; ?>"
                         class="btn-sm btn-info">Edit</a>
                        <a href="../vehicle/v_form_process.php?delete=<?php echo $row['id']; ?>"
                          class="btn-sm btn-danger">Delete</a>                       
                      </td>  
                      <?php else: endif; ?>
                    </tr>
            <?php endwhile; ?>

          </tbody>
          
        </table>
        <script>
          $(document).ready(function () {
          $('#vehiclestable').DataTable();
          });
        </script>
      </div>
    </div>
  </div>
</body>
</html>