<?php
session_start();
include('sumberkekayaan.php');
session_log();

$harga=$_POST['harga'];

 if(isset($_POST['submit']) && !$errors) 
 {
	$link=koneksiku();
	$sql="UPDATE infoorder SET info = '$harga'";	
	$res=mysql_query($sql,$link);
	if($res)
	{	
	header("location:order.php");
	}
	else
	{
	echo "Error connection ".mysql_error();
	}
 }
 else
 echo"eh";

 ?>