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
<title>Torneo Petrolero Solidario - Fotos</title>
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

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 7]>
<link rel="stylesheet" href="css/font-awesome-ie7.min.css">
<![endif]-->
</head>
<body>
	<!--header-->
		<?php $titulo = "fotos"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->
								
	<!--page-->
	<div class="container">
		<div class="inner_content">
			<?php
				$id = $_GET['id'];
				$sql = "SELECT * FROM album where id = $id";
				$consulta = mysqli_query($conexion, $sql);
				$error = "";
				if($consulta){
					while($album = mysqli_fetch_array($consulta)){
						?>
							<h1 class="title"><?php echo $album['titulo'] ?></h1>	
						<?php
					}
				}else{
					$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
					echo $error;
				}
			?>
			<!--	
			<h1 class="intro">Web design is the creation of or adapt to individual voices and content. - Jeffrey Zeldman</h1>
			-->
			<div class="holder"></div>
			<!-- YOU CAN CHANGE THE AMOUNT OF IMAGES PER PAGE AT THE FOOT OF THIS PAGE - SEE COMMENTED CODE - SET NUMBER OF IMAGES PER PAGE -->
      
			<!-- item container -->
			<div class="row">
				<ul id="itemContainer">
					<?php
						$id = $_GET['id'];
						$sql = "SELECT nombre FROM foto WHERE album = $id";
						$consulta = mysqli_query($conexion, $sql);
						$error = "";
						if($consulta){
							while($foto = mysqli_fetch_array($consulta)){
					?>
								<li>
									<div class="span3">
										<div class="hover_colour">
											<a href="img/galeria/fotos/<?php echo $foto['nombre'] ?>" data-rel="prettyPhoto[portfolio1]"> 
												<img src="img/galeria/fotosthumbs/thumb-<?php echo $foto['nombre'] ?>" alt="" />
											</a>
										</div> 
										<div class="pad15"></div>                            
									</div>
								</li>
					<?php
							}
						}else{
							$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
							echo $error;
						}
					?>
				</ul>	
			</div>
				
			<div class="holder"></div>
		</div>
	</div>   
	<!--//page-->
	<div class="pad60"></div>
	
	<!-- footer -->
		<?php include_once("fijo/footer.php"); ?>
	<!-- /footer -->
	
	<!-- up to top -->
	<a href="#"><i class="go-top hidden-phone hidden-tablet  icon-double-angle-up"></i></a>
	
	<!--//end-->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<!--
	<script src="js/functions.js" type="text/javascript"></script>
	-->
	<script src="js/jPages.js"></script>

	<!-- /* SET NUMBER OF IMAGES PER PAGE */ -->
	<script type="text/javascript">
	//<![CDATA[
	  $(function(){
	$("#itemContainer").show();
	   $("div.holder").jPages({
			containerID  : "itemContainer",
			perPage      : 24,
			keyBrowse   : true
		});
	});
	//]]>
	</script>
</body>
</html>	