
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
        <h2 class="my-5 text-center">Regestered Fleet Management Officer</h2>
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
              <?php if (isset($mega_admin)): ?>
              <th col-span="2" >Action</th>
              <?php else: endif; ?>
            </tr>
            <tr>
            <?php require_once '../php_lib/fmo.php'; ?>
            <form method="post" id="fmo_tbl" action="../php_lib/fmo.php" class="my-5">
              <input type="hidden" name="id" value="<?php echo $id; ?>">
              <th>
                <div class="form-group">
                  <input type="text" name="fname" value="<?php echo $fname; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" name="sname" value="<?php echo $sname; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th> 
              <th>
                <div class="form-group">
                  <input type="text" name="fmoid" value="<?php echo $fmoid; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" name="address" value="<?php echo $address; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" name="branch" value="<?php echo $branch; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" name="phone" value="<?php echo $phone; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
                </div>
              </th>
              <th>
                <div class="form-group">
                  <input type="text" name="email" value="<?php echo $email; ?>" id="" class="btn btn-outline-dark" placeholder="First name" style="width: 100px;"/>
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
                while($row = $fmodetails->fetch_assoc()): ?>
                    <tr>
                        <td><?php echo $row['fname']; ?></td>
                        <td><?php echo $row["sname"]; ?></td>
                        <td><?php echo $row["fmoid"]; ?></td>
                        <td><?php echo $row["address"]; ?></td>
                        <td><?php echo $row["branch"]; ?></td>
                        <td><?php echo $row["phone"]; ?></td>
                        <td><?php echo $row["email"]; ?></td>
                        <?php if (isset($mega_admin)): ?>
                        <td>
                        <a href="../php_lib/fmotbl.php?edit=<?php echo $row['id']; ?>"
                            class="btn btn-info" >Edit</a>
                        <a href="../php_lib/fmo.php?delete=<?php echo $row['id']; ?>"
                            class="btn btn-danger">Delete</a>                       
                        </td>
                        <?php else: endif; ?>
                        
                    </tr>
                <?php endwhile; ?>
          </tbody>
          
        </table>
      
      </div>
    </div>
  </div>
</body>
</html>