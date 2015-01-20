<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
				<li><a href="Admin.php">Home</a></li>
    			<li><a href="SubjectAdmin.php">Subject</a></li>
				<li><a href="InstructorAdmin.php">Instructor</a></li>
				<li><a href="TrainingAdmin.php">Training</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
      </nav>
	</div>	  
	<div id="Content"></div>
	<div id="Footer"></div>
</div>
<center>
<h1>Add Training</h1>
<?php
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
?>
<form action="ConfirmAddTrainingAdmin.php" method="POST">
<table border="0" width="400">
<tr><td><b>Training Name:</b></td><td> <input size="50" type="text" name="trainingname"/></td></tr>
<tr><td><b>Start Date :</b></td><td> <input size="50" type="date" name="startdate"/></td></tr>
<tr><td><b>End Date:</b></td><td> <input size="50" type="date" name="enddate"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="place"/></td></tr>
<tr><td><b>Total Student:</b> </td><td><input size="50" type="text" name="totalstudent"/></td></tr>
</table><br />
<tr>
<td colspan="2">
<center>
<input type="submit" value="Add"/></center></td></tr>
</form>
</center>
</body>
</html>
