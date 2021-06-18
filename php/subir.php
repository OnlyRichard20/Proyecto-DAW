<?php
	include('conexion2.php');
       
        
        $usuario = $_SESSION['id'];
        
        echo $usuario;
        
       
	
	if(isset($_POST['Guardar'])){
                
		$imagen = $_FILES['imagen']['name'];
		$nombre = $_POST['titulo'];


		if(isset($imagen) && $imagen != ""){
			$tipo = $_FILES['imagen']['type'];
			$temp = $_FILES['imagen']['tmp_name'];

			if(!(strpos($tipo, 'jpeg') || strpos($tipo, 'jpg') || strpos($tipo, 'png'))){
				$_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, png, jpg';
				header('location: cuentaPrincipal.php');
				die();
			}else{
				$query = "INSERT INTO imagenes(imagen,nombre) values('$imagen', '$nombre')";
				$resultado = mysqli_query($conn, $query);
				if($resultado){
					move_uploaded_file($temp, '../imagenes/fotos/' .$imagen);
					$_SESSION['mensaje'] = 'Se ha subido correctamente';
					header("Location: cuentaPrincipal.php");
					die();
                                       
                                       
				}else{
					$_SESSION['mensaje'] = 'Ocurrio un error en el servidor';
				}
			}
		}
	}
?>