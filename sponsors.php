<!DOCTYPE html>
<?php 
	include("fijo/datosaccesodb.php");
	$conexion = mysqli_connect($host, $usuario, $clave, $db);
	if (mysqli_connect_errno()) {
		echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Torneo Petrolero Solidario - Sponsors</title>
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
		<?php $titulo = "sponsors"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->		
								
	<!--page-->
	<div class="container">
		<div class="inner_content">
			<h1 class="title">Nuestros Auspiciadores</h1>
			<h1 class="intro" style="text-align:justify;">
				Nuestros auspiciadores son todas las empresas petroleras de servicios, así como las operadoras y empresas amigas, las que colaboran de forma absolutamente
				solidaria y con un gran desprendimiento.
				<br>
				Por ello, les hacemos llegar un agradecimiento especial, pues sin su apoyo no hubiésemos alcanzado las metas propuestas.

				<!--
				El <span>Torneo Petrolero Solidario </span> cuenta con el auspicio de todas las Empresas Petroleras de Servicio, así
				como las Operadoras y Empresas Amigas quienes colaboran con nuestro emprendimiento de forma totalmente Solidaria y con
				un gran desprendimiento, hacemos llegar a todos ellos un gran saludo y un gran agradecimiento.
				-->
			</h1>
					
			<div class="row">
			<?php
				$sql = "SELECT * FROM sponsor ORDER BY posicion";
				$consulta = mysqli_query($conexion, $sql);
				$error = "";
				if($consulta){
					while($sponsor = mysqli_fetch_array($consulta)){
						?>
							<div class="span2">
								 <!-- <h3><?php //echo $sponsor['nombre'] ?> </h3> -->
								<div class="pad15"></div>
								<!-- <div data-zlname="hover"> -->
									<img src="img/sponsors/<?php echo $sponsor['imagen'] ?>" alt="" />
								<!-- </div> -->
								<div class="pad25"></div>
							</div> 
						<?php
					}
				}else{
					$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
					echo $error;
				}
			?>
			</div>
			<h1 class="intro" style="text-align:justify;">
				Durante el año 2012 nos acompañaron las siguientes empresas:
			</h1>
			<img src="img/sponsors/2012.png" alt="" />
			
		</div>
	</div>	
				
	<div class="pad45"></div>
				
	<!-- footer -->
		<?php include_once("fijo/footer.php"); ?>
	<!-- /footer -->
	
	<!-- up to top -->
		<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
	<!--//end-->
				
	<script type="text/javascript" src='js/jquery.js'></script>	
	<script src="js/jquery.easing.js" type="text/javascript"></script>		
	<script src="js/bootstrap.min.js"></script>	
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="js/functions.js" type="text/javascript"></script>
	<script src="js/jquery.mate-hover.1-1-min.js" type="text/javascript"></script>

</body>
</html>