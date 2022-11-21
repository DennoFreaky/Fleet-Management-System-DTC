<?php
if (isset($_SESSION["drivers_tbl_id"])){

$conn = require '../authentication/mega_db.php';

$sql = "SELECT * FROM drivers_tbl
        WHERE id = {$_SESSION["drivers_tbl_id"]}";

$result = $conn->query($sql);
$drivers_tbl = $result->fetch_assoc();

}
else{
    header("Location: ../index/landing_page.php");
}