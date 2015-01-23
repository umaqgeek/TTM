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
<center>
<form action="SubjectUser.php" method="post">
			<b>Subject Name</b><input name="subject_id" type="text" size="20" maxlength="200" />
			<input type="submit" value="Search">		
<table width="850" border="3" rules="all" cellpadding="3">
	<tr>
	<th>No ID</th>
    <th>Name Subject</th>
    <th>Code Subject</th>
    </tr>
<br />
<br />
<br />
<br />
<center>
<?php
	$dbhost = "localhost";
	$dbuser="root";
	$dbpass = "";    
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);

if(! $conn)

{
	die('could not connect: '. mysql_error());
}
if (isset($_POST['subject_id'])){
$subject_name = $_POST['subject_id'];
$sql = "SELECT subject_id, subject_name, subject_code 
		FROM subject 
		WHERE subject_code LIKE '$subject_name' 
		ORDER BY subject_code";

mysql_select_db('training_system');
$retval = mysql_query($sql, $conn);
if(! $retval)
{
	die('could not get data: '. mysql_error());
}
$i=1;
while ($res = mysql_fetch_array($retval))
{
	 echo "<tr>";
	 echo "<td align='center'>".$i."</td>";
	 echo "<td align='center'>".$res['subject_name']."</td>";
	 echo "<td align='center'>".$res['subject_code']."</td></tr>";
	 
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

