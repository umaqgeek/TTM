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
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
$dbuser="root";
$dbpass = "";
$dbhost = "localhost";
$db = "training_system";
mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($db);


if(isset($_GET['Update']))
{
	$id = $_GET['Update'];
	$sql = mysql_query("SELECT * FROM training WHERE training_id= $id");
	$row = mysql_fetch_array($sql);
}

?>
</center>
<center>
<h1>Update</h1>
<form action="UpdateAdmin.php" method="POST">
<table border="0" width="400">
<tr><td><b>Name Instructor:</b></td><td> <input size="50" type="text" name="instructor_name" value="<?php echo $row['instructor_name'];?>"/></td></tr>
<tr><td><b>Name Subject:</b></td><td> <input size="50" type="text" name="subject_name" value="<?php echo $row['subject_name'];?>"/></td></tr>
<tr><td><b>Code Subject:</b></td><td> <input size="50" type="text" name="subject_code" value="<?php echo $row['subject_code'];?>"/></td></tr>
<tr><td><b>Name Training:</b></td><td> <input size="50" type="text" name="training_name" value="<?php echo $row['training_name'];?>"/></td></tr>
<tr><td><b>Start Date:</b></td><td> <input size="50" type="date" name="training_startdate" value="<?php echo $row['training_startdate'];?>"/></td></tr>
<tr><td><b>End Date:</b></td><td> <input size="50" type="date" name="training_enddate" value="<?php echo $row['training_enddate'];?>"/></td></tr>
<tr><td><b>Place:</b></td><td> <input size="50" type="text" name="training_place" value="<?php echo $row['training_place'];?>"/></td></tr>
<tr><td><b>Total Student:</b></td><td> <input size="50" type="text" name="training_totalstudent" value="<?php echo $row['training_totalstudent'];?>"/></td></tr>
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

	$sql="UPDATE training SET 
	instructor_name='$_POST[instructor_name]',
		training_name='$_POST[training_name]',
			subject_name='$_POST[subject_name]',
				subject_code='$_POST[subject_code]',
					training_startdate='$_POST[training_startdate]',
						training_enddate='$_POST[training_enddate]',
							training_place='$_POST[training_place]',
								training_totalstudent='$_POST[training_totalstudent]'
	 								WHERE training_id= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	echo "Staff Has Been Modified";
	Header("Location:TrainingAdmin.php");
}
?>
