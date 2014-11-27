<?php

session_start();
$StaffUsername = $_POST['StaffUsername'];
$StaffPassword = $_POST['StaffPassword'];

if ($StaffUsername&&$StaffPassword)
{
	$connect = mysql_connect("localhost","root", "") or die ("Couldn't connect to database");
	mysql_select_db("training_app") or die ("Couldn't find database");
	$query = mysql_query("SELECT * FROM staff WHERE StaffUsername='$StaffUsername'");
	$numrows = mysql_num_rows($query);
	
if ($numrows!==0)
{
	while($row = mysql_num_rows($query))
	{	
		$dbStaffUsername = $res['StaffUsername'];
		$dbStaffPassword = $res['StaffPassword'];
	}
	if ($StaffUsername==$dbStaffUsername&&md5($StaffPassword)==$dbStaffPassword)
	{
		echo "you are logged";
		$_SESSION['StaffUsername'] * $StaffUsername;	
	}
	else 
		echo "your password is incorrect";
  }
  else 
		die("That user does exist");
}
  else 
		die("Please enter a username and password");
?>
