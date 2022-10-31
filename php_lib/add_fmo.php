
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <title>MEGA_WHOLESALER</title>

</head>
<body class="">
    <div class="d-flex">
        <?php require '../side_top_bar/sidebar.php';?>
        <div class="col"  >
                <?php require '../side_top_bar/topbar.php';?>
            <div class="container p-5" id="newform">
                <?php 
                if (isset($_SESSION['message_truck'])):?>
                <div class="alert alert-<?= $_SESSION['msg_type']?>">
                <?php
                echo $_SESSION['message_truck'];
                unset($_SESSION['message_truck']);
                ?>
                <?php endif ?>
                <div class="align-items-center">
                        <h4 class="my-3 text-center">Driver regestration</h4>
                </div>
                <div class="row">
                    <div class="col-sm m-1">
                        <p class="p-2"><b>Add New Driver</b></p><a class="text-end" href="../vehicle/v_assignment.php"><h5>Vehicle assignment</h5></a>
                        <form class="form-row" style="font-weight:bold;"method="POST" action="../php_lib/drivers.php">
                            <div class="col form-group my-2">
                                <label for="fname">First Name</label>
                                <input type="text" class="form-control" name="fname"  id="fname" placeholder="first name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="sname">Second name</label>
                                <input type="text" class="form-control" name="sname"  id="sname" placeholder="second name"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="id_no">Id number</label>
                                <input type="number" class="form-control" name="id_no"  id="id_no" placeholder="id number"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="branch">Branch</label>
                                <?php if (isset($mega_admin)): ?>
                                <input type="text" class="form-control" name="branch" value="<?= ($mega_admin["branch"]) ?>"  id="branch" placeholder="branch"/>
                                <?php endif; ?>
                            </div>
                            <div class="col form-group my-2">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" name="address"  id="address" placeholder="address"/>
                            </div>
                            <div class="col form-group my-2">
                            <label for="phone">Phone number</label>
                                <input type="number" class="form-control" name="phone"  id="style" placeholder="vehicle-name"/>
                            </div>
                            <p></p>
                            <h5>Create Driver Account</h5>
                            <p></p>
                            <div class="col form-group my-2">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email"  id="email" placeholder="your email"/>
                            </div>
                            <div class="col form-group my-2">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password_hash"  id="password" placeholder="create password"/>
                            </div>
                            <div class="text-center my-2">
                                <button type="submit" name="submit" class="my-2 text-light btn btn-outline-dark btn-secondary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>