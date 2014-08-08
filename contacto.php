<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Torneo Petrolero Solidario - Contacto</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon" />
<link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,300' rel='stylesheet' type='text/css'>

<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png" />
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />

<!--[if IE]>
	<link href="http://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:400" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet" type="text/css">
	<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
<![endif]-->

<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/theme.css" rel="stylesheet">
<link href="css/zocial.css" rel="stylesheet" type="text/css"/>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
</head>
<body>
	<!--header-->
		<?php $titulo = "contacto"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->
								
	<div class="container">
		<div class="inner_content">
			<h1 class="title">Contacto</h1>
			<h1 class="intro">Inscripciones abiertas los días jueves 1 y viernes 2 de octubre en la central telefónica de<span class="mid"> Las Palmas Country Club</span>  de 8:00 a 17:00 hrs.
		</div>
	</div>
			
	<!--//GOOGLE MAP -ADD YOUR EMBED INFO HERE
	<div id="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7597.577273133003!2d-63.21002224075317!3d-17.80162803668827!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x93f1c29f5a823f5f%3A0x2dacab18d8054d47!2sCountry+Club+Las+Palmas!5e0!3m2!1ses-419!2s!4v1398402771319" frameborder="0" scrolling="no" style="border:0" ></iframe>	
	</div>
	-->		
	<div id="map" style="text-align: center;">
		<img src="img/contacto/torneo_contacto.png" >
	</div>
	
	<div class="container">
		<div class="inner_content">
			<div class="row">
				<div class="span4">
					<h3> Necesita más información? </h3> 
					<p> Por favor complete el formulario con todos sus datos y le responderemos sus dudas lo antes posible!</p>
					
					<p>
						<b>Información de Contacto</b><br>
						Torneo Petrolero Solidario<br>
						Santa Cruz<br>
						Bolivia
					</p>
					
					<ul class="icons">
						<li><i class="icon-envelope colour"></i> <a href="mailto:#">comiteorganizadortps@gmail.com</a></li>
						<!-- <li><i class="icon-phone colour"></i> +44 020 2345 1987</li> -->
					</ul>
					<br>
					<br>
					<span class="mid">
					<?php
						if (isset($_GET['ok'])){
							?>
							<script>
								alert("Tu mensaje fue enviado satisfactoriamente. Muchas gracias!");
							</script>
							<?php
							echo "¡Gracias por tu mensaje! Nos pondremos en contacto lo antes posible.";
						}
					?>
					</span>  
				</div>
		
				<div class="span8 ">
					<div class="contact_form">  
						<form id="contacto" action="php/contacto.php" METHOD="POST">
							<p class="form_info">nombre <span class="required">*</span></p>
								<input class="span5" type="text" name="name" value="" required/>
							<p class="form_info">correo <span class="required">*</span></p>
								<input class="span5" type="text" name="email" value="" required />
							<p class="form_info">asunto</p>
								<input class="span5" type="text" name="subject" value="" required/><br>
							<p class="form_info">mensaje</p>
								<textarea name="message" id="message" class="span8" required></textarea>
							<div class="clear"></div>
							<input type="submit" class="btn  btn-large btn-primary marg-right5 hue" value="Enviar" />
							<input type="reset"  class="btn   btn-large btn-primary" value="Limpiar" />
							<div class="clear"></div>
						</form>
					</div>
				</div>                	
			</div>
		</div>
	</div>
	
	<!--//page-->
	<div class="pad45"></div>
				
	<!-- footer -->
		<?php include_once("fijo/footer.php"); ?>
	<!-- /footer -->
	
	<!-- up to top -->
	<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
	
	<!--//end-->
				
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
<!-- <script src="js/functions.js" type="text/javascript"></script>  -->
		

</body>
</html>
