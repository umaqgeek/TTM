<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC6666">
<div id="Container">
	<div id="Head">
  		<center>
  		<font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center></div>
	<div id="Navbar">
		<nav>
			<ul>
				<li><a href="Users.php">Home</a></li>
    			<li><a href="Subject.php">Subject</a></li>
				<li><a href="Instructor.php">Instructor</a></li>
				<li><a href="Training.php">Training</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
	      </nav>
	</div>	  
	<div id="Content"></div>
</div>
<table align="center">
<tr>
<td>Trainer Name:</td>
<td><input name="Instructor" type="text" size="50" maxlength="200" /></td>
</tr><br /><br />

<tr>
<td>Start Date:</td><td><input name="Time" type="text" size="20" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>End Date:</td><td><input name="material" type="text" size="15" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>Total Student:</td><td><input name="objective" type="text" size="10" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
	<td>Place:</td>
	<td><input name="flow" type="text" size="50" maxlength="200" /></td>
</tr>
</table>
<br />
<br />
<center><input type="submit" value="Submit"></center>
</body>
</html>
