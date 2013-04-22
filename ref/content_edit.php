<?php
session_start();
include('sumberkekayaan.php');
session_log();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<?php 
$kategori=$_REQUEST['kate'];
$id=$kategori."_id";
$nama=$kategori."nama";
$detail=$kategori."detail";
$alamat=$kategori."alamat";
$edit=$_REQUEST['id'];

?>
	<script src="dependencies/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery.elastic.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
<link href="kode/sumbergaya.css" rel="stylesheet" /></head>

</head>

<body>
<table width="1008" border="0" align="center">
  <tr>
    <td></td>
    <td><?php atas(); ?></td>
  </tr>
  <tr>
    <td width="24%" valign="top">
    <?php
	$link=koneksiku();
	$sql="select * from tempatwisata where tempat_id='$edit'";
	$res=mysql_query($sql,$link);
	if(mysql_num_rows($res)==1)
	{
		while($data=mysql_fetch_array($res))
		{
		
	?>
    <form action="content.php?kate=<?php echo $kategori;?>" method="post">
    <br />
    <h3>Menu <?php echo $kategori; ?></h3>
	<input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /><br />
<br />
<a class="link" href="content_tambah.php?kate=<?php echo $kategori; ?>">&bull; Tambah <?php echo $kategori;?> baru</a>
<br />
<br />
<a class="link" href="javascript:history.back()">&bull; kembali</a>
    </form>
    </td>
    <td width="76%">
    <!-- isi layar //-->
    <form action="content_update.php?kate=<?php echo $kategori; ?>" method="post" enctype="multipart/form-data">
<input type="hidden" name="id" value="<?php echo $edit; ?>" />
    	<table align="center">
			<tr>
    			<td align="center" colspan="2"><h1>Edit <?php echo $kategori; ?> </h1></td>
  	  		</tr>
   		 	<tr>
    			<td><label>Nama Tempat : </label></td><td><span class="w"><input type="text" name="tempat" value="<?php echo $data[$nama] ?>"  /></span></td>
   		 	</tr>
  		  	<tr>
   	 			<td><label>Alamat : </label></td><td><span class="w"><input type="text" name="alamat" value="<?php echo $data[$alamat] ?>" /></span></td>
   		 	</tr>
            <tr>
    			<td><label>Gambar :</label></td><td><input id="gbuton" type="button" value="Ganti Gambar" onclick="show()" /><span id="upload" style="display:none;"><input type="file" name="image" /></span></td>
  	  		</tr>
            <tr>
   	 			<td><label>Overview : </label></td><td>
				<span class="w">
					<textarea class="detail" name="detail" ><?php echo $data[$detail] ?></textarea>
				</span>
            </td>
  	  		</tr>
            <tr>
   	 			<td></td><td><span class="w"><input class="tsubmit" type="submit" name="submit" value="simpan"/> <input class="tsubmit" type="reset" value="Reset" /></span></td>
   		 	</tr>	
		</table>
            </form>
    <?php
		}
	}
	else
	{
		echo "tidak ditemukan";
	}	
	?>
    </td>
  </tr>
</table>
</body>
</html>