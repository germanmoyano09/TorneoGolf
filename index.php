<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title> Torneo Petrolero Solidario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Somos un grupo de amigos relacionados con la industria petrolera que hemos decidido organizar nuevamente un Torneo de Golf que se llama “TORNEO PETROLERO SOLIDARIO”">
<meta name="author" content="German Moyano">
<meta name="keywords" content="torneo, solidario, golf, bolivia, argentina, santa cruz, las, palmas, country, club, petroleo" />
<meta name="robots" content="index, follow, noarchive" />
<meta name="googlebot" content="index, follow" />

<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />


<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
	
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>
<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet" type="text/css"/>
<link href="css/zocial.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="css/nerveslider.css">

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->


<!-- COUNTDOWN -->
<!-- Mobile Specific Metas-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- CSS -->
	<!--<link rel="stylesheet" href="countdown/css/bootstrap.css" type="text/css" media="screen"> -->
	<link rel="stylesheet" href="countdown/css/bootstrap-theme.css" type="text/css" media="screen"> 
	<link rel="stylesheet" href="countdown/css/layout.css" type="text/css" media="screen"> 
	<link rel="stylesheet" href="countdown/css/background.css" type="text/css" media="screen">
<!-- /COUNTDOWN -->

</head>

<body id="index">
	<!--header-->
		<?php $titulo = "index"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->
	
	<!-- slider -->
	<div class="myslider">
		<img src="img/slider/slider1.jpg" alt="">
		<img src="img/slider/slider2.jpg" alt="">
		<img src="img/slider/slider3.jpg" alt="">
		<img src="img/slider/slider4.jpg" alt="">
	</div>
	<!-- /slider -->
	
	<!-- banner -->	
	<div id="banner">
		<div class="welcome_index">
			Cada vez falta menos para nuestro próximo torneo. <br>
			Cualquier consulta o recomendación puede comunicarse con nosotros a través de la sección de contacto.
		</div>
		
		<div class="container isi">
			<div class="row">
				<div class="col-xs-12 text-center">
					<div class="countdown">
						<ul class="time">
							<li class="dotted color">
								<div class="days"></div><br />
								Días
							</li>
							<li class="dotted last2 color">
								<div class="hours"></div><br />
								Horas
							</li>
							<li class="dotted color">
								<div class="minutes"></div><br />
								Minutos
							</li>
							<li class="dotted last color">
								<div class="seconds"></div><br />
								Segundos
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
		
	</div>
	<!--//banner-->
		
	<!-- footer -->
	<div id="footer_index">
		<?php include_once("fijo/footer.php"); ?>
	</div>	
	<!-- /footer -->	
	
	<!-- up to top -->
	<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
	<!--//end-->
	
	</div> <!--header -->				
	
	<!-- scripts -->
	<script src="js/jquery.js"></script>			
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/scripts.js"></script>
	<!--
	<script src="js/functions.js" type="text/javascript"></script>
	-->
	<script src="js/jquery.content_slider.min.js" type="text/javascript"></script>
	
	
	<!-- SLIDER -->
	<script src="js/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/jquery.nerveSlider.min.js"></script>
	<script>
	//<![CDATA[
		$(document).ready(function() {
		$(".myslider").show();
		$(".myslider").startslider({
			slideTransitionSpeed: 500,
			slideTransitionEasing: "easeOutExpo",
			slidesDraggable: true,
			sliderResizable: true,
			showDots:true,
			});
		});
	//]]>
	</script>
	<!-- /SLIDER -->
	
	<!-- js COUNTDOWN -->
		<!--<script type="text/javascript" src="countdown/js/jquery-1-8-3.min.js"></script>-->
		<script type="text/javascript" src="countdown/js/jquery.countdown.js" charset="utf-8"></script>
		<script type="text/javascript" src="countdown/js/countdown.js" charset="utf-8"></script>
		<script type="text/javascript" src="countdown/js/supersized.3.2.7.js" charset="utf-8"></script>
		<script type="text/javascript" src="countdown/js/images.js" charset="utf-8"></script>
		<script type="text/javascript" src="countdown/js/form.js" charset="utf-8"></script>
		<script type="text/javascript" src="countdown/js/cssloader.js" charset="utf-8"></script>
	<!-- /js COUNTDOWN -->
		
</body>
</html>