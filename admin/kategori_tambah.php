<?php
session_start();
include('sumberkekayaan.php');
session_log();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tambah Tempat Wisata</title>
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
  <form name="beritaku" action="kategori_simpan.php" method="post" enctype="multipart/form-data" onsubmit="return ikuayo()">
  <table align="left">
			<tr>
    			<td align="left" colspan="2"><h1>Tambah Kategori Baru</h1></td>
  	  		</tr>
            <tr>
    			<td><label>Nama Kategori :</label></td><td><span class="w"><input type="text"  name="nama" /></span></td>
  	  		</tr>
            <tr>
   	 			<td></td><td><span class="w"><input class="tsubmit" type="submit" name="submit" value="simpan"/> <input class="tsubmit" type="reset" value="Reset" /></span></td>
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
function ikuayo(){
	var j=document.getElementById("berita").value;
	var s=document.getElementById("sumber").value;
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