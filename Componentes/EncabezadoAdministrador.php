<?php 
session_start();
require_once("../../autoload.php");
$usuario = Usuario::getOneByHash($_SESSION["token"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title> S.I.E.D | Administrador </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../public/img/ico.png" type="image/x-icon" />
	<!-- estilos -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <style type="text/css">
    body {
      position: relative; 
  }
  </style>


<!-- header -->
<nav class="navbar navbar-default">
    <!-- bienvenido -->
		<p class="navbar-text pull-right">
        <img src="../../public/img/conet.png">&nbsp;Bienvenido(a) &nbsp;
      <b><?php echo $usuario->getNombres() . " " . $usuario->getApellidos(); ?></b>&nbsp;
        <a id="btn-logout" class="btn btn-default" href="#">Cerrar Sesión</a>
        &nbsp;&nbsp;&nbsp;
    </p>
  		<img src="../../public/img/small_header.png"><!--img header-->
  		<img src="../../public/img/barracolores.PNG"><!--Division de colores-->
	</div>
  <!-- fin del header -->
  
<!-- contenido superior -->
<div class="container">
   <!-- menú -->
  <nav class="navbar-default">    
    <!-- Menú-->
    <div class="navbar-header">
      <!-- boton responsivos -->
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- botones del menú -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active" ">
          <a href="../../vista/Administrador/Administrador.php">Inicio 
            <span class="sr-only">(current)</span></a></li>
        <li><a href="../Administrador/Perfil.php">Perfil</a></li>
        <li><a href="../Inventarios/Inventarios.php">Inventarios</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../../vista/Centros/crearCentro.php">Centros</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../../vista/Ambientes/crearAmbientes.php">Ambientes</a></li>              
              <li role="separator" class="divider"></li>
              <li><a href="../../vista/Elementos/crearElementos.php">Elementos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../../vista/Usuarios/crearUsuario.php">Usuarios</a></li>
            </ul>
        </li>
      </ul>
      <!-- buscador -->
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="text" class="form-control">
        </div>
        <button type="submit" class="btn btn-default">Buscar</button>
      </form>
      <!-- fin del buscador -->
      <ul class="nav navbar-nav navbar-left">
          <li><a href="#">Reportes</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Backups</a></li>
              <li role="separator" class="divider"></li>
            </ul>
          </li>
        </ul>
    </div>
  </div>
</nav>
<!-- fin del contenido superior -->
<script>

  document.querySelector('#btn-logout').addEventListener('click', (e) => {
    e.preventDefault();

    window.onbeforeunload = preguntarAntesDeSalir;

    window.location.href = "../controllers/cerrarSesion.php";

  });
 
  function preguntarAntesDeSalir () {
 
      var respuesta = confirm ( '¿Seguro que quieres salir?' );
 
      if ( respuesta ) {
        window.onunload = function () {
          return true;
        };
      } else {

        window.onbeforeunload = null;

        return false;
      }
  }
</script>
</div>
</nav>
</body>
</html>