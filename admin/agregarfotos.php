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

<?php $titulo="Album"; ?>

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
                  Agregar Fotos
               </h3>
               <ul class="page-breadcrumb breadcrumb">
                  <li>
                     <i class="icon-home"></i>
                     <a href="index.php">Inicio</a> 
                     <i class="icon-angle-right"></i>
                  </li>
                  <li>
                     <a href="album.php">Albums</a>
                     <i class="icon-angle-right"></i>
			      </li>
				  <li>
                     <a href="#">Agregar Fotos</a>
                     <i class="icon-angle-right"></i>				  
               </ul>
               <!-- END PAGE TITLE & BREADCRUMB-->
            </div>
         </div>
         <!-- END PAGE HEADER-->
         <!-- BEGIN PAGE CONTENT-->
         <div class="row">
            <div class="col-md-12">
               <div class="portlet box red">
                  <div class="portlet-title">
                     <div class="caption"><i class="icon-picture"></i>Agregar Fotos</div>
                  </div>
                  <div class="portlet-body">
                    <!-- BEGIN FORM-->
						<form action="uploadfotos.php?id=<?php echo $_GET['id']; ?>" class="dropzone" id="my-dropzone"></form>
					<!-- END FORM-->
				  </div>
				</div>
			   
				<div class="modal-footer">
					<a href="album.php" type="button" class="btn default" >Volver</a>
				</div>
			   
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
   <script src="assets/plugins/dropzone/dropzone.js"></script>
   <!-- END PAGE LEVEL PLUGINS -->
   <!-- BEGIN PAGE LEVEL SCRIPTS -->
   <script src="assets/scripts/app.js"></script>
   <script src="assets/scripts/form-dropzone.js"></script>
   
   <!-- END PAGE LEVEL SCRIPTS -->
   <script>
      jQuery(document).ready(function() {       
         App.init();
		 FormDropzone.init();
      });
   </script>
   <!-- END JAVASCRIPTS -->
   
   
</body>
<!-- END BODY -->
</html>

<?php 
mysqli_close($conexion);
?>