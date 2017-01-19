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
		<!-- popup login -->
			<div id="popupLogin">
				<div class="def-block widget">
					<h4> Sign In </h4><span class="liner"></span>
					<div class="widget-content row-fluid">
						<form id="popup_login_form">
							<input type="text" name="login_username" id="login_username" onfocus="if (this.value=='username') this.value = '';" onblur="if (this.value=='') this.value = 'username';" value="username" placeholder="username">
							<input type="password" name="login_password" id="login_password" onfocus="if (this.value=='password') this.value = '';" onblur="if (this.value=='') this.value = 'password';" value="password" placeholder="password">
							<a href="#" class="tbutton small"><span>Sign In</span></a>
							<a href="#" class="tbutton color2 small"><span>Register</span></a>
						</form><!-- login form -->
					</div><!-- content -->
				</div><!-- widget -->
				<div id="popupLoginClose">x</div>
			</div><!-- popup login -->
			<div id="LoginBackgroundPopup"></div>
		<!-- popup login -->

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

		<div class="under_header">
			<img src="images/assets/breadcrumbs14.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.html" class="toptip" title="Homepage"> <i class="icon-home"></i> </a></li>
						<li> Equipamentos de iluminação </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">

						<!--<div class="mbf clearfix">
							<h4> Lightbox Video </h4><span class="liner"></span>
							<a href="http://www.youtube.com/watch?v=luDFrp7xNmw?width=640&amp;height=360" data-gal="photo" title="#" class="grid_4">
								<img src="images/assets/videos6.jpg" alt="#">
							</a>
						</div>-->

						<div class="mbf clearfix">
							<h4> Equipamentos de iluminação </h4><span class="liner"></span>
							<a href="images/assets/gallery/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
							
							<a href="images/assets/gallery/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
							
							<a href="images/assets/gallery/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
						</div>

						<div class="mbf clearfix">
							<h4> Equipamentos de iluminação </h4><span class="liner"></span>
							<a href="images/assets/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
						</div>
						
						<div class="mbf clearfix">
							<h4> Equipamentos de iluminação </h4><span class="liner"></span>
							<a href="images/assets/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
						</div>
						
						<div class="mbf clearfix">
							<h4> Equipamentos de iluminação </h4><span class="liner"></span>
							<a href="images/assets/1.jpg" data-gal="photo" title="Equipamento 1" class="grid_4">
								<img src="images/assets/gallery/1.jpg" alt="Equipamento 1">
							</a>
						</div>
						<!--
						<div class="mbf clearfix">
							<h4> Lightbox HTML </h4><span class="liner"></span>
							<a href="#external_id" data-gal="photo" title="">Open Content</a>
							<div id="external_id" style="display: none">I just wanted to say that the Author of this theme provided outstanding support for my question. The configuration that I requested worked perfectly and their instructions were clearly explained. Once again, thanks!!</div>
						</div>-->


					</div><!-- def block -->
				</div><!-- span8 posts -->

				<div class="span4 sidebar">
					<div class="def-block widget">
						<h4> List of Shortcodes </h4><span class="liner"></span>
						<div class="widget-content">
							<ul class="list">
								<li><a href="shortcode_accordion.html"><i class="icon-caret-right"></i> Accordion </a></li>
								<li><a href="shortcode_buttons.html"><i class="icon-caret-right"></i> Buttons</a></li>
								<li><a href="shortcode_columns.html"><i class="icon-caret-right"></i> Grid Columns</a></li>
								<li><a href="shortcode_quote.html"><i class="icon-caret-right"></i> Quote</a></li>
								<li><a href="shortcode_list_styles.html"><i class="icon-caret-right"></i> List Styles</a></li>
								<li><a href="shortcode_googlefonts.html"><i class="icon-caret-right"></i> Google Fonts</a></li>
								<li><a href="shortcode_dropcaps.html"><i class="icon-caret-right"></i> Dropcaps</a></li>
								<li><a href="shortcode_divider_lines.html"><i class="icon-caret-right"></i> Divider Lines</a></li>
								<li><a href="shortcode_highlights.html"><i class="icon-caret-right"></i> Highlights</a></li>
								<li><a href="shortcode_tables.html"><i class="icon-caret-right"></i> Tables</a></li>
								<li class="current"><a href="shortcode_lightbox.html"><i class="icon-caret-right"></i> Lightbox</a></li>
								<li><a href="shortcode_googlemap.html"><i class="icon-caret-right"></i> Google Map</a></li>
								<li><a href="shortcode_video.html"><i class="icon-caret-right"></i> Video</a></li>
								<li><a href="shortcode_social_icons.html"><i class="icon-caret-right"></i> Retina Social Icons</a></li>
								<li><a href="shortcode_tab.html"><i class="icon-caret-right"></i> Tab</a></li>
								<li><a href="shortcode_toggle.html"><i class="icon-caret-right"></i> Toggle</a></li>
								<li><a href="shortcode_message_box.html"><i class="icon-caret-right"></i> Message box</a></li>
							</ul>
						</div><!-- widget content -->
					</div><!-- def block widget categories -->
				</div><!-- span4 sidebar -->
			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<?php require_once("rodape.php"); ?>

	</div><!-- end layout -->
<!-- Scripts -->
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/theme20.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
	<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
	<script type="text/javascript" src="js/twitter/jquery.tweet.js"></script>
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>