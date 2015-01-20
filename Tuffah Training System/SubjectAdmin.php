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
<?php
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
?>
<center>
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
<br />
<center>
<h1>Subject Application</h1>
<table width="900" border="3" rules="all" cellpadding="3">

	<tr>
	<th>Subject ID</th>
    <th>Subject Name</th>
    <th>Subject Code</th>
	<th>Status</th>
    </tr>
	
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$sql = "SELECT * FROM subject";

mysql_select_db('training_system');
$retval = mysql_query($sql,$conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
$i=1;
while ($res = mysql_fetch_array($retval))
{
	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$res['subject_name']."</td>";
	 echo "<td align='center'>".$res['subject_code']."</td>";
	 echo "<td align='center'><a href='UpdateSubjectAdmin.php?Update=$res[subject_id]'>Update</a>\n";
	 echo "<a href='ConfirmDeleteSubject.php?Delete=$res[subject_id]'>Delete</a></td><br>";

	 $i++;
 }
?>
</table>
</center>

<center>
<h1>Add Subject</h1>
<form action="ConfirmAddSubjectAdmin.php" method="POST">
<table border="0" width="525">
<tr><td><b>Subject Name:</b></td><td> <input size="50" type="text" name="subject_name"/></td></tr>
<tr><td><b>Subject Code :</b></td><td> <input size="50" type="text" name="subject_code"/></td></tr>
</table>
<br />

<tr>
<td colspan="2">
<center>
<input type="submit" value="Add New Subject"/></center></td></tr>
<br />
<br />
</form>
</center>
</body>
</center>
</html>