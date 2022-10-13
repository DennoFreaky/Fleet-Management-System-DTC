<?php
session_start();
if (isset($_SESSION["mega_admin_id"])) {

    $conn = require '../authentication/mega_db.php';

    $sql = "SELECT * FROM mega_admin
            WHERE id = {$_SESSION["mega_admin_id"]}";

    $result = $conn->query($sql);
    $mega_admin = $result->fetch_assoc();

}
else{
    header("Location: ../index/landing_page.php");
}
?>
