<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_system";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Delete'];
	mysql_query("DELETE FROM training WHERE training_id=$id");
	Header("Location:TrainingAdmin.php");
?>
