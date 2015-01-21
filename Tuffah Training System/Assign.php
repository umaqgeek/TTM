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
<center>
<h1>Fill The Form</h1>
<form action="AssignToAdd.php" method="POST">
<table width="525" height="70" border="0">
<td>Instructor Name<input name="names" type="text" /></td><br />
<td>Subject Name<input name="sname" type="text" /></td><br />
<td>Subject Code<input name="csname" type="text" /></td>
<input name="training_name" type="hidden" value="<?php echo $row['training_name'] ?>"/>
<input name="training_startdate" type="hidden" value="<?php echo $row['training_startdate'] ?>"/>
<input name="training_enddate" type="hidden" value="<?php echo $row['training_enddate'] ?>"/>
<input name="training_place" type="hidden" value="<?php echo $row['training_place'] ?>"/>
<input name="training_totalstudent" type="hidden" value="<?php echo $row['training_totalstudent'] ?>"/>
<input name="id" type="hidden" value="<?php echo $id ?>"/>
<tr align="center">
<tr><td></td></tr>
<td colspan="5" align="center">
<input type="submit" name="submit" value="Assign" />
</td>
</tr>
</table>
</form>
<br />
<br />

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
</body>
</html>