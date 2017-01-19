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
					<div class="logo bottomtip" title="Dj Biel Santos">
						<a href="index.php"><img src="images/logo.png" alt="Dj Biel Santos"></a>
					</div><!-- end logo -->

					<?php require_once("menu.php");?>
					
				</div><!-- row -->
			</div><!-- headdown -->
		</header><!-- end header -->

		<div class="under_header">
			<img src="images/assets/breadcrumbs12.png" alt="#">
		</div><!-- under header -->

		<div class="page-content back_to_up">
			<div class="row clearfix mb">
				<div class="breadcrumbIn">
					<ul>
						<li><a href="index.php" class="toptip" title="Página Inicial"> <i class="icon-home"></i> </a></li>
						<li> Vídeos </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> Vídeos </h4><span class="liner"></span>

						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200123848?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
						
						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200124134?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
						
						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200124180?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
						
						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200124209?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
						
						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200124221?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
						
						<div class="mbf clearfix">
							<iframe src="http://player.vimeo.com/video/200124273?title=1&amp;byline=1&amp;portrait=1" width="100%" height="400"></iframe>
						</div>
	
						<div class="mbf clearfix">
							<div class="grid_6">
								<iframe src="http://player.vimeo.com/video/200124321?title=1&amp;byline=1&amp;portrait=1" width="100%" height="250"></iframe>
							</div>
	
							<div class="grid_6">
								<iframe src="http://player.vimeo.com/video/200124444?title=1&amp;byline=1&amp;portrait=1" width="100%" height="250"></iframe>
							</div>
						</div>


					</div><!-- def block -->
				</div><!-- span8 posts -->

				<?php require_once("mapaSiteLateral.php"); ?>
				
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