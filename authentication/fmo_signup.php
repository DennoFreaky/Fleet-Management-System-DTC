<?php
if (empty($_POST["fname"])) {
    die("fname name is required");
}
if (empty($_POST["sname"])) {
    die("sname name is required");
}
if (empty($_POST["fmoid"])) {
    die("fmo_id name is required");
}
if (empty($_POST["branch"])) {
    die("branch is required");
}
if (empty($_POST["address"])) {
    die("address is required");
}
if (empty($_POST["phone"])) {
    die("phone is required");
}
if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Valid email is required");
}

if (strlen($_POST["password"]) < 8) {
    die("Password must be at least 8 characters");
}

if ( ! preg_match("/[a-z]/i", $_POST["password"])) {
    die("Password must contain at least one letter");
}

if ( ! preg_match("/[0-9]/", $_POST["password"])) {
    die("Password must contain at least one number");
}

if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Passwords must match");
}

$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);

$mysqli = require __DIR__ . "../../authentication/mega_db.php";

$sql = "INSERT INTO fmo_tbl (fname,sname,fmoid,branch,address,phone,email, password_hash)
        VALUES (?,?,?,?,?,?,?,?)";

$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}
$stmt->bind_param("ssssssss",
                  $_POST["fname"],
                  $_POST["sname"],
                  $_POST["fmoid"],
                  $_POST["branch"],
                  $_POST["address"],
                  $_POST["phone"],
                  $_POST["email"],
                  $password_hash);

                  if ($stmt->execute()) {

                    header("Location: ../authentication/signup_success.html");
                    exit;
                
                } else {
                
                    if ($mysqli->errno === 1062) {
                        die("Email already taken");
                    } 
                    else {
                        die($mysqli->error . " " . $mysqli->errno);
                    }
                }
                                

?>