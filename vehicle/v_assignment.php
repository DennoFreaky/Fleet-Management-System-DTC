
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
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Firstname</th>
                                <th>Branch</th>
                                <th>Assigned Vehicle</th>
                                <th>Email</th>
                                <th colspan="2"></th>
                            </tr>
                            <form method="post" action="../php_lib/drivers.php" id="">
                            <tr>
                            <?php require_once '../php_lib/drivers.php';?>
            
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <th><input type="text" class="btn btn-outline-dark lg" name="fname" value="<?php echo $fname; ?>" id="fname" placeholder="E.g mercedes" style="width:100px;"/></th>
                                <th><input type="text" class="btn btn-outline-dark lg" name="branch" value="<?php echo $branch; ?>" id="branch" placeholder="E.g mercedes" style="width:100px;"/></th>
                                <th><input type="text" class="btn btn-outline-dark lg" name="vname" value="<?php echo $vname; ?>" id="vname" placeholder="E.g mercedes" style="width:100px;"/></th>
                                <th><input type="text" class="btn btn-outline-dark lg" name="email" value="<?php echo $email; ?>" id="email" placeholder="E.g mercedes" style="width:100px;"/></th>
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
                            <?php while($row = $loggedin->fetch_assoc()): ?>           
                            <tr>
                                <td><?php echo $row['fname']; ?></td>
                                <td><?php echo $row['branch']; ?></td>
                                <td><?php echo $row['vname']; ?></td>
                                <td><?php echo $row['email']; ?></td>
                                <td>
                                    <a href="../vehicle/v_assignment.php?edit=<?php echo $row['id']; ?>"
                                    class="btn btn-info">Edit</a>
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
    </div>
                                
</body>

</html>