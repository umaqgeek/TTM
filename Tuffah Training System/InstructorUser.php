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
<form action="InstructorUser.php" method="post">
			<b>ID Instructor</b><input name="IDinstructor" type="text" size="20" maxlength="200" />
			<input type="submit" value="Search"/>
<br />
<br />
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
if (isset($_POST['IDinstructor'])){
$nameinstructor = $_POST['IDinstructor'];
$sql = 'SELECT IDinstructor, nameinstructor, icinstructor, noinstructor FROM instructor WHERE IDinstructor ="'.$nameinstructor.'"';

mysql_select_db('training_test');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
while ($rows = mysql_fetch_array($retval,MYSQL_ASSOC))
{
	echo "<b>ID Instructor : {$rows['IDinstructor']} </b><br><br>".
	     "<b>Name Instructor : {$rows['nameinstructor']} </b><br><br>".
		 "<b>Ic Instructor : {$rows['icinstructor']} </b><br><br>".
		 "<b>No Instructor : {$rows['noinstructor']} </b><br><br>".
		 
	mysql_close($conn);
	}
}
?>
</center>
</form>
</center>
</body>
</html>
