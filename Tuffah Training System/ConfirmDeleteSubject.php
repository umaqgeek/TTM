<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_test";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Delete'];
	mysql_query("DELETE FROM subject WHERE IDsubject= $id");
	Header("Location:SubjectAdmin.php");
?>
