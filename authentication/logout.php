<?php

session_start();

session_destroy();

header("Location: ../index/landing_page.php");
exit;