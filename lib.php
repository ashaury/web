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
	
function menu_f(){
	?>
    <ul class="clearfix">
                            <li class="first_list"><a href="index.php" class="main_menu_first main_current">home</a></li>
<!--                            <li class="first_list"><a href="elements.html" class="main_menu_first">elements</a></li> //-->
                            <li class="first_list"><a href="#" class="main_menu_first">gallery</a></li>
                            <li class="first_list with_dropdown">
                                <a href="katalog.php" class="main_menu_first">Store</a>
                                <ul>
<?php
		$link=koneksiku();
		$qry_kate="select * from kategori order by kate_id desc ";
		$res_kate=mysql_query($qry_kate,$link);
		if($res_kate)
		{
			while($kate=mysql_fetch_array($res_kate))
			{
?>
		<li class="second_list second_list_border"><a href="katalog.php?id=<?php echo $kate[kate_id]; ?>" class="main_menu_second"><?php echo $kate[k_nama]; ?></a></li>
<?php
			}
		}
		else
		{
			 echo mysql_error();
   		}
?>
          </ul>
                            </li>
                            <!--<li class="first_list"><a href="portfolio.html" class="main_menu_first">portfolio</a></li>
                            <li class="first_list"><a href="contact.html" class="main_menu_first">contact us</a></li>//-->
                            <li class="first_list"><a href="contact.php" class="main_menu_first">contact us</a></li>
                        </ul>
    <?php
}

function section_f(){
	?>
     <div class="group">
                    <div class="col span_1_of_3">
                        <h2>Our Partner</h2>
                        <p><img src="images/partner/wadezig.jpg"> <img src="images/partner/evil.png"> <img src="images/partner/347.jpg"></p>
                    </div>
                    <div class="col span_1_of_3">
                        <h2>About</h2>
                        <p align="justify">Wiratama Production adalah sebuah vendor yang telah berjalan sejak 2008, kami siap melayani berbagai kebutuhan untuk keperluan Clothing/Distro, Kaos Promosi, Kaos Komunitas, Seragam Kantor/Sekolah, Kemeja, Jaket, dan Berbagai Macam Topi.</p>
                        
                    </div>
                    <div class="col span_1_of_3">
                        <h2>Contact</h2>
                        <p>
<img src="images/icon/phone.png">083821291555 / 21D59717<br>
<img src="images/icon/mail.png"> wiratamaproduction@gmail.com<br>
<img src="http://opi.yahoo.com/online?u=wiratamaprobandung&amp;m=g&amp;t=2" style="margin: 5px; width:150px;" />
                    </div>
                </div>
    <?php
}

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