<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US">
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
						<li> Contato </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<h4> Fale Conosco </h4><span class="liner"></span>
						<p align="justify">Vai realizar uma festa? Nós temos o pacote completo de soluções. Festas de formaturas, empresas, musicas das antigas, casamento, entre outros. Solicite seu orçamento sem compromisso </p>
						<form method="post" id="contactForm" action="envia-contato.php">
							<div class="clearfix">
								<div class="grid_6 alpha fll"><input type="text" name="nome" id="nome" placeholder="Nome *" class="requiredField" /></div>
								<div class="grid_6 omega flr"><input type="text" name="email" id="email" placeholder="Email *" class="requiredField email" /></div>
							</div>
							<div><textarea name="mensagem" id="mensagem" placeholder="Mensagem *" class="requiredField" rows="8"></textarea></div>
							<input type="submit" id="sendMessage" name="sendMessage" value="Enviar" />
							<span>  </span>
						</form><!-- end form -->
					</div><!-- def block -->
				</div><!-- span8 posts -->

				<?php require_once("mapaSiteLateral.php");?>
				<!--<div class="span4 sidebar">
					<div class="def-block widget">
						<h4> Get in Touch </h4><span class="liner"></span>
						<div class="widget-content">
							<div id="map" class="mb"></div>
							<p>It has survived not only five centuries, but also the leap into electronic typesetting.</p>
							<p>Phone: <strong> 001 00125548 </strong> <br> Email: <strong>info@remixmusic.com</strong></p>
						</div>
					</div>

					<div class="def-block widget">
						<h4> NewsLetters </h4><span class="liner"></span>
						<div class="widget-content">
							<p>It has survived not only five centuries, but also the leap into electronic typesetting.</p>
							<form id="newsletters" method="post" action="http://feedburner.google.com/fb/a/mailverify" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=sevenpsd', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
								<input type="email" onfocus="if (this.value=='Type Your Email') this.value = '';" onblur="if (this.value=='') this.value = 'Type Your Email';" value="Type Your Email" placeholder="Type Your Email" required="required">
								<button type="submit"><i class="icon-ok"></i></button>
							</form>
						</div>
					</div>

				</div> -->
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
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="js/gmap3.js"></script>
	<script type="text/javascript">
	/* <![CDATA[ */
		jQuery(function () {
		    jQuery("#map").gmap3({
		        marker: {
		            address: "2252 Chicago"
		        },
		        map: {
		            options: {
		                zoom: 10
		            }
		        }
		    });
		});
	/* ]]> */
	</script>
</body>
</html>