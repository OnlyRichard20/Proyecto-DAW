<?php
	include('conexion2.php');
        
       
	
	if(isset($_POST['Guardar2'])){
                
		$plano = $_FILES['plano']['name'];
		$titulo = $_POST['titulo'];


		if(isset($plano) && $plano != ""){
			$tipo = $_FILES['plano']['type'];
			$temp = $_FILES['plano']['tmp_name'];

			if(!(strpos($tipo, 'jpeg') || strpos($tipo, 'jpg') || strpos($tipo, 'png'))){
				$_SESSION['mensaje'] = 'Solo se permiten archivos jpeg, png, jpg';
				header('location: cuentaPrincipal.php');
				die();
			}else{
				$query = "INSERT INTO planos(plano,titulo) values('$plano', '$titulo')";
				$resultado2 = mysqli_query($conn, $query);
				if($resultado2){
					move_uploaded_file($temp, '../imagenes/planos/' .$plano);
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