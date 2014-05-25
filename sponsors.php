<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Torneo Petrolero Solidario - Sponsors</title>
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
			<h1 class="title">Nuestros Sponsors</h1>
			<h1 class="intro">
				El <span>Torneo Petrolero Solidario </span> cuenta con la participación de las principales y más importantes empresas petroleras del país.
			</h1>
					
			<div class="row">
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
				
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
				
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
				
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
				
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
				
				<div class="span4">
					<h2> MI-SWACO</h2>
					<div class="pad15"></div>
					
					<div data-zlname="hover">
						<img src="img/sponsors/mi_small.jpg" alt="" />
						<a data-zl-popup="link" href="img/sponsors/mi.jpg" data-rel="prettyPhoto[portfolio1]"></a>
					</div>
					<div class="pad25"></div>
				</div> 
						
				
			</div>
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

<!--slider-->
<script src="js/jquery.content_slider.min.js" type="text/javascript"></script>
<!-- ADD YOUR CLIENT IMAGES HERE -->
<script type="text/javascript">
//<![CDATA[
	(function($){
		$(document).ready(function() {
			var image_array = new Array();
			image_array = [
				{image: 'img/clients/1.jpg', link_url: 'img/clients/1.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/clients/2.jpg', link_url: 'img/clients/2.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/clients/3.jpg', link_url: 'img/clients/3.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/clients/4.jpg', link_url: 'img/clients/4.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/clients/5.jpg', link_url: 'img/clients/5.jpg', link_rel: 'prettyPhoto'}
			];
			$('#slider1').content_slider({		
				map : image_array,				
				max_shown_items: 5,			
				hv_switch: 0, active_item: 0,					
				wrapper_text_max_height: 210, middle_click: 1, under_600_max_height: 1200,		
				border_on_off:0, allow_shadow:0, border_radius: 0, enable_mousewheel:0
			});
			$("a[rel^='prettyPhoto']").prettyPhoto();
			jQuery("a[rel^='prettyPhoto'], a[rel^='lightbox']").prettyPhoto({
			overlay_gallery: false, social_tools: false,  deeplinking: false
			});
		});
	})(jQuery);
	//]]>
</script>
			
</body>
</html>

