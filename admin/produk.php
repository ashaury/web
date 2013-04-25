<?php
session_start();
include('sumberkekayaan.php');
session_log();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Produk</title>

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
    <h3>Menu Produk</h3>
    		<div class="mcari"><input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /></div>
<div class="mlain"><a class="link" href="produk_tambah.php" rel="facebox">&bull; Tambah Produk baru</a></div>
    </form>
    </td>
    </tr>
    <tr>
    <td width="76%">
    <!-- isi layar //-->
    <table id="showme" align="center" border="1px">
    	<tr>
        <td>Gambar</td><td>Nama Barang</td><td>Harga Barang</td><td>edit</td><td>delete</td>
        </tr>
        <?php
		$link=koneksiku();
		$sql="select * from produk order by prod_tgl desc ";
		if(isset($_POST['submit']))
		{	
			$key=$_POST['cari'];
			$sql="select * from produk where prod_nama like '%$key%' order by prod_tgl desc";
		}
		$res=mysql_query($sql,$link);
		if($res)
		{
			while($data=mysql_fetch_array($res))
			{
				echo"
				<tr>
	    	    <td><img src=\"../images/produk/$data[url]\" width=\"100\" /></td><td>$data[prod_nama]</td><td>$data[prod_hrg]</td><td><a href=\"produk_editx.php?id=$data[prod_id]\" rel=\"facebox\">[e]</a></td><td><a href=\"javascript:delcontent(2,$data[prod_id])\">[x]</a></td>
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