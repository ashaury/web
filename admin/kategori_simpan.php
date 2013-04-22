<?php
session_start();
include('sumberkekayaan.php');
session_log();

$nama=$_POST['nama'];


	$link=koneksiku();
 if(isset($_POST['submit']))
 {

		$sqlc2="insert into kategori values ('','$nama')";
		$resc2=mysql_query($sqlc2,$link);
		if($resc2)
		header("location:kategori.php");
		else
		echo "Error connection ".mysql_error();		
 }
 else
 echo"eh";
 ?>
 
