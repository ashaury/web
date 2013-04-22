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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script src="dependencies/jquery-1.3.2.js" type="text/javascript" charset="utf-8"></script>
	<script src="jquery.elastic.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="kode/sumberjavascript.js" ></script>
    <script type="text/javascript">
var geocoder = new google.maps.Geocoder();
var newmarker;

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('Cannot determine address at this location.');
    }
  });
}


function updateMarkerLat(latLng) {
  document.getElementById('latform').value = [
     latLng.lat()
  ];
}
function updateMarkerLng(latLng) {
  document.getElementById('lonform').value = [
    latLng.lng()
  ];
}

function updateMarkerAddress(str) {
  document.getElementById('addrform').value = str;
}

function initialize() {
  var latLng = new google.maps.LatLng(-6.915226505832992,107.61250248052977);
  var map = new google.maps.Map(document.getElementById('mapCanvas'), {
    zoom: 13,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });


  google.maps.event.addListener(map, "rightclick", function(event) {
        placeMarker(event.latLng);
    });


    function placeMarker(location) {
        var newmarker = new google.maps.Marker({
            position: location,
            map: map,
            draggable: true
        });


        var form = 
            '<div id="bodyContent">'+
            '<b>New Map</b>' +
            '<form method="post">'+
            '<table>'+
            '<tr><td>Name place :<input type="text" name="name"/></td></tr>'+
            '<tr><td>Latitude :<input type="text" name="latitude" value="latnew"/></td></tr>'+
            '<tr><td>Longitude: <input type="text" name="longitude" value="lngnew"/></td></tr>'+
            '<tr><td><input type="submit" value="save"></td></tr>'+
            '</table>'+
            '</form>'+
            '</div>';

        var infowindow = new google.maps.InfoWindow({
            content: form,
            maxWidth :500
        });

        google.maps.event.addListener(newmarker, 'click', function() {
            infowindow.open(map,newmarker);
            //marker1.openInfoWindowHtml('Some text', {noCloseOnClick: 'false'});
        });

        // Update current position info.
        updateMarkerLat(latLng);
        updateMarkerLng(latLng);
        geocodePosition(latLng);

        // Add dragging event listeners.
        google.maps.event.addListener(newmarker, 'dragstart', function() {
            updateMarkerAddress('Dragging...');
        });

        google.maps.event.addListener(newmarker, 'drag', function() {
            updateMarkerLat(newmarker.getPosition());
            updateMarkerLng(newmarker.getPosition());
        });
        google.maps.event.addListener(newmarker, 'dragend', function() {
            geocodePosition(newmarker.getPosition());
            updateMarkerLat(newmarker.getPosition());
            updateMarkerLng(newmarker.getPosition());
        });

    }


}

// Onload handler to fire off the app.
google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body>
<table width="1008" border="0" align="center">
  <tr>
    <td colspan="2"><?php atas(); ?></td>
  </tr>
  <tr>
    <td width="19%" valign="top">
    <br />
    <h3>Menu Tempat Wisata</h3>
    <form action="contentx.php" method="post"><br />
    	<div class="mcari"><input type="text" name="cari"  /><input type="submit" name="submit" value="cari" /></div>
		<div class="mlain"><a class="link" href="javascript:history.back()">&bull; kembali</a></div>
    </form>
    </td>
    </tr>
    <tr>
    <td width="81%">
    <!-- isi layar //-->
  <div id="contform">
  <form action="content_simpan.php" method="post" enctype="multipart/form-data">
  <table align="left">
			<tr>
    			<td align="left" colspan="2"><h1>Tambah Tempat Wisata Baru</h1></td>
  	  		</tr>
   		 	<tr>
    			<td width="98"><label>Nama Tempat : </label></td><td width="350"><span class="w"><input type="text" name="tempat"  /></span></td>
   		 	</tr>
            <tr>
    			<td><label>Telp : </label></td><td><input type="text" name="telp" /></td>
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
					<option value=".$kate[kategori_id].">".$kate[katenama]."</option>
					";
					}
				}
				?>
				</select>
                </td>
   		 	</tr>
            <tr>
    			<td><label>Gambar :</label></td><td><span class="w"><input type="file" name="image" /></span></td>
  	  		</tr>
            <tr>
   	 			<td><label>Deskripsi : </label></td><td>
				<span class="w">
					<textarea class="detail" name="detail" ></textarea>
				</span>
            </td>
  	  		</tr>
            <tr>
            <td colspan="2">Klik kanan di peta untuk mendapatkan lokasi, dapat di drag jika kurang pas</td>
            </tr>
            <tr>
   	 			<td><label>Alamat : </label></td><td><span class="w"><input type="text" id="addrform" name="alamat"  size="50"/></span></td>
   		 	</tr>
            <tr>
   	 			<td><label>Latitude : </label></td><td><input type="text" id="latform" name="lat" size="25" /></td>
  	  		</tr>
            <tr>
   	 			<td><label>Longitude : </label></td><td><input type="text" id="lonform" name="lon" size="25" /></td>
  	  		</tr>
            <tr>
                        <tr>
            <td colspan="2">email sebagai username dan kata sandi untuk pemilik Tempat Wisata</td>
            </tr>
            <tr>
    			<td width="98"><label>email : </label></td><td width="350"><span class="w"><input name="email" type="text" size="40"  /></span></td>
   		 	</tr>
            <tr>
    			<td><label>password : </label></td><td><input name="pass" type="password" size="30" /></td>
   		 	</tr>
   	 			<td></td><td><span class="w"><input class="tsubmit" type="submit" name="submit" value="simpan"/> <input class="tsubmit" type="reset" value="Reset" /></span></td>
   		 	</tr>	
		</table>
        </form>
  </div>
  <div id="mapCanvas"></div>
    </td>
  </tr>
  <td><?php
footer();
?></td>
</table>
</body>
</html>