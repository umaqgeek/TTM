<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC6666">
<img src="tuffah1.jpg" width="1303" height="187" />
<div id="Container">
	<div id="Head">
  		<center>
  		<font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center></div>
	<div id="Navbar">
		<nav>
			<ul>
				<li><a href="Users.php">Home</a></li>
    			<li><a href="SubjectUser.php">Subject</a></li>
				<li><a href="InstructorUser.php">Instructor</a></li>
				<li><a href="TrainingUser.php">Training</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
	      </nav>
	</div>	  
	<div id="Content"></div>
</div>
<br />
<br />
<br />
<br />
<center>
<form action="TrainingUser.php" method="post">
			<b>ID Trainer</b><input name="IDtraining" type="text" size="20" maxlength="200" />
			<input type="submit" value="Search">
<br />
<br />
<center>
<?php
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass = "";    
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn)

{
	die('could not connect: '. mysql_error());
}
if (isset($_POST['IDtraining'])){
$trainingname = $_POST['IDtraining'];
$sql = 'SELECT trainingname, startdate, enddate, place, totalstudent FROM training WHERE IDtraining ="'.$trainingname.'"';

mysql_select_db('training_test');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
while ($rows = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	echo "<b>Training Name : {$rows['trainingname']} </b><br><br>".
	     "<b>Start Date : {$rows['startdate']} </b><br><br>".
		 "<b>End Date : {$rows['enddate']} </b><br><br>".
		 "<b>Place : {$rows['place']} </b><br><br>".
		 "<b>Total Student : {$rows['totalstudent']} </b><br><br>".
	mysql_close($conn);
	}
}
?>
</center>
</form>
</center>

<form action="ConfirmAddTrainingUser.php" method="post">
<table align="center">
<tr>
<td>Trainer Name:</td>
<td><input name="trainername" type="text" size="50" maxlength="200" /></td>
</tr><br /><br />

<tr>
<td>Start Date:</td>
<td><input name="startdate" type="text" size="20" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
<td>End Date:</td>
<td><input name="enddate" type="text" size="15" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>Place:</td>
	<td><input name="place" type="text" size="50" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>Total Student:</td><td><input name="totalstudent" type="text" size="10" maxlength="200" /></td>
</tr>
</table>
<br />
<br />
<center>
<input type="submit" value="Submit">
</center>
</form>
</body>
</html>
