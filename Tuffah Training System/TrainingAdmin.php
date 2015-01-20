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
<h1>Training Application</h1>
</center>	
<center>
<table width="850" border="3" rules="all" cellpadding="3">

	<tr>
	<th>No ID</th>
    <th>Name</th>
    <th>Date Start</th>
    <th>Date End</th>
    <th>Place</th>
    <th>Student Total</th>
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
$sql = "SELECT * FROM training";

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
	 echo "<td align='center'>".$res['training_name']."</td>";
	 echo "<td align='center'>".$res['training_startdate']."</td>";
	 echo "<td align='center'>".$res['training_enddate']."</td>";
	 echo "<td align='center'>".$res['training_place']."</td>";
	 echo "<td align='center'>".$res['training_totalstudent']."</td>";
	 echo "<td align='center'><a href='UpdateAdmin.php?Update=$res[training_id]'>Update</a>\n";
	 echo "<a href='ConfirmDelete.php?Delete=$res[training_id]'>Delete</a>\n";
	 echo "<a href=Assign.php?Assign=$res[training_id]'>Assign</a></td></tr><br>";
	 $i++;
 }
?>
</table>
</center>
<br />
<br />
<center>
<h1>Add Training</h1>
<form action="ConfirmAddTrainingAdmin.php" method="POST">
<table border="0" width="525">
<tr><td><b>Training Name:</b></td><td> <input size="50" type="text" name="training_name"/></td></tr>
<tr><td><b>Date Start :</b></td><td> <input size="50" type="date" name="training_startdate" placeholder="yy-mm-dd"/></td></tr>
<tr><td><b>Date End:</b></td><td> <input size="50" type="date" name="training_enddate" placeholder="yy-mm-dd"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="training_place"/></td></tr>
<tr><td><b>Total Student:</b> </td><td><input size="50" type="text" name="training_totalstudent"/></td></tr>
<br />
<tr align="center">
<td colspan="5">
<input type="submit" value="Add New Training" />
</td>
</tr>
</table>
</form>
</center>
</center>
</body>
</html>