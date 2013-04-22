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
<?php 
 ?>
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
    <form action="" method="post">
        <br />
    <h3>Menu Berita</h3>
<div class="mcari"><input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /></div>
<div class="mlain"><a class="link" href="kategori_tambah.php" rel="facebox">&bull; Tambah Kategori baru</a></div>
    </form>
    </td>
    </tr>
    <tr>
    <td width="76%">
    <!-- isi layar //-->
    <table id="showme" align="center" border="1px">
    	<tr>
        <td>id</td><td>Nama</td><td>edit</td><td>delete</td>
        </tr>
        <?php
		$link=koneksiku();
		$sql="select * from kategori order by kate_id desc ";
		if(isset($_POST['submit']))
		{	
			$key=$_POST['cari'];
			$sql="select * from kategori where k_nama like '%$key%' order by kate_id desc";
		}
		$res=mysql_query($sql,$link);
		if($res)
		{
			while($data=mysql_fetch_array($res))
			{
				echo"
				<tr>
	    	    <td>$data[kate_id]</td><td  class=\"nama\">$data[k_nama]</td><td><a href=\"kategori_editx.php?id=$data[kate_id]\" rel=\"facebox\">[e]</a></td><td><a href=\"javascript:delcontent(1,$data[kate_id])\">[x]</a></td>
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
</table>
<div style="display:none;" id="alert">
</div>
<script src="kode/jquery-1.4.3.min.js" type="text/javascript"></script>
<script src="kode/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
	$('a[rel*=facebox]').facebox({
	loading_image : 'facebox/loading.gif',
	close_image   : 'facebox/closelabel.gif'
	}) 
})
</script>
</body>
</html>