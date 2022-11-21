<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "../../authentication/mega_db.php";

    $sql = sprintf("SELECT * FROM fmo_tbl
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $fmo_tbl = $result->fetch_assoc();

    if ($fmo_tbl) {

        if (password_verify($_POST["password"], $fmo_tbl["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["fmo_tbl_id"] = $fmo_tbl["id"];

            header("Location: ../index/index.php");
            exit;
        }
        
    }

    $is_invalid = true;
}

?>

<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/signup.css">
    <title>MEGA FMO LOGIN</title>

</head>
<body class="my-3">
    <div class="mask">
        <div class="signupbox">
            <h1> FMO LOGIN </h1>
            <form action="" id="signup" method="post">
                <label for="email"><p>Email</p></label>
                <input type="text" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" id="email" placeholder="Enter your email"/>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password"/>
                <input type="submit" value="LOGIN"/>
                <input type="button" class="backbutton" value="Go Back!" onclick="history.back()">
            </form>
        </div>
    </div>
</body>
</html>