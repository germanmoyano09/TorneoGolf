<?php include("fijo/controlsesion.php"); ?>

<?php 
//Conectamos con la DB

include("fijo/datosaccesodb.php");
$conexion = mysqli_connect($host, $usuario, $clave, $db);
if (mysqli_connect_errno()) {
	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
	die();
}
mysqli_query($conexion, "SET NAMES 'utf8'");
?>

<?php $titulo="Torneo"; ?>

<?php include("fijo/head.php"); ?>

<!-- BEGIN BODY -->
<body class="page-header-fixed">

   <?php include("fijo/barrasuperior.php"); ?>
   
   <div class="clearfix"></div>
   <!-- BEGIN CONTAINER -->
   <div class="page-container">
   
      <?php include("fijo/menu.php"); ?>
	  
      <!-- BEGIN PAGE -->
      <div class="page-content">
         <!-- BEGIN PAGE HEADER-->
         <div class="row">
            <div class="col-md-12">
               <!-- BEGIN PAGE TITLE & BREADCRUMB-->
               <h3 class="page-title">
                  Torneo
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="torneo.php">Torneo</a>
                     <i class="icon-angle-right"></i>
			      </li>
				  <li>
                     <a href="#">Editar Torneo</a>
                     <i class="icon-angle-right"></i>				  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <!-- TABLA EDITABLE-->
               <div class="portlet box red">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-picture"></i>Torneo</div>
                  </div>
                  <div class="portlet-body">
                     
					 
					  <!-- BEGIN FORM-->
						  <form action="actualizartorneo.php" id="agregar_torneo" class="form-horizontal">
						  <div class="modal-body">
								<div class="form-body">
								   <div class="alert alert-danger display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Se encontraron algunos errores. Compruebe los campos marcados.
								   </div>
								   <div class="alert alert-success display-hide">
									  <button class="close" data-dismiss="alert"></button>
									  Torneo Editado!
								   </div>
								   <div class="form-group">
									  <label class="control-label col-md-4">Nombre<span class="required">* </span></label>
									  <div class="col-md-8">
										<?php 
											$torneoid = $_GET['id'];
											$sql = "SELECT nombre, titulo FROM torneo WHERE id = '$torneoid'";
											$result = mysqli_query($conexion, $sql);
											$error  = "";
											if($result){
												while ($torneo=mysqli_fetch_array($result)){
												?>
												<input type="text" name="nombretorneo" data-required="1" class="form-control" value="<?php echo $torneo['nombre']; ?>"/>
									  </div>
								   </div>
								   <div class="form-group">
									  <label class="control-label col-md-4">Título<span class="required">*</span></label>
									    <div class="col-md-8">
										 <input type="text" name="titulotorneo" data-required="1" class="form-control" value="<?php echo $torneo['titulo']; ?>"/>
										<?php 
												}
											}else{
												$error = "Error al consultar Base de Datos: ".mysqli_error($conexion);
											}
											?>
										</div>
									</div>
								</div>
						   </div>
					   <div class="form-group">
						  <label class="col-md-3"> </label>
						  <div class="col-md-8">
							<img id="ajaxloader" style="display:none;" src="assets/loaders/loader.gif"/>
						  </div>
					   </div>
					</div>
				</div>
			  <div class="modal-footer">
				 <a href="torneo.php" type="button" class="btn default" >Volver</a>
				 <button type="submit" class="btn blue" id="btn_enviar">Guardar</button>
			  </div>
			  </form>
			  <!-- END FORM-->
		  </div>
		 </div>
				  <!-- FIN MODAL LUGAR -->
				  <script type="text/javascript">
					function enviarFormTorneo(){
					  $('#ajaxloader').show();
					  $('#btn_enviar').addClass('disabled');
					  
					  //El objeto FormData nos permite crear un formulario pasandole clave/valor para poder enviarlo, este tipo de objeto ya tiene la propiedad multipart/form-data para poder subir archivos
					  var datosForm = new FormData();
					  
					  //Cargamos el nombre elegido
					  datosForm.append('nombre',$("#agregar_torneo input[name=nombretorneo]").val());
					  datosForm.append('titulo',$("#agregar_torneo input[name=titulotorneo]").val());
					  datosForm.append('id','<?php echo $_GET['id'] ?>');
					  
					  $.ajax({
						url:'actualizartorneo.php', //Url a donde la enviaremos
						type:'POST', //Metodo que usaremos
						contentType:false, //Debe estar en false para que pase el objeto sin procesar
						data:datosForm, //Le pasamos el objeto que creamos con los archivos
						processData:false, //Debe estar en false para que JQuery no procese los datos a enviar
						cache:false //Para que el formulario no guarde cache
					  }).done(function(msg){
						if(msg==0){
							$('#ajaxloader').hide();
							$('#btn_enviar').removeClass('disabled');
							$('.alert-success', $('#agregar_torneo')).show();//Muestra mensaje de lugar agregado
							alert('Torneo Modificado.');
							$('#torneo').modal('hide')
							location.href="torneo.php";
						}else{
							$('#ajaxloader').hide();
							$('#btn_enviar').removeClass('disabled');
							alert(msg); //Mostrara lo devuelto por el archivo php
						}
					  });
					}
				  </script>
               </div>
               <!-- FIN TABLA EDITABLE-->
            </div>
         </div>
         <!-- END PAGE CONTENT-->
      </div>
      <!-- BEGIN PAGE -->     
   </div>
   <!-- END CONTAINER -->
   
   <?php include("fijo/footer.php"); ?>
   
   <!-- BEGIN JAVASCRIPTS -->
   <?php include("fijo/javascripts.php"); ?>
   
   <!-- BEGIN PAGE LEVEL PLUGINS -->
   <script type="text/javascript" src="assets/plugins/data-tables/jquery.dataTables.js"></script>
   <script type="text/javascript" src="assets/plugins/data-tables/DT_bootstrap.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/jquery.validate.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-validation/dist/additional-methods.min.js"></script>
   
   <script type="text/javascript" src="assets/plugins/fuelux/js/spinner.min.js"></script>
   <script type="text/javascript" src="assets/plugins/ckeditor/ckeditor.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-fileupload/bootstrap-fileupload.js"></script>
   <script type="text/javascript" src="assets/plugins/select2/select2.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/moment.min.js"></script>
   <script type="text/javascript" src="assets/plugins/bootstrap-daterangepicker/daterangepicker.js"></script> 
   <script type="text/javascript" src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>  
   <script type="text/javascript" src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js"></script>   
   <script type="text/javascript" src="assets/plugins/jquery.input-ip-address-control-1.0.min.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.multi-select.js"></script>
   <script type="text/javascript" src="assets/plugins/jquery-multi-select/js/jquery.quicksearch.js"></script>   
   <script src="assets/plugins/jquery.pwstrength.bootstrap/src/pwstrength.js" type="text/javascript" ></script>
   <script src="assets/plugins/bootstrap-switch/static/js/bootstrap-switch.min.js" type="text/javascript" ></script>
   <script src="assets/plugins/jquery-tags-input/jquery.tagsinput.min.js" type="text/javascript" ></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/tabla-torneo.js"></script>
   <script src="assets/scripts/form-validation-torneo-editar.js"></script>  
   <script src="assets/scripts/form-components.js"></script>        
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {       
         App.init();
         TablaTorneo.init();
         FormComponents.init();
         FormValidation.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   
   
</body>
<!-- END BODY -->
</html>

<?php 
mysqli_close($conexion);
?>