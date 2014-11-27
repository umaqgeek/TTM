<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="Menu.css" rel="stylesheet" type="text/css" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body bgcolor="#9999FF" text="user" id="body-color">
<fieldset>
<div id="Container"/>
<div id="Head">
  <img src="tuffah1.jpg" width="1281" height="245"/>
  <center><font size="20" color="#993333">TUFFAH TRAINING SYSTEM</font></center>
  <br />
  <center><font size="20" color="#993333">USER PROFILE</font></center>
</div>
<table width="356" height="182" align="center">
<tr><center><form action="User Account.php" method="post">

		<td>UserID</td><td>:</td>
		<td><input type="text" name="username" size="30"/></td>
		<br /><br />
		<tr>
        <td>Username</td><td>:</td>
		<td><input type="password" name="password" size="30"/></td>
		<br /><br />
		<tr>
        <td>IC No.</td><td>:</td>
		<td><input type="text" name="username" size="30"/></td>
		<br /><br />
		<tr>
		<td>E-Mail</td><td>:</td>
		<td><input type="text" name="username" size="30"/></td>
		<br /><br />
		<tr>
        <td>Gender</td><td>:</td>
		<td><input name="Male" type="checkbox" value="Male" />Male
			<input name="Female" type="checkbox" value="Female" />Female</td>
		<br />
		<br />
		<tr> 
				 <td colspan="3"><input type="submit" value="Update"/>
				 	<input name="Add" type="submit" value="Add" />
				 	<input name="Delete" type="submit" value="Delete" /></td>
</form>
</center>
</tr>
</table>
<form action="Manage User.php" method="post">
<center><input name="Home" type="submit" value="HOME" />
</center>
</form>     
</body>
</fieldset>
</html>
