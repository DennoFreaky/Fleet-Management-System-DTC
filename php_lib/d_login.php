<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $mysqli = require __DIR__ . "../../authentication/mega_db.php";

    $sql = sprintf("SELECT * FROM drivers_log
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));

    $result = $mysqli->query($sql);

    $drivers_log = $result->fetch_assoc();

    if ($drivers_log) {

        if (password_verify($_POST["password"], $drivers_log["password_hash"])) {

            session_start();

            session_regenerate_id();

            $_SESSION["drivers_log_id"] = $drivers_log["id"];

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
    <title>Mega Drivers LOGIN</title>

</head>
<body class="my-3">
    <div class="mask">
        <div class="signupbox">
            <h1> LOGIN HERE </h1>
            <form action="" id="signup" method="post">
                <label for="email"><p>Email</p></label>
                <input type="text" name="email" value="<?= htmlspecialchars($_POST["email"] ?? "") ?>" id="email" placeholder="Enter your email"/>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Enter Password"/>
                <input type="submit" value="LOGIN"/>
                <p> Dont have an account?</p>
                <a href="../php_lib/driver_signup.html">signup here</a>
            </form>
        </div>
    </div>
</body>
</html>