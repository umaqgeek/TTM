<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_test";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);

	$id = $_GET['Update'];
	mysql_query("DELETE FROM instructor WHERE IDinstructor= $id");
	echo "The Staff Has Been Deleted";
	Header("Location:DeleteInstructorAdmin.php");
?>
