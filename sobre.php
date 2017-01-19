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
					<div class="logo bottomtip" title="Best and Most Popular Musics">
						<a href="#"><img src="images/logo.png" alt="Best and Most Popular Musics"></a>
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
						<li> Sobre nossa empresa </li>
					</ul>
				</div><!-- breadcrumb -->
			</div><!-- row -->

			<div class="row row-fluid clearfix mbf">
				<div class="span8 posts">
					<div class="def-block clearfix">
						<ul class="tabs">
							<li><a href="#t-1" class="active">Criação</a></li>
							<li><a href="#t-2">História</a></li>
							<li><a href="#t-3">Equipamentos</a></li>
						</ul>
						<ul class="tabs-content">
							<li id="t-1" class="active">ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA
							ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA
							ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA ESCREVER AQUI SOBRE A CRIAÇÃO DA EMPRESA.</li>
							<li id="t-2">
								<img class="fll four-radius" src="images/assets/news2.jpg" alt="#"><p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus aliquet. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget...</p>
								
								<p>"Nulla sagittis porttitor varius. Vestibulum eleifend, lorem sit amet gravida accumsan, nisi est tempor risus, non suscipit lectus nunc sit amet nunc. Pellentesque iaculis sapien at lacus vulputate sodales et eget quam. Etiam tristique bibendum leo, quis sagittis urna tempus non. Aliquam aliquet, nibh nec placerat tempus, tellus neque accumsan justo, ut euismod lorem eros vel metus. Duis sed dignissim quam. Morbi sit amet tellus rutrum erat mattis ultricies. Aenean vitae libero at quam imperdiet sollicitudin non non turpis. Etiam viverra, est eget vehicula mattis, metus nunc porttitor diam, in commodo enim ipsum ut mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse condimentum sem vitae magna volutpat vel euismod orci bibendum. Aenean tristique molestie mi, vel consectetur lorem fringilla vel. Nulla facilisi."</p>
							</li>
							<li id="t-3">Nulla sagittis porttitor varius. Vestibulum eleifend, lorem sit amet gravida accumsan, nisi est tempor risus, non suscipit lectus nunc sit amet nunc. Pellentesque iaculis sapien at lacus vulputate sodales et eget quam. Etiam tristique bibendum leo, quis sagittis urna tempus non. Aliquam aliquet, nibh nec placerat tempus, tellus neque accumsan justo, ut euismod lorem eros vel metus. Duis sed dignissim quam. Morbi sit amet tellus rutrum erat mattis ultricies. Aenean vitae libero at quam imperdiet sollicitudin non non turpis. Etiam viverra, est eget vehicula mattis, metus nunc porttitor diam, in commodo enim ipsum ut mi. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse condimentum sem vitae magna volutpat vel euismod orci bibendum. Aenean tristique molestie mi, vel consectetur lorem fringilla vel. Nulla facilisi.
							</li>
							<li id="t-4">Nulla id ligula arcu. Integer et tincidunt lectus. Duis id ligula diam, quis dapibus erat. Curabitur nec libero et est vulputate sollicitudin. Fusce sit amet turpis sed mauris volutpat posuere. Morbi vulputate, odio eget adipiscing faucibus, lorem ipsum facilisis justo, gravida tempus orci nisi ac eros. Pellentesque metus dolor, imperdiet sed ornare vel, tempus eu ipsum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Donec malesuada, massa ut lacinia congue, eros felis aliquam arcu, non euismod ligula sapien in est. Etiam vitae congue orci.</li>
						</ul>
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