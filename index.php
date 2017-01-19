<!DOCTYPE html>
<!--[if IE 7 ]><html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="ie9" xmlns="http://www.w3.org/1999/xhtml" lang="en-US"> <![endif]-->
<!--[if (gte IE 10)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
<!--<![endif]-->
<head>
	<?php require_once("tituloPagina.php");
		  require_once("cabecalho.php");
	?>
</head>
<body id="fluidGridSystem">
	<div id="layout" class="full">
		
		<?php require_once("popUpLogin.php"); ?>

		<header id="header" class="glue">
			<?php require_once("botoesRedesSociais.php");?>

			<div class="headdown">
				<div class="row clearfix">
					<div class="logo bottomtip" title="Best and Most Popular Musics">
						<a href="#"><img src="images/logo.png" alt="Best and Most Popular Musics"></a>
					</div><!-- end logo -->

					<?php require_once("menu.php");?>
				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->

		<!-- Start Revolution Slider -->
			<div class="sliderr">
				<div class="fullwidthbanner-container">					
					<div class="revolution">
						<ul>
							<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
						<img src="images/slides/slider1.jpg" alt="slider" >
														
				<div class="tp-caption fade"  
					 data-x="566" 
					 data-y="306" 
					 data-speed="300" 
					 data-start="800" 
					 data-easing="easeInOutExpo"  ><img src="images/slides/slide1-cap1.png" alt="Image 2"></div>
								
				<div class="tp-caption sfl"  
					 data-x="566" 
					 data-y="305" 
					 data-speed="300" 
					 data-start="1200" 
					 data-easing="easeInOutExpo"  ><img src="images/slides/slide1-cap2.png" alt="Image 3"></div>
								
				<div class="tp-caption sfr"  
					 data-x="741" 
					 data-y="305" 
					 data-speed="300" 
					 data-start="1200" 
					 data-easing="easeInOutExpo"  ><img src="images/slides/slide1-cap3.png" alt="Image 4"></div>
								
				<div class="tp-caption sfr"  
					 data-x="711" 
					 data-y="374" 
					 data-speed="300" 
					 data-start="2000" 
					 data-easing="easeInOutExpo"  ><a href="mp3_single_half.html"><img src="images/slides/slide1-cap4.png" alt="Image 5"></a></div>
								
				<div class="tp-caption sfl"  
					 data-x="714" 
					 data-y="375" 
					 data-speed="300" 
					 data-start="2000" 
					 data-easing="easeInOutExpo"  ><img src="images/slides/slide1-cap5.png" alt="Image 6"></div>
							</li>

							<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
						<img src="images/slides/slider2.jpg" alt="slider2" >
														
				<div class="tp-caption big_black randomrotate"  
					 data-x="603" 
					 data-y="384" 
					 data-speed="500" 
					 data-start="1200" 
					 data-easing="easeInOutExpo"  >.. um sonho</div>
								
				<div class="tp-caption big_orange randomrotate"  
					 data-x="701" 
					 data-y="328" 
					 data-speed="500" 
					 data-start="1700" 
					 data-easing="easeInOutExpo"  >Da sua festa</div>

												</li>

									<li data-transition="random" data-slotamount="7" data-masterspeed="300" >
						<img src="images/slides/slider3.jpg" alt="slider3" >
														
				<div class="tp-caption large_text randomrotate"  
					 data-x="559" 
					 data-y="253" 
					 data-speed="500" 
					 data-start="1000" 
					 data-easing="easeInOutExpo" >Realizamos eventos de</div>
								
				<div class="tp-caption medium_text randomrotate"  
					 data-x="563" 
					 data-y="313" 
					 data-speed="500" 
					 data-start="1500" 
					 data-easing="easeInOutExpo"  >Casamentos</div>
								
				<div class="tp-caption medium_text randomrotate"  
					 data-x="565" 
					 data-y="345" 
					 data-speed="500" 
					 data-start="2000" 
					 data-easing="easeInOutExpo"  >15 Anos</div>
								
				<div class="tp-caption medium_text randomrotate"  
					 data-x="567" 
					 data-y="377" 
					 data-speed="500" 
					 data-start="2500" 
					 data-easing="easeInOutExpo"  >Formaturas</div>
								
				<div class="tp-caption small_text randomrotate"  
					 data-x="566" 
					 data-y="407" 
					 data-speed="500" 
					 data-start="3000" 
					 data-easing="easeInOutExpo"  >Entre outros ...</div>
												</li>


						</ul><!-- End Slides -->
						<div class="tp-bannertimer"></div><!-- Timer -->										
					</div>					
				</div>
			</div>
		<!-- End Revolution Slider -->

		<div class="page-content">
			<div class="row clearfix mbf">
				<div class="music-player-list"></div>
			</div><!-- row music player -->

			<div class="row row-fluid clearfix mbf">
				
				<?php require_once("ultimasNovidades.php"); ?>

				<div class="span4">
					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Próximos eventos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="span12 mb">
								<ul id="event1" class="event-timer">
									<li>
										<span class="days">25</span>
										<p class="timeRefDays">JAN</p>
									</li>
									<li>
										<span class="hours">29</span>
										<p class="timeRefHours">JAN</p>
									</li>
									<li>
										<span class="minutes">02</span>
										<p class="timeRefMinutes">FEV</p>
									</li>
									<li>
										<span class="seconds">05</span>
										<p class="timeRefSeconds">FEV</p>
									</li>
								</ul> <!-- end timer -->
							</div><!-- timer -->

							<!--<div class="grid_8">
								<p class="event-titlett">Bono Serenades Warren</p>
							</div>
							<div class="grid_4">
								<a href="#" class="tbutton buy-ticket small"><span>Buy Ticket</span></a>
							</div>-->

						</div><!-- widget content -->
					</div><!-- def block widget events -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Featured Videos </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="videos clearfix flexslider">
								<ul class="slides">
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video1.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Know You Want Me</h3>
											<span>Fitbull</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video2.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>I Like It</h3>
											<span>Enrique</span>
										</a>
									</li><!-- slide -->
									<li class="featured-video">
										<a href="video_single_wide.html">
											<img src="images/assets/video3.jpg" alt="#">
											<i class="icon-play-sign"></i>
											<h3>Tommorow</h3>
											<span>Dj Michele</span>
										</a>
									</li><!-- slide -->
								</ul>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget videos -->

					<div class="def-block widget animtt" data-gen="fadeUp" style="opacity:0;">
						<h4> Popular Tracks </h4><span class="liner"></span>
						<div class="widget-content row-fluid">
							<div class="scroll-mp3" style="height: 220px;">
								<div class="content">
									<ul class="tab-content-items">
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-1.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Hoje</a></h3>
											<span> Ludmila </span>
											<span> 1,892,250 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-2.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">That's My Kind Of Night </a></h3>
											<span> Alexander Mikoole </span>
											<span> 998,879 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-3.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Magna Carta... Holy Grail </a></h3>
											<span> Joe </span>
											<span> 792,240 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-4.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">If you love me</a></h3>
											<span> Enrique </span>
											<span> 788,471 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-5.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Burning For you</a></h3>
											<span> Lura </span>
											<span> 710,105 Plays </span>
										</li>
										<li class="clearfix">
											<a class="m-thumbnail" href="mp3_single_half.html"><img width="50" height="50" src="images/assets/thumb-mp3-6.jpg" alt="#"></a>
											<h3><a href="mp3_single_half.html">Skyfool ( Dubstep Remix )</a></h3>
											<span> Babel </span>
											<span> 611,748 Plays </span>
										</li>
									</ul>
								</div>
							</div>
						</div><!-- widget content -->
					</div><!-- def block widget popular items -->

				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->

		</div><!-- end page content -->

		<?php require_once("rodape.php"); ?>

	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/rs-plugin/pluginsources/jquery.themepunch.plugins.min.js"></script>	
	<script type="text/javascript" src="js/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.jplayer.js"></script>
	<script type="text/javascript" src="js/ttw-music-player-min.js"></script>
	<script type="text/javascript" src="music/myplaylist.js"></script>
	<script type="text/javascript" src="js/countdown.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
	<script type="text/javascript">	
	/* <![CDATA[ */
		var tpj=jQuery;
		tpj.noConflict();
		tpj(document).ready(function() {
		if (tpj.fn.cssOriginal!=undefined)
			tpj.fn.css = tpj.fn.cssOriginal;
			var api= tpj('.revolution').revolution({
				delay:9000,
				startheight:380,
				startwidth:960,
				hideThumbs:200,
				thumbWidth:80,
				thumbHeight:50,
				thumbAmount:5,
				navigationType:"none",
				navigationArrows:"verticalcentered",
				navigationStyle:"square",	
				touchenabled:"on", 
				onHoverStop:"on", 
				navOffsetHorizontal:0,
				navOffsetVertical:20,
				shadow:0
			});
			tpj("#event1").countdown({
				date: "31 December 2013 23:59:59",
				format: "on"
			},
			function() {
				// callback function
			});
		});
	/* ]]> */
	</script>
</body>
</html>