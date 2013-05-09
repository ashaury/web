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
    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
	<script src="js/jquery-1.6.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery-ui-1.8.13.custom.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/smoothness/jquery-ui-1.8.13.custom.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE -->
	<script src="js/elrte.min.js" type="text/javascript" charset="utf-8"></script>
	<link rel="stylesheet" href="css/elrte.min.css" type="text/css" media="screen" charset="utf-8">

	<!-- elRTE translation messages -->
	<script src="js/i18n/elrte.ru.js" type="text/javascript" charset="utf-8"></script>

	<script type="text/javascript" charset="utf-8">
		$().ready(function() {
			var opts = {
				cssClass : 'el-rte',
				// lang     : 'ru',
				height   : 250,
				toolbar  : 'complete',
				cssfiles : ['css/elrte-inner.css']
			}
			$('#harga').elrte(opts);
		})
	</script>  
</head>
<body>
  <div id="contform">
  <form action="produk_update.php" method="post" enctype="multipart/form-data" onsubmit="return validasi()">
  <input type="hidden" name="id" value="<?php echo $edit; ?>" />
  <table align="left" class="edit-table">
			<tr>
    			<td align="left" colspan="2"><h1>Edit Produk</h1></td>
  	  		</tr>
   		 	<tr>
    			<td><label>Nama Barang : </label></td><td><span class="w"><input type="text" id="nama" name="nama" value="<?php echo $data[prod_nama]?>"  /></span></td>
   		 	</tr>
            <tr>
    			<td><label>Kategori : </label></td><td><select name="kate">
                <option value="" selected="selected" >---Pilih Kategori---</option>
                <?php
				$link=koneksiku();
				$sqlkate="select * from kategori";
				$reskate=mysql_query($sqlkate,$link);
				if($reskate){
					while($kate=mysql_fetch_array($reskate)){
                	echo"
					<option value=".$kate[kate_id]; 
					if ($kate[kate_id]==$data[kate_id])
					echo " selected=selected";
					echo " >".$kate[k_nama]."</option>
					";
					}
				}
				?>
				</select>
                </td>
   		 	</tr>
            <tr>
    			<td><label>Gambar :</label></td><td><span class="w">
                						<img src="../images/produk/<?php echo $data[url]?>" style="max-width:300px;" /><br />
                                        <input type="file" name="image" /></span></td>
  	  		</tr>
            <tr>
   	 			<td><label>Harga Barang : </label></td><td><span class="w"><textarea id="harga" name="harga"><?php echo $data[prod_hrg]?></textarea></span></td>
   		 	</tr>
            <tr>
   	 			<td></td><td><span class="w"><input class="tsubmit" type="submit" name="submit" value="update"/> <input class="tsubmit" type="reset" value="Reset" /></span></td>
   		 	</tr>	
		</table>
        </form>
  </div>
<?php
/*  
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
*/
?>
</body>
</html>
<?php
	}
	else
	echo "EROR 104 content not found";
?>