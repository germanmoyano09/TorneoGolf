<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title> Torneo Petrolero Solidario</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

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

<!--    COUNTDOWN -->
	<!-- CSS start Here-->
	<link rel="stylesheet" href="CountDown/css/reset.css">
	<link rel="stylesheet" href="CountDown/css/flipclock.css">
	<link rel="stylesheet" href="CountDown/css/style.css" />
	<link rel="stylesheet" href="CountDown/css/theme.css" />
	<!-- CSS end Here-->
	<!-- JS start Here-->
	<script src="CountDown/js/jquery.js"></script>
	<script src="CountDown/js/modernizr.js"></script>
<!--/COUNTDOWN -->

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
		<img src="img/slider/slider2.jpg" alt="">
	</div>
	<!-- /slider -->
	
	<!-- banner -->	
	<div id="banner">
		<div class="welcome_index">
			Cada vez falta menos para nuestro próximo torneo. Por cualquier consulta o recomendación puede conctactarnos en la sección de contacto.
		</div>
		<!-- Countdown-->
		<div class="mainWrapper">
			<!-- Countdown Wrapper start Here-->
			<section class="countdown-wrapper cf">
				<div class="countdown cf"></div>
			</section>
			<!-- Countdown Wrapper end Here-->	
		</div>
		<!-- /Countdown-->
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
						
	<!-- scripts -->
	<script src="js/jquery.js"></script>			
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/jquery.content_slider.min.js" type="text/javascript"></script>
	
	<!-- nerve slider -->
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
		
	<!--    COUNTDOWN -->
	<!-- JS start Here-->
	<script src="CountDown/js/flipclock/libs/prefixfree.min.js"></script>
	<script src="CountDown/js/flipclock/flipclock.min.js"></script>
	​<script src="CountDown/js/custom.js"></script>
	<!-- JS end Here
	<!--    /COUNTDOWN -->
		
</body>
</html>