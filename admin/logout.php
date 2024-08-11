<?php
session_start();
unset($_SESSION["ad_logged_in"]);
unset($_SESSION["ad_email"]);
header("Location:login.php");
session_destroy();
?>
