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
<?php
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_test";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);


if(isset($_GET['Update']))
{
	$id = $_GET['Update'];
	$sql = mysql_query("SELECT * FROM training WHERE IDtraining= $id");
	$row = mysql_fetch_array($sql);
}

?>
</center>
<center>
<h1>Update</h1>
<form action="UpdateAdmin.php" method="POST">
<table border="0" width="400">
<tr><td><b>Name Training:</b></td><td> <input size="50" type="text" name="trainingname" value="<?php echo $row['trainingname'];?>"/></td></tr>
<tr><td><b>Start Date:</b></td><td> <input size="50" type="date" name="startdate" value="<?php echo $row['startdate'];?>"/></td></tr>
<tr><td><b>End Date:</b></td><td> <input size="50" type="date" name="enddate" value="<?php echo $row['enddate'];?>"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="place" value="<?php echo $row['place'];?>"/></td></tr>
<tr><td><b>Total Student:</b></td><td> <input size="50" type="text" name="totalstudent" value="<?php echo $row['totalstudent'];?>"/></td></tr>
<tr><td></td><td> <input  type="hidden" name="ID" value="<?php echo $id;?>"/></td></tr>
</table><br /><tr><td colspan="2">
<center>
<input type="submit" name="submit" value="Update"/>
</center>
</td>
</tr>
</form>
</center>
<?php
if(isset($_POST['submit']))
{

	$sql = "UPDATE training SET trainingname='$_POST[trainingname]',startdate='$_POST[startdate]',enddate='$_POST[enddate]',place='$_POST[place]',totalstudent='$_POST[totalstudent]' WHERE IDtraining= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "Staff Has Been Modified";
	Header("Location:DeleteTrainingAdmin.php");
}
?>
