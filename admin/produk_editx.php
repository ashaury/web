<?php
session_start();
include('sumberkekayaan.php');
session_log();
	$edit=$_REQUEST['id'];
	$link=koneksiku();
	$sql="select * from produk where prod_id='$edit'";
	$res=mysql_query($sql,$link);
	if(mysql_num_rows($res)==1)
	{
		$data=mysql_fetch_array($res);
	?>
    
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Tempat Wisata</title>
<?php 
$kategori=$_REQUEST['kate'];
?>
<link href="kode/sumbergaya.css" rel="stylesheet" />
<style>
  #mapCanvas {
    width: 300px;
    height: 500px;
	float:right;	
	margin-left:auto;
	margin-right:auto;
  }
  #contform{
	  float:left;
	  margin-left:auto;
	  margin-right:auto;
  }
  </style>
	<script src="dependencies/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery.elastic.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
</head>
<body>
  <div id="contform">
  <form action="produk_update.php" method="post" enctype="multipart/form-data" onsubmit="return validasi()">
  <input type="hidden" name="id" value="<?php echo $edit; ?>" />
  <table align="left">
			<tr>
    			<td align="left" colspan="2"><h1>Edit Produk</h1></td>
  	  		</tr>
   		 	<tr>
    			<td><label>Nama Barang : </label></td><td><span class="w"><input type="text" id="nama" name="nama" value="<?php echo $data[prod_nama]?>"  /></span></td>
   		 	</tr>
  		  	<tr>
   	 			<td><label>Harga Barang : </label></td><td><span class="w"><input type="text" id="harga" name="harga" value="<?php echo $data[prod_hrg]?>" /></span></td>
   		 	</tr>
            <tr>
    			<td><label>Gambar :</label></td><td><span class="w">
                						<img src="../images/produk/<?php echo $data[url]?>" style="max-width:300px;" /><br />
                                        <input type="file" name="image" /></span></td>
  	  		</tr>
            <tr>
   	 			<td></td><td><span class="w"><input class="tsubmit" type="submit" name="submit" value="update"/> <input class="tsubmit" type="reset" value="Reset" /></span></td>
   		 	</tr>	
		</table>
        </form>
  </div>
  <script type="text/javascript" src="kode/jquery-1.4.3.min.js"></script>
<script type="text/javascript" src="kode/cal.js"></script>
<script type="text/javascript">
jQuery(document).ready(function () {
	$('input.wkt').simpleDatepicker({ startdate: 1945});
});
function validasi(){
	var j=document.getElementById("acara").value;
	var s=document.getElementById("tempat").value;
	var t=document.getElementById("date").value;
	var d=document.getElementById("detail").value;
	
	if((j=="")||(s=="")||(t="")||(d=="")){
		alert("Semua field harus di isi!");
	return false;
	}	
}
</script>
</body>
</html>
<?php
	}
	else
	echo "EROR 104 content not found";
?>