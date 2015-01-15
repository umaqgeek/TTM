<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<center>
<body bgcolor="#CC6666">
<img src="tuffah1.jpg" width="1303" height="187" />
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
<h1>Instrutor Application</h1>
<table width="900" border="3" rules="all" cellpadding="3">

	<tr>
	<th>Instructor ID</th>
    <th>Instructor Name</th>
    <th>Instructor IC</th>
    <th>No. Phone</th>
	<th>Status</th>
    </tr>

<?php
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '. mysql_error());
}
$sql = "SELECT * FROM instructor";

mysql_select_db('training_test');
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
	 echo "<td align='center'>".$res['nameinstructor']."</td>";
	 echo "<td align='center'>".$res['icinstructor']."</td>";
	 echo "<td align='center'>".$res['noinstructor']."</td>";
	 echo "<td><a href='UpdateInstructorAdmin.php?Update=$res[IDinstructor]'>Update</a>\n";
	 echo "<a href='ConfirmDeleteInstructor.php?Delete=$res[IDinstructor]'>Delete</a></td><br>";

	 $i++;
 }
?>
  </table>
  </center>
  <br />
  <br />
  <br />
  
<center>
<h1>Add Instructor</h1>
<form action="ConfirmAddInstructorAdmin.php" method="POST">
<table border="0" width="525">
<tr><td><b>Instructor Name:</b></td><td> <input size="50" type="text" name="nameinstructor"/></td></tr>
<tr><td><b>Instructor IC :</b></td><td> <input size="50" type="text" name="icinstructor"/></td></tr>
<tr><td><b>No. Phone:</b></td><td> <input size="50" type="text" name="noinstructor"/></td></tr>
</table>
<br />

<tr>
<td colspan="2">
<center>
<input type="submit" value="Add New Instructor"/>
</center>
</td>
</tr>
<br />
<br />
</form>
</body>
</center>
</html>