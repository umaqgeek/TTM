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
	$sql = mysql_query("SELECT * FROM subject WHERE IDsubject= $id");
	$row = mysql_fetch_array($sql);
}
?>
<center>
<h1>Update</h1>
<form action="UpdateSubjectAdmin.php" method="POST">
<table border="0" width="531">
<tr><td><b>Subject Name:</b></td><td> <input size="50" type="text" name="namesubject" value="<?php echo $row['namesubject'];?>"/></td></tr>
<tr><td><b>Subject Code:</b></td><td> <input size="50" type="text" name="codesubject" value="<?php echo $row['codesubject'];?>"/></td></tr>
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

	$sql = "UPDATE subject SET namesubject='$_POST[namesubject]',codesubject='$_POST[codesubject]' WHERE IDsubject= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	Header("Location:SubjectAdmin.php");
}
?>
</center>