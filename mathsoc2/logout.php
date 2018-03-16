<?php
//home controller
session_start();

session_destroy();
//unset($_SESSION['user']);
unset($_GET['request']);
header("Location: login.php");
die();
?>