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
	$sql = mysql_query("SELECT * FROM user WHERE user_id_user= $id");
	$row = mysql_fetch_array($sql);
}
?>
<center>
<h1>Update</h1>
<form action="UpdateAccount.php" method="POST">
<table border="0" width="531">
<tr><td><b>Name:</b></td><td> <input size="50" type="text" name="user_name_user" value="<?php echo $row['user_name_user'];?>"/></td></tr>
<tr><td><b>User IC:</b></td><td> <input size="50" type="text" name="user_ic" value="<?php echo $row['user_ic'];?>"/></td></tr>
<tr><td><b>Username:</b></td><td> <input size="50" type="text" name="username" value="<?php echo $row['username'];?>"/></td></tr>
<tr><td><b>Password:</b></td><td> <input size="50" type="password" name="password" value="<?php echo $row['password'];?>"/></td></tr>
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

	$sql = "UPDATE user SET 
				user_name_user='$_POST[user_name_user]',
					user_ic='$_POST[user_ic]',
						username='$_POST[username]',
							password='$_POST[password]' 
			WHERE user_id_user= $_POST[ID]";
	$res = mysql_query($sql) or die ("could not update".mysql_error());
	Header("Location:Account.php");
}
?>
</center>