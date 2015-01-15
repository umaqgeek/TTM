<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="Menu.css" />
<link rel="stylesheet" type="text/css" href="Layout.css" />
<body bgcolor="#CC6666">
<img src="tuffah1.jpg" width="1303" height="187" />
<br />
<br />
<center><font size="20" color="#990000">TUFFAH TRAINING SYSTEM</font></center>
<br /><br />
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
<td><input name="password" type="password" size="30" maxlength="100" /></td>
</tr>

<tr>
<td></td>
</tr>

<tr>
<td colspan="3" align="center"><input type="hidden" value="Login">
<br/><input type="submit" value="Login"></td>
</tr>
</table>
</form>
<br />
<br />
</body>
</html>

