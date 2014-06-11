<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<title>Torneo Petrolero Solidario - Quienes Somos</title>
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
		<?php $titulo = "equipo"; ?>
		<?php include_once("fijo/header.php"); ?>
	<!--//header-->				
	
	<!--page-->
	<div class="container">
		<div class="inner_content">
					
			<h1 class="title">Hay equipoo!!! </h1>
			<h1 class="intro">Web design is the creation of <span class="colour">digital environments</span>, that <span>facilitate</span> and encourage human activity; 
			<span class="mid">reflect </span> or adapt to individual voices and content; and change gracefully over time while always retaining their identity.</h1>
				
			<img  src="img/quienesSomos/team.jpg" alt="" /> 
			<div class="pad25"></div>
			<div class="clear"></div>
				
			<div class="pad45"></div>
			
			<div class="row"><div class="pad25"></div>
				<div class="span4">
					<div class="animated bounceInLeft"><i class="icon-group  colour  big"></i></div>
					<h2>Our Philosophy</h2>
					<p>
						<b>Wullam ligula sapien, pharetra eget volutpat vel, consequat in lectus. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </b>
					</p>
					<p>
						Wullam ligula sapien, pharetra eget volutpat vel, consequat in lectus sed do. 
						<a href="#" data-rel="tooltip" data-placement="top" title="Here is the sample of tooltip that 
						contains three lines or more."><strong>Hover here to see a Tooltip</strong></a> eiusmod tempor incididunt ut labore et dolore magna aliqua. 
						Class aptent taciti sociosqu ad litora torquent.
					</p>
					<div class="pad25"></div>
				</div>
						
				<div class="span4">
					<div class="animated bounceInLeft"><i class="icon-cogs colour big"></i></div>
					<h2>Our Mission</h2>
					<p>
						Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl. Morbi euismod ante quis tellus imperdiet porta. 
					</p>
							
					<ul class="icons">
						<li><i class="icon-ok colour"></i> Responsive Design</li>
						<li><i class="icon-ok colour"></i> One font, 249 icons</li>
						<li><i class="icon-ok colour"></i> Powerful front-end framework</li>
						<li><i class="icon-ok colour"></i> Built with Twitter Bootstrap</li>
					</ul>
					<div class="pad25"></div>
				</div>
						
				<div class="span4">
					<div class="animated bounceInLeft"><i class="icon-calendar colour big"></i></div>
					<h2>Our Process</h2>
					<p>
						Mauris viverra, tortor eget interdum lacinia, lacus mi tempor purus, eu commodo enim dui ac nisl. Morbi euismod ante quis tellus imperdiet porta.
					</p>
					
					<ul class="icons">
						<li><i class="icon-desktop colour"></i> Powerful front-end framework</li>
						<li><i class="icon-laptop colour"></i> Built with Twitter Bootstrap</li>
						<li><i class="icon-tablet colour"></i> CSS3 Animations</li>
						<li><i class="icon-mobile-phone colour"></i> One font, 249 icons</li>
					</ul>
					<div class="pad25"></div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="pad60"></div>
	<!--//page-->
	
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
<script src="js/jquery.content_slider.min.js" type="text/javascript"></script>
<script src="js/additional_content.js" type="text/javascript"></script>

<!-- circle slider ADD YOUR IMAGES HERE -->
<script type="text/javascript">
//<![CDATA[
	(function($){
		$(document).ready(function() {
			var image_array = new Array();
			image_array = [
				{image: 'img/team/1.jpg', link_url: 'img/team/1_big.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/team/2.jpg', link_url: 'img/team/2_big.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/team/3.jpg', link_url: 'img/team/3_big.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/team/4.jpg', link_url: 'img/team/4_big.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/team/5.jpg', link_url: 'img/team/5_big.jpg', link_rel: 'prettyPhoto'},
				{image: 'img/team/6.jpg', link_url: 'img/team/6_big.jpg', link_rel: 'prettyPhoto'}
			];
			$('#slider1').content_slider({		
				map : image_array,				
				max_shown_items:5,				// number of visible circles
				hv_switch: 0,					
				active_item: 0,					
				wrapper_text_max_height: 450,	
				middle_click: 1,				
				under_600_max_height: 1200,		
				border_radius:	-1,				
				automatic_height_resize: 1,
				border_on_off: 0,
				allow_shadow: 0,
				enable_mousewheel:0});
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

