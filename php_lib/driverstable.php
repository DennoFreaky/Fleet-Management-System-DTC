<<<<<<< HEAD

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
              <th>vname</th>
              <th>Address</th>
              <th>Branch</th>
              <th>ID_number</th>
              <th>Reg_number</th>
              <th>Email</th>
              <th>Phone_Number</th>
              <th col-span="2" >Action</th>
            </tr>
            <tr>
            <?php require_once '../php_lib/drivers.php'; ?>
              <form method="post" id="driver_form" action="../php_lib/drivers.php" class="my-5">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <th>
                  <div class="form-group">
                    <input type="text" name="fname" value="<?php echo $fname; ?>" id="first_name" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="sname" value="<?php echo $sname; ?>" id="second_name" class="btn btn-outline-dark" placeholder="Second name" style="width: 110px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="vname" value="<?php echo $vname; ?>" id="vname" class="btn btn-outline-dark" placeholder="vehicle name" style="width: 110px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="address" value="<?php echo $address; ?>" id="address" class="btn btn-outline-dark" placeholder="Address" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="branch" value="<?php echo $branch; ?>" id="branch" class="btn btn-outline-dark" placeholder="branch" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="number" name="id_no" value="<?php echo $id_no; ?>" class="btn btn-outline-dark" id="id_no" placeholder="Your ID" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="number" name="reg_no" value="<?php echo $reg_no; ?>" class="btn btn-outline-dark" id="reg_no" placeholder="Regestration no" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" class="btn btn-outline-dark" id="email" placeholder="Your Email" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="tel" name="phone" value="<?php echo $phone; ?>" class="btn btn-outline-dark" id="phone" placeholder="07*****(Phone_No)" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                    <?php
                    if ($update == true):?>
                      <button type="submit" name="update" style="width:120px;font-size:14px;" class="btn btn-secondary">UPDATE</button>
                    <?php else: ?>
                      <b class="btn btn-sm btn-secondary"style="width:110px;font-size:12px;">click edit to update</b>
                    <?php endif; ?>
                </th>
                    </form>
            </tr>
          </thead>
          <tbody>
            <?php
                while($row = $fetch->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row["sname"]; ?></td>
                        <td><?php echo $row["vname"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["id_no"]; ?></td>
                        <td><?php echo $row["reg_no"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td>
                        <a href="../php_lib/driverstable.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info" >Edit</a>
                        <a href="../php_lib/drivers.php?delete=<?php echo $row['id']; ?>"
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
=======

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
              <th>vname</th>
              <th>Address</th>
              <th>Branch</th>
              <th>ID_number</th>
              <th>Reg_number</th>
              <th>Email</th>
              <th>Phone_Number</th>
              <th col-span="2" >Action</th>
            </tr>
            <tr>
            <?php require_once '../php_lib/drivers.php'; ?>
              <form method="post" id="driver_form" action="../php_lib/drivers.php" class="my-5">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <th>
                  <div class="form-group">
                    <input type="text" name="fname" value="<?php echo $fname; ?>" id="first_name" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="sname" value="<?php echo $sname; ?>" id="second_name" class="btn btn-outline-dark" placeholder="Second name" style="width: 110px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="vname" value="<?php echo $vname; ?>" id="vname" class="btn btn-outline-dark" placeholder="vehicle name" style="width: 110px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="address" value="<?php echo $address; ?>" id="address" class="btn btn-outline-dark" placeholder="Address" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="text" name="branch" value="<?php echo $branch; ?>" id="branch" class="btn btn-outline-dark" placeholder="branch" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="number" name="id_no" value="<?php echo $id_no; ?>" class="btn btn-outline-dark" id="id_no" placeholder="Your ID" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="number" name="reg_no" value="<?php echo $reg_no; ?>" class="btn btn-outline-dark" id="reg_no" placeholder="Regestration no" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="email" name="email" value="<?php echo $email; ?>" class="btn btn-outline-dark" id="email" placeholder="Your Email" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                  <div class="form-group">
                    <input type="tel" name="phone" value="<?php echo $phone; ?>" class="btn btn-outline-dark" id="phone" placeholder="07*****(Phone_No)" style="width: 100px;"/>
                  </div>
                </th>
                <th>
                    <?php
                    if ($update == true):?>
                      <button type="submit" name="update" style="width:120px;font-size:14px;" class="btn btn-secondary">UPDATE</button>
                    <?php else: ?>
                      <b class="btn btn-sm btn-secondary"style="width:110px;font-size:12px;">click edit to update</b>
                    <?php endif; ?>
                </th>
                    </form>
            </tr>
          </thead>
          <tbody>
            <?php
                while($row = $fetch->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row["sname"]; ?></td>
                        <td><?php echo $row["vname"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["id_no"]; ?></td>
                        <td><?php echo $row["reg_no"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td>
                        <a href="../php_lib/driverstable.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info" >Edit</a>
                        <a href="../php_lib/drivers.php?delete=<?php echo $row['id']; ?>"
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
>>>>>>> added git ignore
</html>