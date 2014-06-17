<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Torneo Petrolero Solidario - Lugar</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
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
<script src="js/modernizr.custom.js"></script>
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
</head>
<body>
	<!--header-->
		<?php $titulo = "lugar"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->
								
	<!--page-->
	<div class="container">
		<div class="inner_content">
			<h1 class="title">Las Palmas Country Club </h1>
			<h1 class="intro">
			El <span>Torneo Petrolero Solidario</span> tendrá como sede Las Palmas Country Club, el cual fue elegido como sede durante las tres últimas 
			competencias debido a su amplitud y comodidades las cuales permiten que el juego pueda desarrollarse de manera adecuada.
						
			 
			</h1>
		</div>
	</div>
			
	<div id="container-id"  class="strip">
		<!-- CIRCLE IMAGE -->
		<img title="preset: 'bubble-1'" src="img/lugar/slider.jpg" alt=""/> 
	</div>
			
	<div class="container">
		<div class="inner_content">
			
			<div class="pad25"></div>
				
			<div class="row">
				<div class="span6">
					<h1>Las Palmas Country Club</h1>
					<p>
						Sus diferentes espacios han sido escenario de importantes actos locales, nacionales e internacionales. En el ámbito político se destaca
						la Cumbre de Las Américas en 1996. En cuanto al golf ha sido sede de importantes competencias como: el Campeonato Sudamericano Juvenil 
						de Golf en marzo de 2002, Campeonato Sudamericano de Golf “Copa Los Andes 2007” y Torneo Senior Bolivariano Mariscal Sucre en 2009, 
						además de incontables torneos nacionales y locales para las diferentes categorías. Las canchas de tenis, por su parte, vieron surgir 
						a destacados campeones en los torneos COSAT, Campeonatos Nacionales de Tenis Sub 10, entre muchos otros. Siendo, Las Palmas Country
						Club, anfitriones de altos dignatarios de diferentes estados y grandes valores a nivel mundial del golf, tenis y diferentes artes.
					</p>
				</div>
				
				<div class="span6">
					<div class="pad25"></div>
					<div id="container-id2">
						<img title="preset: 'portrait-1', wait: 3500" src="img/lugar/1.jpg" alt="" /> 
						<img title="preset: 'diptych', wait: 3500" src="img/lugar/2.jpg" alt=""/> 
						<img title="preset: 'boxes', wait: 3500" src="img/lugar/3.jpg" alt=""/> 
						<img title="preset: 'boxes-2', wait: 3500" src="img/lugar/4.jpg" alt=""/>
						<img title="preset: 'diptych-h', wait: 3500" src="img/lugar/5.jpg" alt=""/> 
						<img title="preset: 'profile-1', wait: 3500" src="img/lugar/6.jpg" alt=""/> 
						<img title="preset: 'profile-2', wait: 3500" src="img/lugar/7.jpg" alt=""/>  
					</div>
				</div>
			</div>
			<div class="pad60"></div>
		</div>
	</div>
	
				
	<!-- footer -->
		<?php include_once("fijo/footer.php"); ?>
	<!-- /footer -->
	
	<!-- up to top -->
		<a href="#"><i class="go-top hidden-phone hidden-tablet icon-double-angle-up"></i></a>
	<!--//end-->
								
	<!-- scripts -->
	<script src="js/jquery.js"></script>			
	<script src="js/bootstrap.min.js"></script>
	<script src="js/scripts.js"></script>	
	<script src="js/frameit-presets.js"></script>
	<script src="js/frameit-plugin.js"></script>
		<!-- frame it pics-->
	<script>
	//<![CDATA[
			// on windows load make sure all image are loaded
			$(window).load(function() {
			$("#container-id, #container-id2").show();
			$('#container-id, #container-id2 ').frameit();
			})
			//]]>
			</script>

	<!-- quotes -->
		<script>
		//<![CDATA[
			$( function() {
				/* $( selector ).cbpQTRotator( [options] );
				{ speed : 700, easing : 'ease', interval : 8000 }
				$( selector ).cbpQTRotator( 'destroy' );
				*/
				$( '#cbp-qtrotator' ).cbpQTRotator();
			});
			//]]>
			
		</script>	
	<script src="js/functions.js" type="text/javascript"></script>	
</body>
</html>