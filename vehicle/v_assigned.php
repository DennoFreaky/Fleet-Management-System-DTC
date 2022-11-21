
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
            <div class="container p-5" id="newform">
                <?php require '../vehicle/v_assignbar.php';?>
                <div class="row">
                    
                </div>
                <h4 class="my-3 text-center">Vehicles with drivers</h4>
                <table class="table">
                    <thead>
                      <tr>
                        <th>Vehicle name</th>
                        <th>Driver</th>
                        <th>Branch</th>
                        <th>License Plate</th>
                        <th>Model</th>
                        <th>Engine</th>
                      </tr>
                      
                    </thead>
                    <tbody>
                      <?php while($row1 = $result_assigned->fetch_assoc()): ?>           
                              <tr>
                                <td><?php echo $row1['v_name']; ?></td>
                                <td><?php echo $row1['driver']; ?></td>
                                <td><?php echo $row1['v_branch']; ?></td>
                                <td><?php echo $row1['license_plate']; ?></td>
                                <td><?php echo $row1['v_model']; ?></td>
                                <td><?php echo $row1['v_engine']; ?></td>

                              </tr>
                      <?php endwhile; ?>
          
                    </tbody>
                    
                  </table>
            </div>
        </div>
    </div>
                                
</body>

</html>