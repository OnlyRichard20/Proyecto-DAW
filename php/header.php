<?php
session_start();
	if (isset($_SESSION['id'])) {
		$html= "<a class='nav-link dropbtn especial' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
					".$_SESSION['nombre']." ".$_SESSION['apellido']."
				</a>
				<div class='dropdown-content' aria-labelledby='navbarDropdown'>
					<a class='dropdown-item' href='paginas/cuenta.html'>Mi cuenta</a>";
		if($_SESSION['tipo']==1){
			$html.= "
				<a class='dropdown-item' href='administracion.html'>Administracion de pagina</a>
			";
		}			
					
	  	$html.="	<a class='dropdown-item' href='php/logout.php'>Cerrar Sesion</a>
	  			</div>
			  ";
		echo $html;
	}else{
		echo "<p class='usuario'>Usuario<a href='paginas/login.html'><i class='fa fa-user'></i></a></p>";
	}
?>