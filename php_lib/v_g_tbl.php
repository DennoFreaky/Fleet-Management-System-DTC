
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">
    <link rel="stylesheet" href="../bootstrap-5.0.0-dist/css/bootstrap.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/dropdown.css">
    <link rel="stylesheet" href="../css/vendor_garagetbl.css">
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
        <h2 class="my-5 text-center">Regestered Vendors and garages</h2>
        <div class="row shadow" style="">
          <div class="col my-2 text-start">
            <?php require_once '../php_lib/vendorandgarage.php' ?>
          </div>
      </div>
    </div>
  </div>
</body>
</html>