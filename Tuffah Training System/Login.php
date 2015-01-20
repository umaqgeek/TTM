<?php
session_start();
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass = "";    
	$conn = mysql_connect($dbhost, $dbuser, $dbpass)
	or die ("Error connecting to MSQL");
	$dbname ="training_system";
	mysql_select_db($dbname) or
	die ("Error connecting to Database: ".$dbname);
		
if(isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
		if($username !=''&& $password !=''){
		$sql = "SELECT * FROM admin WHERE username='".$username."' AND password='".$password."' LIMIT 1 ";
		$res = mysql_query($sql) or die(mysql_error());
	
			if (mysql_num_rows($res) > 0)
			{
				$_SESSION['auth']=true;
				$_SESSION['username']=$_POST['username'];
				header("Location:Admin.php");
				exit();
			}
		}
	}
		if(isset($_POST['username'])){
		$username = $_POST['username'];
		$password = $_POST['password'];
	
			if($username !=''&& $password !=''){
			$sql = "SELECT * FROM user WHERE username='".$username."' AND password='".$password."' LIMIT 1 ";
			$res = mysql_query($sql) or die(mysql_error());
	
				if(mysql_num_rows($res) > 0)
				{
					$_SESSION['auth']=true;
					$_SESSION['username']=$_POST['username'];
					header("Location:Users.php");
					exit();
				} 
				else
				{	
					echo "invalid login";
					echo "Your username or you Password is wrong!";
					header("Location:Login.php");
					exit();
			}
		}
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC6666">
<img src="tuffah1.jpg" width="100%" height="200" />
<br />
<br />
<center>
<font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font>
</center>
<br />
<br />

<form action="Login.php" method="post">
<table align="center">
<tr>
<td>Username:</td>
<td><input name="username" type="text" size="30" maxlength="200" /></td>
</tr>
<br />
<br />
<tr>
<td>Password:</td>
<td><input name="password" type="password" size="30" maxlength="200" /></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" value="Login"></td>	
</tr>
</table>
</form>
</body></html>