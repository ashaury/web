<?php
function session_log(){
	if(isset($_SESSION['ultimate']))
	$masuk=$_SESSION['ultimate']; 
	else $masuk=false;
	if($masuk==false) 
	header('location:index.php');
}
function admin_log(){
	if(isset($_SESSION['admin']))
	$masuk=$_SESSION['admin']; 
	else $masuk=false;
	if($masuk==false) 
	header('location:index.php');
}
function own_log(){
	if(isset($_SESSION['own']))
	$masuk=$_SESSION['own']; 
	else $masuk=false;
	if($masuk==false) 
	header('location:index.php');
}
function session_content(){
	if(isset($_SESSION['ultimate']))
	$masuk=$_SESSION['ultimate']; 
	else $masuk=false;
	if($masuk==true) 
	header('location:home.php');
}
function promo_log(){
	if(isset($_SESSION['ultimate']))
	$masuk=$_SESSION['ultimate']; 
	else{
	if(isset($_SESSION['own']))
	$masuk=$_SESSION['own'];
	else $masuk=false;
	}
	if($masuk==false) 
	header('location:index.php');
}


function koneksiku(){
		$is_localhost=false; // Isi dgn true jika untuk server localhost
							// Isi dengan false jika untuk server 000webhost.com
		
		if($is_localhost){
			$host = "localhost"; //sesuaikan dengan setingan db kamu
			$database ="k3312639_wrtmdb";
			$user = "k3312639_shaury";
			$password = "abcde_123";
		}
		else{
			$host = "localhost";
			$database = "wrtmdb";
			$user = "root";
			$password = "";		
		}
		$link=mysql_connect($host,$user,$password);
		mysql_select_db($database,$link);
		if(!$link)
			echo "Error : ".mysql_error();
		return $link;
	}
	/*
	<table id=\"navlink\">
    	<tr>
        <td><a href=\"home.php\">Home</a></td><td><a href=\"berita.php\">Berita</a></td><td><a href=\"acara.php\">Acara</a></td>
		<td><a href=\"content.php?\">Tempat Wisata</a></li></td><td><a href=\"fasilitas.php\">Fasilitas</a></td><td><a href=\"produk.php?\">Produk</a></td><td><a href=\"promo.php?\">Promo</a></td><td><a href=\"logout.php\">LogOut</a></td>
        </tr>
    </table>
			<ul>
		<li><a href=\"content.php?\">Tempat Wisata</a></li>
		<li><a href=\"content.php?\">Produk</a></li>
		<li><a href=\"content.php?\">Fasilitas</a></li>
		<li><a href=\"content.php?\">Promo</a></li>
		</ul>

	*/
/*
function atas()
{
	echo"
	<table id=\"navlink\">
    	<tr>
        <td><a href=\"home.php\">Home</a></td><td><a href=\"kategori.php\">Kategori</a></td><td><a href=\"produk.php\">Produk</a></td>
		<td><a href=\"content.php?\">Kategori</a></td><td><a href=\"content.php?\">Tempat Wisata</a></td><td><a href=\"fasilitas.php\">Fasilitas</a></td><td><a href=\"produk.php?\">Produk</a></td><td><a href=\"promo.php?\">Promo</a></td><td><a href=\"content.php?\">Data Staff</a></td><td><a href=\"logout.php\">LogOut</a></td>
        </tr>
    </table>
	";
}
*/
function atas()
{
	echo"
	<table id=\"navlink\">
    	<tr>
        <td><a href=\"home.php\">Home</a></td><td><a href=\"kategori.php\">Kategori</a></td><td><a href=\"produk.php\">Produk</a></td><td><a href=\"logout.php\">LogOut</a></td>
        </tr>
    </table>
	";
}
function atas2()
{
	echo"
	<table id=\"navlink\">
    	<tr>
        <td><a href=\"home.php\">Home</a></td><td><a href=\"logout.php\">LogOut</a></td>
        </tr>
    </table>
	";
}

function seltgl(){
$i=1;
		while ($i!=32)
		{
			echo "<option value=\"".$i."\">".$i."</option>";
			$i++;
		}
}

function selthn(){
$y=date('Y');
		$i=1;
		while ($i!=100)
		{
			
			echo "<option value=\"".$y."\">".$y."</option>";
			$y=$y-1;
			$i++;
		}
}

function footer(){
    echo"
	<hr  />
    <div class=\"footer\"><a href=\"home.php\">Home</a> | <a href=\"berita.php\">Berita</a> | <a href=\"acara.php\">Acara</a> | <a href=\"content.php?\">Tempat Wisata</a> | <a href=\"fasilitas.php\">Fasilitas</a> | <a href=\"produk.php?\">Produk</a> | <a href=\"promo.php?\">Promo</a> | <a href=\"logout.php\">LogOut</a></div>";
}
?>