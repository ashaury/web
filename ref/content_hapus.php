<?php
session_start();
include('sumberkekayaan.php');
session_log();

$hapus=$_REQUEST['id'];

$link=koneksiku();
$sql="DELETE FROM tempatwisata WHERE tempat_id='$hapus' LIMIT 1";
$res=mysql_query($sql,$link);
if($res){
	echo "a";
}
else{
	echo mysql_error();
}
?>