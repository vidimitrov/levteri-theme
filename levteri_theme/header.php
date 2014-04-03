<!DOCTYPE html>
<html lang="en">
<head>
	<title>Комплекс Левтери</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.fancybox.pack.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/atooltip.jquery.js"></script> 
	
	<!--[if lt IE 9]>
		<script type="text/javascript" src="js/html5.js"></script>
		<style type="text/css">
			.slider_bg {behavior:url(js/PIE.htc)}
		</style>
	<![endif]-->
	<!--[if lt IE 7]>
		<div style='clear:both;text-align:center;position:relative'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" alt="" /></a>
		</div>
	<![endif]-->
</head>
<body id="page1">
<div class="body6">
	<div class="body1">
		<div class="body5">
			<div class="main">
<!-- header -->
				<header>
					<h1><a href="http://www.levteri.com" id="logo"></a></h1>
					<nav>
						<ul id="top_nav">
							<li><a href="http://www.booking.com/hotel/bg/levteri.html?aid=330843;lang=bg"><img src="http://aff.bstatic.com/images/affiliate/330843/booknow_bg.gif" style="border: 0; margin-top:-10px;" /></a></li>
							<li><a href="http://www.levteri.com"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_1.gif" alt=""></a></li>
							<li><a href="http://www.levteri.com/en"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_2.gif" alt=""></a></li>
							<li><a href="http://www.levteri.com/ch"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_3.gif" alt=""></a></li>
							<li class="end"><a href="http://www.levteri.com/ru"><img src="<?php echo get_template_directory_uri(); ?>/images/icon_4.gif" alt=""></a></li>
						</ul>
					</nav>
					<?php
						wp_nav_menu(array(
							'theme_location' => 'top-side-menu',
							'container' => 'nav',
							'container_class' => '',
							'container_id' => '',
							'menu_id' => 'menu'
						));
					?>
				</header><div class="ic">More Website Templates  @ TemplateMonster.com - August 1st 2011!</div>
			</div>
		</div>
	</div>
</div>
<div class="body7"></div>
<!-- / header -->