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
								<a href="index.php"><img src="img/logo.png " alt="" class="animated bounceInDown" style="margin-top: -10px; margin-bottom:-10px"/></a> 
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
										
										<!-- TORNEO -->
										<?php
										if($titulo === "torneo"){
												echo '
												<li class="dropdown active">
													<a  href="torneo.php">Torneo </a>
												</li>
												';
											}else{
												echo'
												<li>
													<a href="torneo.php">Torneo</a>
												</li>
												';
											}
										?>
										<!-- /TORNEO -->
										
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
	