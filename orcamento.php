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
						<li> Orçamento </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="def-block clearfix">
					<h4> Solicite um orçamento </h4><span class="liner"></span>

					<div class="grid_6 mt">
						<p>Vai realizar um evento e ainda não tem DJ? Solicite um orçamento conosco para maiores informações, estamos sempre dispostos a ajudá-los.. </p>
						<p>Telefone: <strong> (48) 98411-7767 </strong> <br> Email: <strong>contato@djbiel.com.br</strong></p>
					</div><!-- end grid6 -->

					<div class="grid_6 mt">
						<form method="post" id="contactForm" action="envia-contato.php">
							<div class="clearfix">
								<div class="grid_6 alpha fll"><input type="text" name="nome" id="nome" placeholder="Nome *" class="requiredField" /></div>
								<div class="grid_6 omega flr"><input type="text" name="email" id="email" placeholder="Email *" class="requiredField email" /></div>
							</div>
							<div><textarea name="mensagem" id="mensagem" placeholder="Mensagem *" class="requiredField" rows="8"></textarea></div>
							<input type="submit" id="sendMessage" name="sendMessage" value="Enviar" />
							<span>  </span>
						</form><!-- end form -->
					</div><!-- end grid6 -->

				</div><!-- def block -->

			</div><!-- row clearfix -->
		</div><!-- end page content -->

		<div id="map" class="hovermap"></div><!-- map -->

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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(function () {
		    jQuery("#map").gmap3({
		        marker: {
		            address: "2897 Chicago"
		        },
		        map: {
		            options: {
		                zoom: 6
		            }
		        }
		    });
		});
	/* ]]> */
	</script>
</body>
</html>