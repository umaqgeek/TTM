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

$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db('training_system');

if(! $conn)
{
	die('could not connect: '. mysql_error());
}


if (isset($_GET['Assign'])){

$id = $_GET['Assign'];
$sql = mysql_query("SELECT * FROM training
		WHERE training_id = $id");
$row = mysql_fetch_array($sql);

}
?>
<div id="Container">
	<div id="Head"></div>
	<div id="Navbar">
		<nav>
			<ul>
				<li><a href="Admin.php">Home</a></li>
    			<li><a href="SubjectAdmin.php">Subject</a></li>
				<li><a href="InstructorAdmin.php">Instructor</a></li>
				<li><a href="TrainingAdmin.php">Training</a></li>
				<li><a href="Account.php">Account</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
      </nav>
	</div>	  
	<div id="Content"></div>
	<div id="Footer"></div>
</div>
<br />
<br />
<center>
</center>
<br />
<br />
<center>
<table width="850" border="3" rules="all" cellpadding="3">

	<tr>
	<th>No ID</th>
	<th>Name Instructor</th>
	<th>Name Subject</th>
	<th>Code Subject</th>
    <th>Name Training</th>
    <th>Date Start</th>
    <th>Date End</th>
    <th>Place</th>
	<th>Student Total</th>
    </tr>
<?php
  if (isset($_POST['submit'])){
$names = $_POST['names'];
$sname = $_POST['sname'];
$csname = $_POST['csname'];
$tnames = $_POST['training_name'];
$start = $_POST['training_startdate'];
$end = $_POST['training_enddate'];
$place = $_POST['training_place'];
$total = $_POST['training_totalstudent'];

$i=1;

	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$names."</td>";
	 echo "<td align='center'>".$sname."</td>";
	 echo "<td align='center'>".$csname."</td>";
	 echo "<td align='center'>".$tnames."</td>";
	 echo "<td align='center'>".$start."</td>";
	 echo "<td align='center'>".$end."</td>";
	 echo "<td align='center'>".$place."</td>";
	 echo "<td align='center'>".$total."</td></tr>";
	 
	$i++;
}
	
?>
</table>
</center>
<br />
<br />
<center>
<table>
<td><input type="submit" value="Save"/></td>
<td><input type="submit" value="Back"/></td>
</table>
</center>
</body>
</html>