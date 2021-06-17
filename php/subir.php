<?php
	include('conexion.php');

	$dsn = "mysql:host=fdb32.atspace.me;dbname=3869575_proyecto";

	
	if(isset($_POST['Guardar'])){
		$imagen = $_FILES['imagen']['name'];
		$nombre = $_POST['titulo'];

		if(isset($imagen) && $imagen != ""){
			$tipo = $_FILES['imagen']['type'];
			$temp = $_FILES['imagen']['tmp_name'];

			if(!(strpos($tipo, 'jpeg') || strpos($tipo, 'jpg') || strpos($tipo, 'png'))){
				$_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, gif, png, jpg';
				header('location: ../paginas/cuenta.html');
			}else{
				$query = "INSERT INTO imagenes(imagen,nombre) values('$imagen', '$nombre')";
				$resultado = mysqli_query($dsn, $query);
				if($resultado){
					$_SESSION['mensaje'] = 'Se ha subido correctamente';
					move_uploaded_file($temp, '../imagenes/fondos/' .$imagen);
				}else{
					$_SESSION['mensaje'] = 'Ocurrio un error en el servidor';
				}
			}
		}
	}
?>