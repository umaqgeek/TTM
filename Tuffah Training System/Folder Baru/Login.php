<?php
$servername = "localhost";
$username = "root";
$password = "";
// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
if (isset($_POST['username'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$sql = "SELECT UserID, username, password FROM users";
	$res = mysqli_query($sql) or die (mysqli_error());
	$result = $conn->query($sql);
if ($result->num_rows ==1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "UserID: " . $row["UserID"]. " - username: " . $row["username"]. " - password " . $row["password"]. "<br>";
    }
} else {
    echo "0 results";
}
	
	if (mysqli_num_rows($res)==1)
{
	header ("Location: Admin.php");
	exit();
}
	else{
	echo "Your password or you username is wrong";
	header ("Location: Login.php");
	exit();
	}
}
?>

<link rel="stylesheet" type="text/css" href="../Menu.css" />
<body bgcolor="#CC6666">
<img src="../Picture/tuffah1.jpg" width="1291" height="187" />
<link rel="stylesheet" type="text/css" href="../CSS/Layout.css" />
<br /><br />
<center><font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center>
<br /><br />
<form action="Login.php" method="post">
<table align="center">
<tr>
<td>Username:</td>
<td><input name="Trainer" type="text" size="30" maxlength="200" /></td>
</tr>
<br />
<br />

<tr>
<td>Password:</td>
<td><input name="Time" type="password" size="30" maxlength="200" /></td>
</tr>

<tr>
<td></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="submit" value="Login"></td>	
</tr>
</table>
</form>
<br />
<br />
</body>
</html>
