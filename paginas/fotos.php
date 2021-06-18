<?php
  include('../php/conexion2.php');
  $query = "select * from imagenes";
  $resultado = mysqli_query($conn, $query);

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Página de fotos con la galeria de fotos que hay en la web</title>

    <!--CSS-->
    <link href="../css/proyectofinal.css" rel="stylesheet" type="text/css">
    <link href="../css/fotos.css" rel="stylesheet" type="text/css">

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
                  <p class="usuario">Usuario<a href="login.html"><i class="fa fa-user"></i></a></p>
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
                        <li><a href="#">FOTOS</a></li>
                        <li><a href="planos.php">PLANOS</a></li>
                        <li><a href="visor3d.html">VISOR 3D</a></li>
                      </ul>
                    </li>
                    <li><a href="profesionales.php"><span class="icon-profile"></span>PROFESIONALES</a></li>
                    <li><a href="index.html"><span class="icon-address-book"></span>CONTACTO</a></li>
                  </ul>
                </nav>
              </header>
            </div>
          </div>
        </div>
      </div>

      <!--Fotos Container-->
      <div class="fotos container-fluid">
              <div class="foto container">
                <div class="filaFotos row">
                  <?php foreach ($resultado as $row) { ?>
                  <div class="columnaFotos col-4 col-sm-4 col-md-4">
                    <img src="../imagenes/fotos/<?php echo $row['imagen']; ?>" alt="#">
                    <p class="titulo"><strong><?php echo $row['nombre']; ?></strong></p>
                  </div>
                  <?php }?>
                  
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
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/header.js"></script>
  </body>
</html>