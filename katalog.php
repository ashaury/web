<?php
include("lib.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic' rel='stylesheet' type='text/css'>




    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div id="wrapper">
            <div id="hero" class="clearfix">
                <div id="global-social">
            		<a class="global-facebook" href="#">
            		    <i class="icon-facebook"></i><span>facebook</span>
            		</a>
            		<a class="global-twitter" href="#">
            		    <i class="icon-twitter"></i><span>twitter</span>
            		</a>
            		<a class="global-googleplus" href="#">
            		    <i class="icon-google-plus"></i><span>google plus</span>
            		</a>
            		<a class="global-pinterest" href="#">
            		    <i class="icon-pinterest"></i><span>pinterest</span>
            		</a>
            	</div>
            </div>

            <header id="topbar">
                <div id="menus-wrapper" class="clearfix">
                    <a id="logo" href="index-2.html"></a>
                    <nav id="menu">
                        <?php
						menu_f();
						?>
                    </nav>
                </div>
            </header>
            <div id="main">
                <div id="portfolio">
                    <ul id="portfolio-items" class="group">
                    <?php
					$link=koneksiku();
					$sql="select * from produk order by prod_tgl desc ";
					if(isset($_GET['id']))
					{		
					$key=$_GET['id'];
					$sql="select * from produk where kate_id='$key' order by prod_tgl desc";
					}
					$res=mysql_query($sql,$link);
					if($res)
					{
						while($data=mysql_fetch_array($res))
						{
					?>
                      	<li class="col span_1_of_4">
                            <div class="overlay-thumb">
                                <img width="200" height="140" src="images/produk/<?php echo $data[url]; ?>" alt="amigo">
                                <a class="fancy-overlay" href="produk.php?sku=<?php echo $data[prod_id]; ?>">
                                    <h5 class="overlay-title"><?php echo $data[prod_nama]; ?></h5>
                                    <div class="overlay-icon">
                                        <i class="icon-share-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                    <?php
						}
					}
					else
					{
						echo mysql_error();
					}
					?>
                    </ul>
                </div>
            </div>
            <footer id="footer" class="clearfix">
                <?php
				section_f();
				?>
            </footer>
        </div>

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.0.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        
    </body>
</html>
