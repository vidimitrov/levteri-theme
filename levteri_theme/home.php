<!DOCTYPE html>
<html lang="en">
<head>
	<title>Комплекс Левтери</title>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tms-0.3.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/tms_presets.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
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
<!-- / header -->
<!-- content -->
				<article id="content">
					<div class="slider_bg">
						<div class="slider">
							<ul class="items">
								<li>
									<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/images/img1.jpg" alt=""></a>
									<div class="banner">
									<!--<a href="#"><strong><span>Левтери</span></strong></a>
										<b>Нещо за хотела</b>
										<p>
											<span>Хотелът предлага незаменим<br>
											 комфорт, спокойствие, близост до плажа и незабравими моменти.</span>
										</p>-->
									</div>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/images/img2.jpg" alt="">
									<div class="banner">
										<!--<strong>Бар - <span>Сладкарница</span></strong>
										<b>Dish of the Day</b>
										<p>
											<span>Lorem ipsum dolamet consectetur <br>
											adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
										</p>-->
									</div>
								</li>
								<li>
									<img src="<?php echo get_template_directory_uri(); ?>/images/img3.jpg" alt="">
									<div class="banner">
										<!--<strong>French-Style<span>Tartlet</span></strong>
										<b>Dish of the Day</b>
										<p>
											<span>Lorem ipsum dolamet consectetur <br>
											adipisicing elit, sed do eiusmod tempor aliqua enim ad minim veniam, quis nosinci- didunt ut labore et dolore.</span>
										</p>-->
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="wrap">
						<section class="cols">
							<div class="box">
							<?php if(!dynamic_sidebar('home-left-ad')):?>
								<div>
									<h2>Хотел</h2>
									<figure><img src="<?php echo get_template_directory_uri(); ?>/images/page1_img1.jpg" alt="" ></figure>
									<p class="pad_bot1">Хотелът предлага незаменим комфорт, спокойствие и най-важното за една почивка на морето - близост до плажа.</p>
									<a href="index.php?page_id=19" class="button1">Повече</a>
								</div>
							<?php endif; ?>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
							<?php if(!dynamic_sidebar('home-center-ad')):?>
								<div>
									<h2>Ресторант</span></h2>
									<figure><img src="<?php echo get_template_directory_uri(); ?>/images/page1_img2.jpg" alt="" ></figure>
									<p class="pad_bot1">Ресторантът се гордее с най-добрата кухния в Приморско, винен кът и незабравимо обслужване, което ще направи вашият престой</p>
									<a href="index.php?page_id=21" class="button1">Повече</a>
								</div>
							<?php endif; ?>
							</div>
						</section>
						<section class="cols pad_left1">
							<div class="box">
							<?php if(!dynamic_sidebar('home-right-ad')):?>
								<div>
									<h2>Бар-сладкарница</span></h2>
									<figure><img src="<?php echo get_template_directory_uri(); ?>/images/page1_img3.jpg" alt="" ></figure>
									<p class="pad_bot1">Барът-сладкарница може да се похвали с над 100 различни вида коктейли, разнообразие от сладки изкушения и уникална обстановка,</p>
									<a href="index.php?page_id=23" class="button1">Повече</a>
								</div>
							<?php endif; ?>
							</div>
						</section>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
<div class="body3">
	<div class="body4">
		<div class="main">
<!-- footer -->
			<footer>
				<div class="wrapper">
					<section class="col1">
						<h3 class="pad-top10 pad-bottom0">Катя Левтерова: 0888 929 237</h3>
						<h3 class="pad-top10 pad-bottom0">Пламен Левтеров: 0888 739 762</h3>
					</section>
					<div id="ftr-tag" class="centered">
						<a rel="nofollow" href="http://www.vidimitrov.com" target="_blank">Created by 
				    <img id="vd-logo" src="<?php echo get_template_directory_uri(); ?>/images/vd_logo.png"/></a>
				    </div>
					<!--<section class="col2 pad_left1">
						<h3>Последвайте ни: </h3>
						<ul id="icons">
							<li><a href="#" class="normaltip" title="Facebook"><img src="<?php echo get_template_directory_uri(); ?>/images/icon1.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Linkedin"><img src="<?php echo get_template_directory_uri(); ?>/images/icon2.gif" alt=""></a></li>
							<li><a href="#" class="normaltip" title="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/icon3.gif" alt=""></a></li>
						</ul>
					</section> -->
				</div>
				<!-- {%FOOTER_LINK} -->
			</footer>
<!-- / footer -->
		</div>
	</div>
</div>
</body>
</html>