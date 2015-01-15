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
<br />
<?php
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
?>
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
$sql = 'SELECT IDtraining, trainingname, startdate, enddate, place, totalstudent FROM training WHERE IDtraining ="'.$trainingname.'"';

mysql_select_db('training_test');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
while ($rows = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	echo "<b>ID Instructor : {$rows['IDtraining']} </b><br><br>".
	     "<b>Name Training : {$rows['trainingname']} </b><br><br>".
		 "<b>Date Start : {$rows['startdate']} </b><br><br>".
		 "<b>Date End : {$rows['enddate']} </b><br><br>".
		 "<b>Place : {$rows['place']} </b><br><br>".
		 "<b>Student Total : {$rows['totalstudent']} </b><br><br>".
		 
	mysql_close($conn);
	}
}
?>
</form>
<form action="AddTraining.php" method="post">
<input name="Add" type="submit" value="Add Training"/>
</form>
</center>
</body>
</html>

