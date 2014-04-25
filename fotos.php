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
			<h1 class="title">Torneo Petrolero Solidario 2012</h1>
			<!--
			<h1 class="intro">Web design is the creation of <span class="colour">digital environments</span>, that <span>facilitate</span> and encourage human activity; 
			<span>reflect </span> or adapt to individual voices and content. - Jeffrey Zeldman</h1>
			-->
			<div class="holder"></div>
			<!-- YOU CAN CHANGE THE AMOUNT OF IMAGES PER PAGE AT THE FOOT OF THIS PAGE - SEE COMMENTED CODE - SET NUMBER OF IMAGES PER PAGE -->
      
			<!-- item container -->
			<div class="row">
				<ul id="itemContainer">                         
					<li><div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/1.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/1.jpg" alt="" /></a></div> 
						<div class="pad15"></div>                            
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/2.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/2.jpg" alt="" /></a></div> 
					   <div class="pad15"></div>
					</div>
					</li>
					
					<li>
					 <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/3.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/3.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					<li>
					
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/4.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/4.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                              
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/5.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/5.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
				   <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/6.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/6.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/7.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/7.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/8.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/8.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
				   <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/9.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/9.jpg" alt="" /></a></div> 
							<div class="pad15"></div>
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/10.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/10.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/11.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/11.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/12.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/12.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li><div class="span3">
					<div class="hover_colour">
					<a href="img/portfolio/1.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/1.jpg" alt="" /></a></div> 
					   <div class="pad15"></div>                            
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/2.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/2.jpg" alt="" /></a></div> 
					   <div class="pad15"></div>
					</div>
					</li>
					
					<li>
					 <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/3.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/3.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					<li>
					
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/4.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/4.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                              
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/5.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/5.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
				   <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/6.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/6.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/7.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/7.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/8.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/8.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
					
					<li>
				   <div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/9.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/9.jpg" alt="" /></a></div> 
							<div class="pad15"></div>
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/10.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/10.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/11.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/11.jpg" alt="" /></a></div>  
						<div class="pad15"></div>                                    
					</div>
					</li>
					
					<li>
					<div class="span3">
						<div class="hover_colour">
					<a href="img/portfolio/12.jpg" data-rel="prettyPhoto[portfolio1]"> 
					<img src="img/portfolio/12.jpg" alt="" /></a></div> 
						<div class="pad15"></div>
					</div>
					</li>
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
<script src="js/functions.js" type="text/javascript"></script>
<script src="js/jPages.js"></script>

<!-- /* SET NUMBER OF IMAGES PER PAGE */ -->
<script type="text/javascript">
//<![CDATA[
  $(function(){
$("#itemContainer").show();
   $("div.holder").jPages({
        containerID  : "itemContainer",
        perPage      : 20,
		keyBrowse   : true
    });
});
//]]>
</script>
	

</body>
</html>	