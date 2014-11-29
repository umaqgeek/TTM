<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="#CC6666">
<div id="Container">
	<div id="Head">
  		<center>
  		<font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center></div>
	<div id="Navbar">
		<nav>
			<ul>
				<li><a href="Users.php">Home</a></li>
    			<li><a href="Subject.php">Subject</a></li>
				<li><a href="Instructor.php">Instructor</a></li>
				<li><a href="Training.php">Training</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
	      </nav>
	</div>	  
	<div id="Content"></div>
</div>
</body>
</html>

<center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);

if(! $conn)

{
	die('could not connect: '. mysqli_error());
}

if (isset($_POST['idsubject'])){
$nameSubject = $_POST['idsubject'];
$sql = 'SELECT idsubject, codesubject, nameSubject FROM subject WHERE idsubject =" '.$nameSubject.'"';

mysqli_select_db('training system');
$retval = mysqli_query($sql, $conn);

if(! $retval)
{
	die('could not get data: '. mysqli_error());
}

while ($rows = mysqli_fetch_array($retval,MYSQL_ASSOC))
{
	echo "<b>Name : {$rows['nameSubject']} </b><br><br>".
		 "<b>Code Subject : {$rows['codesubject']} </b><br><br>";
}
mysqli_close('$conn');
}
?>
</center>