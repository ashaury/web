<?php
session_start();
include('sumberkekayaan.php');
session_log();
$edit=$_REQUEST['id'];
	$link=koneksiku();
	$sql="select * from infoorder limit 1";
	$res=mysql_query($sql,$link);
	if(mysql_num_rows($res)==1)
	{
		$data=mysql_fetch_array($res);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Menu Produk</title>

    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
<link href="kode/sumbergaya.css" rel="stylesheet" /></head>
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
<table width="1008" border="0" align="center">
  <tr>
    <td colspan="2"><?php atas(); ?></td>
  </tr>
  <tr>
    <td width="24%" valign="top"><h1>Harga dan Info Order</h1>   
    </td>
    </tr>
    <tr>
    <td width="76%">
    <!-- isi layar //-->
    <div id="contform">
  <form action="order_update.php" method="post" enctype="multipart/form-data" onsubmit="return validasi()">
  <input type="hidden" name="id" value="<?php echo $edit; ?>" />
  <table align="center" class="edit-table">
			<tr>
    			<td align="left" ></td>
  	  		</tr>
            <tr>
   	 			<td ><span class="w"><textarea id="harga" name="harga"><?php echo $data[info]?></textarea></span></td>
   		 	</tr>
            <tr>
   	 			<td><span class="w"><input class="tsubmit" type="submit" name="submit" value="simpan"/></span></td>
   		 	</tr>	
		</table>
        </form>
  </div>
    </td>
  </tr>
</table>
<div style="display:none;" id="alert">
</div>
<?php
	}
	else
	echo "EROR 104 content not found";
?>
</body>
</html>