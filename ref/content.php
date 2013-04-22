<?php
session_start();
include('sumberkekayaan.php');
session_log();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Tempat Wisata</title>
<link href="kode/sumbergaya.css" rel="stylesheet" /></head>
<?php 
 ?>
	<script type="text/javascript" src="kode/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="kode/facebox.js"></script>
    <script type="text/javascript">
	jQuery(document).ready(function($) {
	$('a[rel*=facebox]').facebox({
	loading_image : 'facebox/loading.gif',
	close_image   : 'facebox/closelabel.gif'
	}) 
})
</script>
    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>


</head>

<body>
<table width="1008" border="0" align="center">
  <tr>
    <td colspan="2"><?php atas(); ?></td>
  </tr>
  <tr>
    <td width="24%" valign="top" class="submenu">
    <form action="" method="post">
        <br />
    <h3>Menu Tempat Wisata</h3>
    	<div class="mcari"><input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /></div><div class="mlain"><a class="link" href="content_tambah.php">&bull; Tambah Tempat baru</a></div>
    </form>
    </td>
    </tr>
    <tr>
    <td width="76%">
    <!-- isi layar //-->
    <table id="showme" align="center">
    	<tr>
        <td>Gambar</td><td>Tempat</td><td>Telp</td><td>Alamat</td><td>Deskripsi</td><td>Latitude</td><td>Longitude</td><td>Tanggal Post</td><td>edit</td><td>delete</td>
        </tr>
        <?php
		$link=koneksiku();
		$sql="select tempat_id,tempaturl,tempatnama,tempattelp,tempatalamat,substr(tempatdetail,1,100) as detail,FORMAT(tempatlat,2) as lat,FORMAT(tempatlon,2) as lon, tempatdate from tempatwisata order by tempatnama ";
		if(isset($_POST['submit']))
		{	
			$key=$_POST['cari'];
			$sql="select * from tempatwisata where tempatnama like '%$key%' order by tempatnama";
		}
		$res=mysql_query($sql,$link);
		if($res)
		{
			while($data=mysql_fetch_array($res))
			{
				echo"
				<tr>
	    	    <td><img src=\"../content/$data[tempaturl]\" width=\"100\" /></td><td>$data[tempatnama]</td><td>$data[tempattelp]</td><td>$data[tempatalamat]</td><td>$data[detail]...</td><td>$data[lat]</td><td>$data[lon]</td><td>$data[tempatdate]</td><td><a href=\"content_editx.php?id=$data[tempat_id]\">[e]</a></td><td><a href=\"javascript:delcontent(1,$data[tempat_id])\">[x]</a></td>
    	    	</tr>
				";
			}
		}
		else
		{
			echo "eror".mysql_error();
		}
		?>
    </table>
    </td>
  </tr>
  <tr>
  <td><?php
footer();
?></td>
  </tr>
</table>
<div style="display:none;" id="alert">
</div>

</body>
</html>