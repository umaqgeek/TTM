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
<br />
<?php
session_start();
$name = $_SESSION['username'];
echo $_SESSION['username'];
?>
<div id="Container">
	<div id="Head"></div>
	<div id="Navbar">
		<nav>
			<ul>
				<li><a href="Users.php">Home</a></li>
    			<li><a href="SubjectUser.php">Subject</a></li>
				<li><a href="InstructorUser.php">Instructor</a></li>
				<li><a href="TrainingUser.php">Training</a></li>
				<li><a href="logout.php">Logout</a></li>
			</ul>
	      </nav>
	</div>	  
	<div id="Content"></div>
</div>
<br />
<br />
<br />
<br />
<center>
<form action="InstructorUser.php" method="post">
			<b>Instructor Name</b><input name="instructor_id" type="text" size="20" maxlength="200" />
			<input type="submit" value="Search"/>
<br />
<br />
<table width="850" border="3" rules="all" cellpadding="3">

	<tr>
	<th>No ID</th>
    <th>Instructor Name</th>
    <th>Instructor IC</th>
	<th>Instructor No</th>
    </tr>
<br />
<br />
<center>
<?php
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass = "";    
	$conn=mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn)

{
	die('could not connect: '. mysql_error());
}
if (isset($_POST['instructor_id'])){
$instructor_name = $_POST['instructor_id'];
$sql = "SELECT instructor_id, instructor_name, instructor_ic, instructor_no 
		FROM instructor 
		WHERE instructor_name LIKE '$instructor_name' 
		ORDER BY instructor_name";

mysql_select_db('training_system');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '.mysql_error());
}
$i=1;
while ($res = mysql_fetch_array($retval))
{
	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$res['instructor_name']."</td>";
	 echo "<td align='center'>".$res['instructor_no']."</td>";
	 echo "<td align='center'>".$res['instructor_ic']."</td></tr>";
	 
	 $i++;
	}
}
?>
</center>
</table>
</form>
</center>
</body>
</html>
