<?php 
session_start();
$_SESSION["id"] = 1;
require_once("../models/Usuario.php");
$usuario = Usuario::getOneById($_SESSION["id"]);

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
  <style>
    body {
      position: relative; 
    }

    #section41 {padding-top:;height:100px;margin-top:10px;font-size: 12px;
    margin-bottom: auto;color: #fff; background-color:#ff9933; text-align: center;}

    .prin{
    width: 900px;
    max-width:400px;
    max-width:100%;
   
    }
 
  </style>

<!-- header -->
<nav class="navbar navbar-default">
    <!-- bienvenido -->
    <p class="navbar-text pull-right">
      <a href="">
        <img src="../public/img/conet.png"></a>&nbsp;Bienvenido(a) &nbsp;
      <b><?php echo $usuario->getNombre() . " " . $usuario->getApellido(); ?></b>
        <button>Cerrar Sesión</button>
        &nbsp;&nbsp;&nbsp;
    </p>
      <img src="../public/img/small_header.png"><!--img header-->
      <img src="../public/img/barracolores.PNG"><!--Division de colores-->
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
          <a href="../vista/Administrador.php">Inicio 
            <span class="sr-only">(current)</span></a></li>
        <li><a href="Perfil.php">Perfil</a></li>
        <li><a href="../vista/Inventarios.php">Inventarios</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Registros<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="../vista/Centros.php">Centros</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../vista/Ambientes.php">Ambientes</a></li>              
              <li role="separator" class="divider"></li>
              <li><a href="../vista/Elementos.php">Elementos</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="../vista/Usuarios.php">Usuarios</a></li>
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
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración
            <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- fin del contenido superior -->

<!-- contenido central -->
    <div class="container">
      <div class="jumbotron">
        <div class="container">
          <img src="../public/img/mantenimiento_invitados_15al17sep.png" style="align-content: center;">
        </div>
      </div>
    </div>
<!-- fin del contenido central -->

  <footer>
    <div id="section41" class="container-fluid">
      <br>.::Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500
      <br>Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270
      <br>Horario de atención: lunes a viernes de 8:00 am a 5:30 pm
      <br>Correo electrónico para notificaciones judiciales: notificacionesjudiciales@sena.edu.co
      <br>Todos los derechos reservados © 2017 ::.
    </div>
  </footer> 
</body>
</html>
