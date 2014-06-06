<?php 
	include("fijo/datosaccesodb.php");
	$conexion = mysqli_connect($host, $usuario, $clave, $db);
	if (mysqli_connect_errno()) {
		echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	mysqli_query($conexion, "SET NAMES 'utf8'");
?>
	<div class="header">
		<div id="slider_header">
			<!--logo-->
			<div class="container">
				<div class="row">
					<div class="span12">
						<div class="navbar">
							<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
							<i class="icon-align-justify icon-2x"></i></button>
							<!--logo-->			
							<div class="logo">
								<!-- <a href="index.php"><img src="img/logo.jpg" alt="" class="animated bounceInDown" /></a>  -->
							</div>
							<!-- menu-->
								<div class="nav-collapse collapse">
									<ul class="nav pull-right">
										<!-- INICIO-->
										<?php
											if($titulo === "index"){
												echo '
												<li class="dropdown active">
													<a  href="index.php">Inicio </a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="index.php">Inicio</a>
												</li>
												';
											}
										?>
										<!-- /INICIO-->
										
										<!-- EQUIPO -->
										<?php
										if($titulo === "equipo"){
												echo '
												<li class="dropdown active">
													<a  href="equipo.php">Equipo </a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="equipo.php">Equipo</a>
												</li>
												';
											}
										?>
										<!-- /EQUIPO -->
										
										<!-- LUGAR -->
										<?php
											if($titulo === "lugar"){
												echo '
												<li class="dropdown active">
													<a  href="lugar.php">Lugar</a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="lugar.php">Lugar</a>
												</li>
												';
											}
										?>
										<!-- /LUGAR -->										
										
										<!-- SPONSORS -->
										<?php
											if($titulo === "sponsors"){
												echo '
												<li class="dropdown active">
													<a  href="sponsors.php">Sponsors</a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="sponsors.php">Sponsors</a>
												</li>
												';
											}
										?>
										<!-- /SPONSORS -->		
										
										<!-- FOTOS -->
										<?php
											if($titulo === "fotos"){
										?>
												<li class="dropdown active">
													<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
													Galería <span class="caret menu-caret"></span></a>
													<ul class="dropdown-menu">
										<?php
											}else{
										?>			
												<li class="dropdown">
													<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
													Galería <span class="caret menu-caret"></span></a>
													<ul class="dropdown-menu">	
										<?php
											}
											$sql = "SELECT id,nombre FROM album WHERE album.visible=1";
											$consulta = mysqli_query($conexion, $sql);
											$error = "";
											if ($consulta){
												while ($album=mysqli_fetch_array($consulta)){
													?>
														<li><a href="fotos.php?id=<?php echo $album['id']; ?>"><?php echo $album['nombre']; ?></a></li>
													<?php 
												}
											}else{
												$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
												echo $error;
											}
										?>		
													</ul>
												</li>
										<!-- /FOTOS -->
									
										<!--										
										<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
										Pages <span class="caret menu-caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="team.html">The Team</a></li>
											<li><a href="about.html">About</a></li>
											<li><a href="services.html">Services</a></li>
											<li><a href="pricing_table.html">Pricing Tables</a></li>
											<li><a href="dribbble_stream.html">Dribbble Photostream</a></li>
											<li><a href="pinterest_stream.html">Pinterest Photostream</a></li>
											<li><a href="youtube_stream.html">YouTube Photostream</a></li>
											<li><a href="full.html">Full Width</a></li>
											<li><a href="left_sidebar.html">Left Sidebar</a></li>
											<li><a href="right_sidebar.html">Right Sidebar</a></li>
											<li><a href="404.html">404 Page</a></li>
										</ul>
										</li>
										<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
										Work <span class="caret menu-caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="portfolio_2columns.html">Sorting 2 Columns</a></li>
											<li><a href="portfolio_3columns.html">Sorting 3 Columns</a></li>
											<li><a href="portfolio_4columns.html">Sorting 4 Columns</a></li>
										
											<li><a href="expanding_gallery.html">Expanding Gallery</a></li>
											<li><a href="gallery.html">Paginated Gallery</a></li>
											<li><a href="video_gallery.html">Video Gallery</a></li>
											<li><a href="single_portfolio.html">Single Slider</a></li>
											<li><a href="single_video.html">Single Video</a></li>
											<li><a href="single_image.html">Single Image</a></li>
											<li><a href="full_slider.html">Full Slider</a></li>
											<li><a href="full_video.html">Full Video</a></li>
										</ul>
										</li>
										<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
										Styles <span class="caret menu-caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="columns.html">Columns</a></li>
											<li><a href="typography.html">Typography</a></li>
											<li><a href="buttons.html">Buttons</a></li>
											<li><a href="icons.html">Retina Icons</a></li>
											<li><a href="illustrations.html">Illustrations</a></li>
											<li><a href="animations.html">Image Animations</a></li>
											<li class="dropdown-submenu ">
											<a href="javascript:{}">Colours</a>
											<ul class="dropdown-menu pull-right">
											<li><a href="../blue/index.html">Blue</a></li>
											<li><a href="../orange/index.html">Orange</a></li>
											<li><a href="index.html">Green</a></li>
											<li><a href="../red/index.html">Red</a></li>
											</ul>
											<li><a href="script_examples.html">Script Examples</a></li>
											<li><a href="sliders.html">Sliders</a></li>
										</ul>
										</li>
										<li class="dropdown">
										<a class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="true" href="javascript:{}">
										Blog <span class="caret menu-caret"></span></a>
										<ul class="dropdown-menu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog_post.html">Blog Post</a></li>
											<li><a href="blog_two.html">Blog II</a></li>
											<li><a href="blog_post2.html">Blog Post II</a></li>
										</ul>
										</li>
										-->
										<?php
											if($titulo === "contacto"){
												echo '
												<li class="dropdown active">
													<a  href="contacto.php">Contacto </a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="contacto.php">Contacto</a>
												</li>
												';
											}
										?>
										
									</ul>
								</div>
							<!-- /menu -->
						</div>
					</div>
				</div>
			</div>
		</div>
	