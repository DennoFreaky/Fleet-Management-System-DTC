
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_WHOLESALERS</title>

</head>
<body class="bg-muted">
  <div class="d-flex">
    <?php require_once '../side_top_bar/sidebar.php'; ?>
    <div class="col-sm-10">
    <?php require_once '../side_top_bar/topbar.php'; ?>
      <?php 
    if (isset($_SESSION['message'])):?>

      <div class="alert alert-<?= $_SESSION['msg_type']?>">
        <?php
            echo $_SESSION['message'];
            unset($_SESSION['message']);
        ?>
      </div>
    <?php endif ?>

    
      <div class="container-md my-5" style="overflow-y:hidden">
        <h2 class="my-5 text-center">All regestered drivers</h2>
        <table class="table">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Second Name</th>
              <th>fmoid</th>
              <th>Address</th>
              <th>Branch</th>
              <th>Phone_Number</th>
              <th>Email</th>
              <th col-span="2" >Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
                while($row = $fmodetails->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row["sname"]; ?></td>
                        <td><?php echo $row["fmoid"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        
                        <td>
                        <a href="../php_lib/fmotbl.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info" >Edit</a>
                        <a href="../php_lib/fmo.php?delete=<?php echo $row['id']; ?>"
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