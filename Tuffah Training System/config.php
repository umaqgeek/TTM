<?php
$user = "root";
$pass = " ";
$host = "localhost";
$db = "training_system";

mysql_connect ($host, $user, $pass);
mysql_select_db($db);
session_start();
?>
