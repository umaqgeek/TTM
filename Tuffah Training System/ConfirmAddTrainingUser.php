<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC6666">
<img src="tuffah1.jpg" width="100%" height="200" />
<div id="Container">
	<div id="Head">
  		<center><font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center></div>
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
	<div id="Footer"></div>
</div>

<center>
<?php
session_start();
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error()); 
}
$training_name = $_POST['training_name'];
$training_startdate = $_POST['training_startdate'];
$training_enddate = $_POST['training_enddate'];
$training_place = $_POST['training_place'];
$training_totalstudent = $_POST['training_totalstudent'];

$sql = "INSERT INTO training (training_name, training_startdate, training_enddate, training_place, training_totalstudent)
		VALUES('$training_name','$training_startdate','$training_enddate','$training_place','$training_totalstudent')";

mysql_select_db('training_system');
$retval = mysql_query($sql, $conn);
if($retval)
{
	echo "<b>SUCCESS!</b>";
	
}
else{
	die('could not get data: '. mysql_error());;
}
?>
<br /><br />
<a href="TrainingUser.php"><input type="submit" value="Back"/></a>

</center>
</center>
</body>
</html>