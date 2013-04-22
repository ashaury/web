<?php
session_start();
include('sumberkekayaan.php');
session_content();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Wiratamaproduction</title>
<style type="text/css">
body{
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	background-color:#fff;
	color:#000;
}
table{
	height:300px;
}
table th{
	text-align:left;
	font-size:10px;
}
.text{
	width:250px;
	border:solid;
	border-color:#666;
}
.butu{
	background-color:red;
	color:#fff;
	width:100px;
	height:30px;
}
a{
	color:#00F;
}

</style>
</head>

<body>
<form action="login.php" method="post"><br>
<br>
<br>
<table width="593" align="center" >
	<tr>
    	<td width="200"></td>
        <th width="375"><img src="img/ban-adm.png" /> administrator site</th>
    </tr>
	<tr class="form">
    	<td height="32"><div align="right">Username : </div></td>
      <td><input type="text" name="user" class="text" /></td>
    </tr>
    	<tr class="form">
    	<td height="32"><div align="right">Password : </div></td>
        <td><input type="password" name="pass" class="text" /></td>
    </tr>
    <tr>
    	<td height="34"></td>
      <td><input type="submit" class="butu" value="Log in" name="submit" /></td>
    </tr>
<!--
    <tr>
    	<td></td>
        <td>
<a href="#"><b>Lupa Password?</b></a></td>
    </tr>
//-->    
    <tr>
    	<td colspan="2" style="text-align:center;"><?php echo $_REQUEST['q']; ?></td>
    </tr>
</table>
</form>
</body>
</html>
