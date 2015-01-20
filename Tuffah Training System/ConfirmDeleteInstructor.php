<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_system";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Delete'];
	mysql_query("DELETE FROM instructor WHERE instructor_id= $id");
	Header("Location:InstructorAdmin.php");
?>
