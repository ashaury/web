<?php
session_start();
include('sumberkekayaan.php');
	if(isset($_SESSION['ultimate']))
	$masuk=$_SESSION['ultimate']; 
	else {
		if (isset($_SESSION['admin']))
		$masuk=$_SESSION['admin'];
		else
		$masuk=false;
	}
	if($masuk==false) 
	header('location:index.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
  
		<title>JAJADUNG On Construction</title>
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
	    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
		<link href="kode/sumbergaya.css" rel="stylesheet" /></head>
    </head>
	<body>
<table width="1008" border="0" align="center">
  <tr>
    <td colspan="2"><?php atas(); ?></td>
  </tr>
  <tr>
    <td width="24%" valign="top">
    <form action="content.php" method="post">
        <br />
    <h3></h3>
    	<input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /><br />
<br />
    </form>
    </td>
    <td width="76%">
    <!-- isi layar //-->
        <p align="center">
	Selamat Datang, 
    <?php
	$id=$_SESSION['staff'];
	$link=koneksiku();
	$sql="select * from staff where staff_id='$id'";
    $res=mysql_query($sql,$link);
	if($res)
	{
	$petugas=mysql_fetch_array($res);
	echo $petugas[staffnama];
	
	}
	else{
	
	echo mysql_error();
	}
	?>
</p> 
    </td>
  </tr>
</table>		
        
	</body>
</html>