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
<form action="InstructorUser.php" method="post">
<table align="center">
<tr>
<td>Instructor Name:</td>
<td><input name="trainername" type="text" size="50" maxlength="200" /></td>
</tr><br /><br />

<tr>
<td>Instructor IC:</td>
<td><input name="startdate" type="text" size="30" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>Instructor No. Phone:</td>
	<td><input name="enddate" type="text" size="20" maxlength="200" /></td>
</tr>
</table>
<br />
<br />
<center><input type="submit" value="Submit"></center>
</form>
</body>
</html>
