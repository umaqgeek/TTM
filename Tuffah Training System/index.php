<?
if (isset ($_POST['User_name']))
{
	$username = $_POST['username'];
	$User_password = $_POST['User_password'];
	$sql = "SELECT Staff FROM  WHERE username='sufi".$username."' AND 
	User_password='sufi123".$User_password."'LIMIT 1";
	$res = mysql_query($sql);
if (mysql_num_row($res)== 1)
{
	$_SESSION['auth']=true;
	Header ("Location: index.php"); 
	exit ();
}
else
{
	echo "Invalid Login";
	exit();
	}
}	
?>

<link rel="stylesheet" type="text/css" href="Style.css" >
<body id="body-color" bgcolor="#9999FF">
<center>
<fieldset style="width:50%">
<img src="tuffah1.jpg" width="625" height="200"></br></br>
<h1><i><font size="20" color="#993333">TRAINING APPLICATION</font></i></h1>
<br/>

<form action="Process.php" method="post">
<font color="#006633">Name :</font>
  		<input type="text" name="NameUser"/>
<br />
<br />
<font color="#006633">Password :</font><input type="password" name="Userpassword"/><br /><br />
        <input type="submit" value="Login"  align="absmiddle"/>
						      
</form>
</fieldset>
</center>
</div>
</body>

