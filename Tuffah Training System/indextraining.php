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
	<div id="Head"></div>
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
<br />
<center>
<h1>Training Application</h1>
<table width="900" border="1" rules="all">

	<tr>
	<th>No ID</th>
    <th>Name</th>
    <th>Date Start</th>
    <th>Date End</th>
    <th>Place</th>
    <th>Student Total</th>
	<th>Status</th>
    </tr>
	</table>
</center>
<center>
<h1>Add Training</h1>
<form action="ConfirmAddTrainingAdmin.php" method="POST">
<table border="0" width="525">
<tr><td><b>Training Name:</b></td><td> <input size="50" type="text" name="training_name"/></td></tr>
<tr><td><b>Date Start :</b></td><td> <input size="50" type="date" name="training_startdate" placeholder="yy-mm-dd"/></td></tr>
<tr><td><b>Date End:</b></td><td> <input size="50" type="date" name="training_enddate" placeholder="yy-mm-dd"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="training_place"/></td></tr>
<tr><td><b>Total Student:</b> </td><td><input size="50" type="text" name="training_totalstudent"/></td></tr>
</table>
<br />

<tr>
<td colspan="2">
<center>
<input type="submit" value="Add New Training"/></center></td></tr>
<br />
<br />
</form>
</center>
</body>
</html>