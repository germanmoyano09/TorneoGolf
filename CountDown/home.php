<!DOCTYPE html>
<html>
<head>
<title>Pixp CountDown</title>
<meta charset="utf-8">
<!-- CSS start Here-->
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/flipclock.css">
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/theme.css" />
<!-- CSS end Here-->
<!-- JS start Here-->
<script src="js/jquery.js"></script>
<script src="js/modernizr.js"></script>
<script type="text/javascript">
	//<![CDATA[
		$(window).load(function() { // makes sure the whole site is loaded
			$('#status').fadeOut(); // will first fade out the loading animation
			$('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
			$('body').delay(350).css({'overflow':'visible'});
		})
	//]]>
</script> 
<!-- JS end Here-->
</head>
<body class="cl-6">
<!-- Preloader -->
<div id="preloader">
	<div id="status">&nbsp;</div>
</div>
<!-- Preloader end Here-->

<!-- Main Wrapper start Here-->
<div class="mainWrapper">
	<!-- Countdown Wrapper start Here-->
	<section class="countdown-wrapper cf">
		<div class="countdown cf"></div>
	</section>
	<!-- Countdown Wrapper end Here-->	
</div>
<!-- Main Wrapper end Here-->

<!-- JS start Here-->
<script src="js/flipclock/libs/prefixfree.min.js"></script>
<script src="js/flipclock/flipclock.min.js"></script>
​<script src="js/custom.js"></script>
<!-- JS end Here-->
</body>
</html>