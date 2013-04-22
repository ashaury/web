<?PHP
session_start();

include ('sumberkekayaan.php');
$user=$_POST['user'];
$sandi=$_POST['pass'];

$link=koneksiku();
$sql= "select * from staff where username='$user' and password='$sandi'";
$res= mysql_query($sql,$link);
if(mysql_num_rows($res)==1)
{
	$data=mysql_fetch_array($res);
	$_SESSION['staff']=$data[staff_id];
	if ($data[username]=="admin"){
	$_SESSION['admin']=true;
	header('location:staff.php');
	}
	else
	{
	$_SESSION['ultimate']=true;
	header('location:home.php');
	}
}
else{
	$sql2= "select * from tempatwisata where own_email='$user' and own_pass='$sandi'";
	$res2= mysql_query($sql2,$link);
	if(mysql_num_rows($res2)==1)
	{
	$data2=mysql_fetch_array($res2);
	$_SESSION['tempat']=$data2[tempat_id];
	$_SESSION['own']=true;
	header('location:owner.php');
	}
	else {
	$q="Username atau Password Salah!";
	header('location:index.php?q='.$q);
	return;
	}
}
?>