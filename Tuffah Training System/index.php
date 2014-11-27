<?php
$user="root";
$pass="";
$host="localhost";
$db="training_app";
?>

<?php
if (isset($_POST['StaffUsername'])){
	
	$StaffUsername = $_POST['StaffUsername'];
	$StaffPassword = $_POST['StaffPassword'];
	$sql = ("SELECT * FROM staff WHERE StaffUsername='$StaffUsername'");
	$res =($sql!==0);
	
if ($res!==0)
{
	$_SESSION['auth']=true;
	Header ("Location:admin.php");
	exit();
}
else{
	echo "Invalid Username/Password";
	exit();
	}
}
?>




<link href="Menu.css" rel="stylesheet" type="text/css" />
<body id="body-color" bgcolor="#9999FF">
<fieldset>
<img src="tuffah1.jpg" width="1286" height="200"></br></br>

  <center><h1><i><font size="20" color="#993333">TUFFAH TRAINING SYSTEM</font></i></h1></center>
<table align="center">
<tr></tr>
<center>
<form action="index.php" method="post">
<td ><font color="#006633">Name</font></td>
<td > :</td>
<td ><input type="text" name="StaffUsername"/></td>
<br />
<br />
<tr></tr>
<td><font color="#006633">Password</font></td>
<td>:</td>
<td><input type="password" name="StaffPassword"/></td>
<br />
<br />
<tr>
<td colspan="3" align="center"><input type="submit" value="Login"></td>						      
</form>
</center>
</tr>
</table>
</fieldset>
</div>
</body>

