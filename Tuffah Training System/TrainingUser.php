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
</form>
</center>

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
<center>
<h1>Add Training</h1>
<form action="ConfirmAddTrainingUser.php" method="POST">
<table border="0" width="400">
<tr><td><b>Training Name:</b></td><td> <input size="50" type="text" name="trainingname"/></td></tr>
<tr><td><b>Start Date :</b></td><td> <input size="50" type="date" name="startdate"/></td></tr>
<tr><td><b>End Date:</b></td><td> <input size="50" type="date" name="enddate"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="place"/></td></tr>
<tr><td><b>Total Student:</b> </td><td><input size="50" type="text" name="totalstudent"/></td></tr>
</table><br />
<tr>
<td colspan="2">
<input type="submit" value="Add"/>
</td>
</tr>
</form>
</center>
</body>
</html>
