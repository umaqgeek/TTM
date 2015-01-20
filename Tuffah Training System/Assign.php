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
<br />
<br />
<br />
<center>
<table width="850" border="3" rules="all" cellpadding="3">
	<tr>
	<th>ID Training</th>
	<th>Name Training</th>
    <th>Date Start</th>
    <th>Date End</th>
    <th>Place</th>
    <th>Student Total</th>
    </tr>
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '.mysql_error());
}
$sql = "SELECT * FROM training WHERE training_id";

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
	 
	 $i++;
}
?>
</table>
</center>
<br />
<br />
<center>
Instructor Name
<select name="Instructor">
<option> Please Select </option>
<option> <?php echo 'Reza Bin Hasim';?> </option>
<option> <?php echo 'Hadin Bin Saat';?> </option>
</select>
<a href="#"><input name="Add" type="submit" value="Add"/></a>
</center>
<br />
<br />
<center>
<table width="850" border="3" rules="all" cellpadding="3">
	<tr>
	<th>ID Training</th>
	<th>Name Instructor</th>
	<th>Name Training</th>
    </tr>
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$conn = mysql_connect($dbhost,$dbuser,$dbpass);

if(! $conn)
{
	die('could not connect: '.mysql_error());
}
$sql = "SELECT training_id, instructor_id, training_name, instructor_name  FROM training, instructor WHERE training_id, instructor_id";

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
	 echo "<td align='center'>".$res['instructor_name']."</td>";
	 echo "<td align='center'>".$res['training_name']."</td>";
	
	 
	 $i++;
}
?>
</table>
<br />
<br />
</center>
</body>
</html>