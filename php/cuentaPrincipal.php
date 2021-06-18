<?php
  include('conexion2.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn, $query);
  
  $sql = "select * from planos";
  $resultado2 = mysqli_query($conn, $sql);

?>


<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">


    <!--Redes Sociales Iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Icono del menú responsive-->
    <link rel="stylesheet" type="text/css" href="../iconos/fonts.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous"/>

    <title>Página de fotos con la galeria de fotos que hay en la web</title>

    <!--CSS-->
    <link href="../css/proyectofinal.css" rel="stylesheet" type="text/css">
    <link href="../css/cuenta.css" rel="stylesheet" type="text/css">

    <!--Tipo de letra (Verlag)-->
    <link href="http://fonts.cdnfonts.com/css/verlag" rel="stylesheet">

  </head>
  <body>
    <!--Primer container fluid-->
      <!--Cabecera-->
      <div class="fluid1 container-fluid">
        <div class="primer container">
          <!--Primera fila-->
          <div class="primerFila1 row">
            <!--Iconos-->
            <div class="iconos col-4 col-sm-4 col-md-4">
              <ul class="social-icons">
                <!--Icono de Facebook-->
                <li>
                  <a target="_blank" href="https://es-es.facebook.com/">
                    <p class="facebook">Facebook<i class="fa fa-facebook-square" aria-hidden="true"></i></p>
                  </a>
                </li>
                <!--Icono de Instagram-->
                <li>
                  <a target="_blank" href="https://www.instagram.com/">
                    <p class="instagram">Instagram<i class="fa fa-instagram" aria-hidden="true"></i></p>
                  </a>
                </li>
                <!--Icono de Twitter-->
                <li>
                  <a target="_blank" href="https://www.twitter.com/">
                    <p class="twitter">Twitter<i class="fa fa-twitter-square" aria-hidden="true"></i></p>
                  </a>
                </li>
              </ul>
            </div>
            <!--Favoritos, Sesión y Buscador-->
            <div class="opciones col-8 col-sm-8 col-md-8">
              <ul class="opciones-icons">
                <li>
                  <!--Buscador-->
                  <div class="input-group rounded buscador">
                    <input type="search" class="form-control rounded" placeholder="Buscar..." aria-label="Search"
                    title="buscador" />
                    <button type="button" class="btn btn-primary botonBuscar">
                      <i class="fa fa-search"></i>
                    </button>
                  </div>
                </li>
                <!--Sesión-->
                <li>
                  <p class="usuario">Usuario<a href="#"><i class="fa fa-user"></i></a></p>
                </li>
                <!--Favoritos-->
                <li>
                  <p class="favoritos">Favoritos<i class="fa fa-heart"></i></p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>


    <!--Segundo container fluid-->
      <div class="fluid2 container-fluid">

        <!--Segundo container normal-->
        <div class="segundo container">

          <!--Segunda fila-->
          <div class="segundoFila1 row">

            <!--Logo-->
            <div class="logo col-2 col-sm-2 col-md-2">
              <img src="../imagenes/logos/logoInicio.png" longdesc="Logo de la web">
            </div>

            <!--Menú-->
            <div class="menuSuperior col-10 col-sm-10 col-md-10">
              <header>
                <div class="menu_bar">
                  <a href="#" class="bt-menu"><span class="icon-list2"></span>Menú</a>
                </div>
                <nav>
                  <ul>
                    <li><a href="../index.html"><span class="icon-home"></span>INICIO</a></li>
                    <li class="submenu">
                      <a href="#"><span class="icon-rocket"></span>PROYECTOS<span class="flechita icon-circle-down"></span></a>
                      <ul class="children">
                        <li><a href="../paginas/fotos.php">FOTOS</a></li>
                        <li><a href="../paginas/planos.php">PLANOS</a></li>
                        <li><a href="visor3d.html">VISOR 3D</a></li>
                      </ul>
                    </li>
                    <li><a href="../paginas/profesionales.php"><span class="icon-profile"></span>PROFESIONALES</a></li>
                    <li><a href="index.html"><span class="icon-address-book"></span>CONTACTO</a></li>
                  </ul>
                </nav>
              </header>
            </div>
          </div>
        </div>

        <!--Cuenta container normal-->

        <div class="cuenta container">
          <div class="filaCuenta row">
            <div class="columnaCuenta col-12 col-sm-12 col-md-12 pt-4">
              <h1 class="text-center mt-4">Administración de cuenta</h1>
              <div class="row justify-content-center p-3">
                <div class="mt-3 col-md-5 col-12 mr-5 paddinginput row pl-3"><div for="" class="col-5">Nombre: </div><div class="col-5" id="nombre"></div></div>
                <div class="mt-3 col-md-5 col-12 mr-5 paddinginput row pl-3"><div for="" class="col-5">Apellido: </div><div class="col-5" id="apellido"></div></div>
                <div class="mt-3 col-md-5 col-12 mr-5 paddinginput row pl-3"><div for="" class="col-5">Teléfono: </div><input class="col-5" type="text" id="tel"> <div id="errorTelefono"></div> </div>
                <div class="mt-3 col-md-5 col-12 mr-5 paddinginput row pl-3"><div for="" class="col-5">Correo Electrónico:</div><div class="col-5" id="mail"></div></div>
                <div class="mt-3 col-md-5 col-12 mr-5 paddinginput row pl-3"><div for="" class="col-5">Dirección: </div><input class="col-5" type="text" id="direc"> <div id="errorDireccion"></div></div>
                <div class="mt-3 col-5 mr-5 cambiarcontra"><a type="button" data-bs-toggle="modal" data-bs-target="#cambiarContra"><input type="button" value="Cambiar Contraseña" class="botonCambiarContrasenya " id="nuevaContra"></a></div>
              </div>
              <div class="row pt-5 p-3 flex-md-row flex-column-reverse">
                <div class="col-md-6 col-12 justify-content-center d-flex mt-md-0 mt-4">
                  <a type="button"  data-bs-toggle="modal" data-bs-target="#eliminarcuenta"><input class="btn btn-danger" type="button" value="Eliminar Cuenta" class="botoneliminarcuenta " id="btneliminarcuenta"></a>
                </div>
                <div class="col-md-6 col-12  d-flex justify-content-center ">
                  <button class="btn btn-primary" id="editar">Editar</button>
                </div>
                <div class="col-12 d-none d-flex justify-content-end" id="mensajeeditar"></div>
              </div>

              <h1 class="text-center pt-4 mt-4">Fotos</h1>
              <div class="subir container pt-5 mt-3 mb-4 pb-3">
                <div class="subida row">
                  <div class="col-8 col-sm-8 col-md-8" style="margin-left: auto; margin-right: auto;">
                    <h2 class="text-primary mb-4">Subir imagen</h2>
                    <form class="formularioSubir" action="subir.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="mb-2" for="my-input" style="display: block;">Selecciona una Imagen</label>
                        <input class="mb-2" id="my-input" type="file" name="imagen">
                      </div>
                      <div class="form-group">
                        <label class="mb-2 mr-2" for="my-input">Titulo de la Imagen</label>
                        <input class="mb-2" id="my-input" class="form-control" type="text" name="titulo">
                      </div>
                       <?php if(isset($_SESSION['mensaje'])){ ?>
                      
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong><?php echo $_SESSION['mensaje']; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                       
                       <?php session_unset();}?>
                      
                      <input type="submit" value="Guardar" name="Guardar">
                    </form>
                  </div>
                  
                  <div class="col-10 col-sm-10 col-md-10" style="margin-left: auto; margin-right: auto; height: 100%; ">
                    <h1 class="text-primary text-center">Galeria de Imagenes</h1>
                    <hr>
                    <div class="card-columns col-12 col-sm-12 col-md-12" style="height: 100%;">
                      <?php foreach ($resultado as $row) { ?>
                      <div class="card col-3 col-sm-3 col-md-3" style="display: block; float: left;  border: 1px solid black; height:100%; margin-left: auto; margin-right: auto;">
                        <img src="../imagenes/fotos/<?php echo $row['imagen']; ?>" class="card-img-top" alt="#">
                        <div class="card-body text-center">
                          <h5 class="card-title" style="font-size: 12px; font-family:'Verdana';"><strong><?php echo $row['nombre']; ?></strong></h5>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
              
              <h1 class="text-center pt-4 mt-4">Planos</h1>
              <div class="subir container pt-5 mt-3 mb-4 pb-3">
                <div class="subida row">
                  <div class="col-8 col-sm-8 col-md-8" style="margin-left: auto; margin-right: auto;">
                    <h2 class="text-primary mb-4">Subir Plano</h2>
                    <form class="formularioSubir" action="subir2.php" method="post" enctype="multipart/form-data">
                      <div class="form-group">
                        <label class="mb-2" for="my-input" style="display: block;">Selecciona un Plano</label>
                        <input class="mb-2" id="my-input" type="file" name="plano">
                      </div>
                      <div class="form-group">
                        <label class="mb-2 mr-2" for="my-input">Titulo del Plano</label>
                        <input class="mb-2" id="my-input" class="form-control" type="text" name="titulo">
                      </div>
                       <?php if(isset($_SESSION['mensaje'])){ ?>
                      
                      <div class="alert alert-warning alert-dismissible fade show" role="alert">
                          <strong><?php echo $_SESSION['mensaje']; ?></strong>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                       </div>
                       
                       <?php session_unset();}?>
                      
                      <input type="submit" value="Guardar" name="Guardar2">
                    </form>
                  </div>
                  
                  <div class="col-10 col-sm-10 col-md-10" style="margin-left: auto; margin-right: auto; height: 100%; ">
                    <h1 class="text-primary text-center">Galeria de Planos</h1>
                    <hr>
                    <div class="card-columns col-12 col-sm-12 col-md-12" style="height: 100%;">
                      <?php foreach ($resultado2 as $row) { ?>
                      <div class="card col-3 col-sm-3 col-md-3" style="display: block; float: left;  border: 1px solid black; height:100%; margin-left: auto; margin-right: auto;">
                        <img src="../imagenes/planos/<?php echo $row['plano']; ?>" class="card-img-top" alt="#">
                        <div class="card-body text-center">
                          <h5 class="card-title" style="font-size: 12px; font-family:'Verdana';"><strong><?php echo $row['titulo']; ?></strong></h5>
                        </div>
                      </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
        </div>
       
      </div>


      <!--Cambiar Contraseña -->
        <div class="modal fade" id="cambiarContra" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="cerrar">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <div class="form-group">
                    <label>Nueva Contraseña</label>
                    <input type="password" class="form-control" placeholder="Nueva Contraseña" id="contra">
                    <p class="errorForm mb-0" id="errorContra" class="d-flex"></p>
                    <label class="pt-2">Vuelve a introducir la contraseña</label>
                    <input type="password" class="form-control" placeholder="Vuelve a introducir la contraseña" id="contraUpdateRep">
                    <div id="errorUpdateContra" class="d-flex" style="color:red;"></div>
                  </div>
                </div>
                <div class="modal-footer">
                  <div class="d-none " id="errorcontraigual"><i class='fa fa-close text-danger p-0 mt-1 col-1'></i><p class='text-dark col-11'>La contraseña debe contener una minuscula, una mayuscula y un numero, debe ser de una longitud de entre 6 y 10 caracteres</p></div>

                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-primary" id="saveNuevaContra">Guardar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        

        <!-- Eliminar Cuenta -->
        <div class="modal fade" id="eliminarcuenta" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel2">Eliminar Cuenta</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close" id="cerrar2">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Al eliminar esta cuenta no podras volverla a recuperar,<br>
                  Estas seguro de que quieres eliminarla?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                  <button type="button" class="btn btn-danger" id="eliminarcuenta">Eliminar</button>
                </div>
              </form>
            </div>
          </div>
        </div>


      <!-------------Footer------------>
      <!--Cuarto container fluid-->
      <div class="fluid4 container-fluid">

        <!--Quinto container normal-->
        <div class="quinto container">

          <!--Cuarta Fila-->
          <div class="cuartaFila1 row">
            <div class="footer col-12 col-sm-12 col-md-12">
              <h1>WEB DISEÑADA POR: RICARDO PAREDES RAMOS</h1>
            </div>
          </div>
        </div>
      </div>
   


      <!-------------------------JS Archivos--------------------->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    
    <script src="../js/main.js"></script>
    <script src="../js/header.js"></script>
    <script src="../js/cuenta.js"></script>

  </body>
</html>