<?php
include 'abstract.databoundobject.php';
include 'class.usuarios.php';




function insertuser($nombre,$apellido,$email,$telefono,$direccion,$contra,$admin,$objPDO){
	$usuarionuevo= new usuario($objPDO);

	$passwordh = str_replace("$","?",password_hash($contra, PASSWORD_DEFAULT));
	 $usuarionuevo->setemail($email)->setnombre($nombre)->setapellido($apellido)->setcontra($passwordh)->setdireccion($direccion)->settelefono($telefono)->settipo($admin)->Save();
	 return "good";
}

function login($email,$contra,$objPDO){

    $resultado=$objPDO->query("Select * from usuarios where email='".$email."'");
    if ($resultado->rowCount() > 0){
    	foreach ($resultado as $row) {
            $contrabbdd=$row['contra'];
        }
        if(password_verify($contra, str_replace("?","$",$contrabbdd) ) ) {
        	session_start();
        	$_SESSION['id']=$row['id'];
        	$_SESSION['nombre']=$row['nombre'];
        	$_SESSION['apellido']=$row['apellido'];
        	$_SESSION['tipo']=$row['tipo'];
            return "good";

        }else{
        	return "bad";
        }
    }else{
            return "bad";
    }
}

function haymas($mail,$objPDO){
    $resultado=$objPDO->query("select * from usuarios where email ='".$mail."'");
    //$resultado=$objPDO->query("select * from usuarios where email ='admin@gmail.com'");
    if($resultado->rowCount()>0){
        return "true";
    }else{
        return "false";
    }
}

function datosuser($id,$objPDO){
    $usuario= new usuario($objPDO,$id);

    return $usuario->getnombre().",".$usuario->getapellido().",".$usuario->gettelefono().",".$usuario->getdireccion().",".$usuario->getcontra().",".$usuario->getemail().",".$usuario->gettipo();
}

function cambiarcontra($id,$contra,$objPDO){
    $usuario= new usuario($objPDO,$id);

    if(password_verify($contra, str_replace("?","$",$usuario->getcontra() ) ) ) {
        return "bad";
    }else{
        $usuario->setcontra(str_replace("$","?",password_hash($contra, PASSWORD_DEFAULT)))->Save();
        return "good";
    }
}
function cambiardatos($id,$direccion,$telefono,$objPDO){
    $usuario= new usuario($objPDO,$id);
    $usuario->settelefono($telefono)->setdireccion($direccion)->Save();
    return "good";
}
function eliminarcuenta($id,$objPDO){
    $usuario=new usuario($objPDO,$id);
    $usuario->MarkForDeletion();
    unset($usuario);
    return "good";
}

function selectu($objPDO){
    $html="";
    $resultado=$objPDO->query("select * from usuarios");
    if ($resultado->rowCount() > 0){
    	foreach ($resultado as $row) {
            $html.="<tr style='border-bottom:1px solid black'>>";
                $html.="<td>".$row['email']."</td>";
                $html.="<td>".$row['nombre']."</td>";
                $html.="<td>".$row['apellido']."</td>";
                $html.="<td>".$row['direccion']."</td>";
                $html.="<td>".$row['telefono']."</td>";
                if($row['tipo']==1){
                    $html.="<td>Administrador</td>";
                }else{
                    $html.="<td>Usuario</td>";
                }
                $html.="<td  class='text-center d-flex justify-content-center'><a type='button'  data-toggle='modal' data-target='#eliminarcuenta' class='eliminarc btn btn-danger' id='eliminarc".$row['id']."'><i class='fas fa-times '></i></a></td>";
            $html.="</tr>";
        }
        return $html;
    }else{
        return "bad";
    }
}

function order($sort,$by, $objPDO){
    $query="select * from usuarios order by ".$sort." ".$by;
    $html="";
    $resultado=$objPDO->query($query);
    if ($resultado->rowCount() > 0){
    	foreach ($resultado as $row) {
            $html.="<tr style='border-bottom:1px solid black'>>";
                $html.="<td>".$row['email']."</td>";
                $html.="<td>".$row['nombre']."</td>";
                $html.="<td>".$row['apellido']."</td>";
                $html.="<td>".$row['direccion']."</td>";
                $html.="<td>".$row['telefono']."</td>";
                if($row['tipo']==1){
                    $html.="<td>Administrador</td>";
                }else{
                    $html.="<td>Usuario</td>";
                }
                $html.="<td  class='text-center d-flex justify-content-center'><a type='button'  data-toggle='modal' data-target='#eliminarcuenta' class='eliminarc btn btn-danger' id='eliminarc".$row['id']."'><i class='fas fa-times '></i></a></td>";
            $html.="</tr>";
        }
        return $html;
    }else{
        return "bad";
    }
}

