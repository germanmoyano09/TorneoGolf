<?php include("fijo/controlsesion.php"); ?>
<?php require_once('fijo/ImageManipulator.php'); ?>

<?php 
//Conectamos con la DB

include("fijo/datosaccesodb.php");
$conexion = mysqli_connect($host, $usuario, $clave, $db);
if (mysqli_connect_errno()) {
	header("HTTP/1.0 403");
	echo "Fallo al intentar conectar con la base de datos: (" . mysqli_connect_errno() . ")";
	die();
}
mysqli_query($conexion, "SET NAMES 'utf8'");
?>

<?php 

if (!empty($_FILES)) {
	//Creamos el registro en la tabla para lugo obtener el id
	$sql = "INSERT INTO foto (album, nombre) VALUES (".$_GET['id'].", 'pendiente')";
	if (!mysqli_query($conexion, $sql)) {
		header("HTTP/1.0 403");
		echo "No se pudo crear el registro en la DB: (" . mysqli_connect_errno() . ")";
		die();
	}
	
	//Subimos la foto
	$ruta="../img/galeria/fotos/";
	$rutathumbs="../img/galeria/fotosthumbs/";
	$pathinfo = pathinfo($_FILES['file']['name']);//Desglosamos el nombre del archivo (en nombre y extension)
	$ext = strtolower($pathinfo['extension']);//Obtenemos la extension del archivo original (en minuscula)
	$ext = ($ext == '') ? $ext : '.' . $ext;//Si tiene extensión le agregamos un punto delante
	if($ext != ".jpeg" AND $ext != ".jpg" AND $ext != ".png" AND $ext != ".gif"){
		$sql = "DELETE FROM foto WHERE  id=".mysqli_insert_id($conexion);
		mysqli_query($conexion, $sql);
		header("HTTP/1.0 403");
		echo "El archivo subido solo puede ser jpeg, jpg, png o gif";
		die();
	}
	$nombre = $_GET['id'].'-'.mysqli_insert_id($conexion);//El nombre del archivo será el ID del lugar
	$temporal = $_FILES['file']['tmp_name']; //Obtenemos el nombre del archivo temporal
	
	//Creamos un objeto para manipular el tamaño de la imagen
	$manipulator = new ImageManipulator($temporal);
	//Tomamos los datos de la imagen
	$width  = $manipulator->getWidth(); //ancho
	$height = $manipulator->getHeight(); //alto

	
	//Si el ancho es mayor o igual que el alto
	if($width >= $height){
		//Guardamos la imágen original para mostrar en grande
		$manipulator->save($ruta . $nombre . $ext);
		//Redimencionamos en ancho manteniendo proporcion
		$ancho_final = 480;
		$alto_final = ($ancho_final / $width) * $height;
		$newImage = $manipulator->resample($ancho_final, $alto_final);
		//Preparamos el corte de (480x294) desde la mitad del alto de la imagen
		$centreY = round($alto_final / 2); //centro eje y
		$x1 = 0;
		$x2 = 480;
        $y1 = $centreY - 147; // 294 / 2
        $y2 = $centreY + 147; // 291 / 2
		$newImage = $manipulator->crop($x1, $y1, $x2, $y2);
		//Movemos el archivo redimensionado a la ruta especificada
		$manipulator->save($rutathumbs . 'thumb-' . $nombre . $ext);
	}
	//Si el alto es mayor que el ancho
	if($width < $height){
		//Guardamos la imágen original para mostrar en grande
		$manipulator->save($ruta . $nombre . $ext);
		//Redimencionamos en ancho manteniendo proporcion
		$ancho_final = 480;
		$alto_final = ($ancho_final / $width) * $height;
		$newImage = $manipulator->resample($ancho_final, $alto_final);
		//Preparamos el corte de (480x294) a un tercio del alto de la imagen
		$centreY = round($alto_final / 3); //centro eje y
		$x1 = 0;
		$x2 = 480;
        $y1 = $centreY - 147; // 294 / 2
        $y2 = $centreY + 147; // 291 / 2
		$newImage = $manipulator->crop($x1, $y1, $x2, $y2);
		//Movemos el archivo redimensionado a la ruta especificada
		$manipulator->save($rutathumbs . 'thumb-' . $nombre . $ext);
	}
	
	//Actualizamos el registro creado para colocar correctamente el nombre de la imagen subida.
	
	$sql = "UPDATE foto SET nombre='".$nombre.$ext."' WHERE  id=".mysqli_insert_id($conexion);
	if (!mysqli_query($conexion, $sql)) {
		header("HTTP/1.0 403");
		echo "No se pudo guardar el nombre de la imagen en la base de datos: (" . mysqli_connect_errno() . ")";
		die();
	}
	
}

echo $ruta . $nombre . $ext;
?> 

<?php 
mysqli_close($conexion);
?>