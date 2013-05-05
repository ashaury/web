<?php
include("lib.php");
$id=$_GET['sku']
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
    <?php
	$link=koneksiku();
		$sql="select * from produk where prod_id='$id' limit 1 ";
		$res=mysql_query($sql,$link);
		if($res)
		{
			($data=mysql_fetch_array($res))
?>
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
                    <nav id="toolbar">
                        <form method="get" id="searchform" action="#">
                            <a href="#" id="search-button"><i class="icon-search"></i></a>
                            <fieldset>
                                <input type="text" name="s" id="s">
                            </fieldset>
                        </form>
                        <a href="#" id="like-button"><i class="icon-heart"></i></a>
                        <a href="#" id="fullscreen-button"><i class="icon-fullscreen"></i></a>
                    </nav>
                </div>
            </header>
            <div id="main">
                <div id="cover" class="no-cover">
                    <div id="overlay">
                        <div id="overlay-wrapper">
                            <h1><span id="title"><?php echo $data[prod_nama]; ?></span></h1>
                            <!--<h2><span id="subtitle">Publié en 1952, le livre, dont la langue éblouissante tient de Rabelais et de Céline, a été un immense succès, avant de tomber dans l’oubli.</span></h2>//-->
                        </div>
                    </div>
                </div>
                <div id="content" class="group">
                    <div id="main-content" class="col span_3_of_4">
                    <p>
                    <img src="images/produk/<?php echo $data[url]; ?>" >
                    </p>
                    <h2><span id="subtitle" style="float:right;margin-right:45px;">Price : <?php echo $data[prod_hrg]; ?></span></h2>
                    </div>
                    <div id="side-content" class="col span_1_of_4">
                    <!--
                        <blockquote><i class="icon-quote-left icon-2x pull-left icon-muted"></i>Le docker tatoué, photographié par Doisneau, qui a l’épiderme indolore et se transperce la peau là où vous le lui demandez, contre une tournée ?<i class="icon-quote-right icon-2x pull-right icon-muted"></i></blockquote>
                    //-->
                    </div>
                </div>
                <div id="author-and-share" class="group">
                    <div id="share" class="col span_1_of_4">
                        <h2>Share the article</h2>
                        <div class="twitter" data-url="http://ashaury.com/" data-text="<?php echo $data[prod_nama]; ?>" data-title="Tweet"></div>
                        <div class="facebook" data-url="http://ashaury.com/" data-text="<?php echo $data[prod_nama]; ?>" data-title="Like"></div>
                        <div class="googleplus" data-url="http://ashaury.com/" data-text="<?php echo $data[prod_nama]; ?>" data-title="+1"></div>
                    </div>
                    <div id="author" class="col span_3_of_4">
                        <div class="avatar">
                            <img alt="avatar" src="images/avatars/avatar.png">
                        </div>
                        <div class="author-body">
                            <a href="#" class="pseudo"><h2>Wiratama Production</h2></a>
                            <div class="author-social">
                                <a class="author-facebook" href="#">
                                    <i class="icon-facebook"></i><span>facebook</span>
                                </a>
                                <a class="author-twitter" href="#">
                                    <i class="icon-twitter"></i><span>twitter</span>
                                </a>
                                <a class="author-googleplus" href="#">
                                    <i class="icon-google-plus"></i><span>google plus</span>
                                </a>
                                <a class="author-pinterest" href="#">
                                    <i class="icon-pinterest"></i><span>pinterest</span>
                                </a>
                            </div>
<!--                            <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
//-->
                        </div>
                    </div>
                </div>
                <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=182965465087081";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-comments" data-href="http://ashaury.com?sku=<?php echo $id; ?>" data-width="700" data-num-posts="10"></div>
                <!-- Comments -->
<!--                <div id="comments">
                  <ol class="commentlist">
                    <li class="comment">
                      <div>
                        <img alt="" src="images/avatars/firefox.png" class="avatar" height="35" width="35">
                        <div class="comment-author vcard">
                          <cite class="fn">
                            <a href="#">Admin</a>
                          </cite>
                        </div>

                        <div class="comment-meta commentmetadata">
                            <a href="#">October 15, 2011 at 3:30 pm</a>
                             / <a class="comment-reply-link" href="#">Reply</a>                
                        </div>
                            
                        <div class="comment-body">
                            <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                        </div>
                      </div>
                    </li>
                    <li class="comment">
                      <div>
                          <img alt="" src="images/avatars/mail.png" class="avatar" height="35" width="35">
                          <div class="comment-author vcard">
                              <cite class="fn">
                                <a href="#">Félix</a>
                              </cite>
                          </div>

                          <div class="comment-meta">
                            <a href="#">October 15, 2011 at 4:17 pm</a>
                             / <a class="comment-reply-link" href="#">Reply</a>
                          </div>
                              
                          <div class="comment-body">
                              <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit.</p>
                          </div>
                      </div>

                      <ul class="children">
                        <li class="comment">
                     
                          <div>
                            <img alt="" src="images/avatars/itunes.png" class="avatar" height="35" width="35">
                            <div class="comment-author vcard">
                                <a href="#">Félix</a>
                            </div>

                            <div class="comment-meta">
                              <a href="#">October 15, 2011 at 4:18 pm</a>
                               / <a class="comment-reply-link" href="#" >Reply</a>
                            </div>
                  
                            <div class="comment-body">
                                <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
                            </div>

                          </div>

                        </li>
                        <li class="comment">
                     
                          <div>
                            <img alt="" src="images/avatars/itunes.png" class="avatar" height="35" width="35">
                            <div class="comment-author vcard">
                                <a href="#">Jacques</a>
                            </div>

                            <div class="comment-meta">
                              <a href="#">October 15, 2011 at 4:18 pm</a>
                               / <a class="comment-reply-link" href="#" >Reply</a>
                            </div>
                  
                            <div class="comment-body">
                                <p>Donec sed odio dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed odio dui. Cras mattis consectetur purus sit amet fermentum.</p>
                            </div>

                          </div>
                        </li>
                      </ul>
                    </li>
                  </ol>
                </div>
//-->                
                <!-- End Comments -->
                <div id="related-articles" class="fancy-carousel">
                    <ul class="carousel">
                       <?php
						$qryrel="select * from produk where kate_id='$data[kate_id]' and prod_id!='$data[prod_id]' order by prod_tgl desc limit 4";
						$resrel=mysql_query($qryrel,$link);
						if($resrel)
						{
						while($rel=mysql_fetch_array($resrel))
						{
					   ?> 
                        
                        <li>
                            <div class="overlay-thumb">
                                <img width="200" height="140" src="images/produk/<?php echo $rel[url]; ?>" alt="amigo">
                                <a class="fancy-overlay" href="produk.php?sku=<?php echo $rel[prod_id]; ?>">
                                    <h5 class="overlay-title"><?php echo $rel[prod_nama]; ?></h5>
                                    <div class="overlay-icon">
                                        <i class="icon-share-alt"></i>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <?php
							}
						}
						?>
                    </ul>
                    <div class="related-nav">
                        <span class="prev-related">Previous</span>
                        <span class="next-related">Next</span>
                    </div>
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

        <?php
		}
		else
		{
			header("location:katalog.php?error=1");
		}
		?>        	
    </body>
</html>
