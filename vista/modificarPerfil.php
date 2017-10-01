<?php 
session_start();
$_SESSION["id"] = 1;
require_once("../models/Usuario.php");
require_once("../models/Estado.php");
$usuario = Usuario::getOneById($_SESSION["id"]);
$estados = Estado::getAllForPeople();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> S.I.E.D | Administrador </title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="../public/img/ico.png" type="image/x-icon" />
  <!-- estilos -->
  <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
  <script src="../public/js/jquery-3.2.1.min.js"></script>
  <script src="../public/js/bootstrap.min.js"></script>
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

    label[for="img"] {
      width: 100px;
      height: 100px;
      background-repeat: no-repeat;
      background-size: contain;
      background-image: url('../public/img/user.png');
      background-position: center;
      border-radius: 50%;
      overflow: hidden;
    }

    label[for="img"] > div {
      width: 100%;
      height: 100%;
      display: flex;
      flex-flow: row;
      justify-content: center;
      align-items: center;
      transition: background-color 0.3s;
    }

    label[for="img"]:hover > div {
      background-color: rgba(0, 0, 0, 0.4);
      cursor: pointer;
    }

    label[for="img"]:hover p {
      display: block;
    }

    label[for="img"] p {
      font-family: sans-serif;
      font-size: 16px;
      color: white;
      padding: 7.5px 10px;
      border: 1px solid white;
      border-radius: 5px;
      display: none;
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
        <li>
          <a href="../vista/Administrador.php">Inicio 
            <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="Perfil.php">Perfil</a></li>
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
          <li><a href="#">Reportes</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
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
<div class="container" style="width: 70%;">
  <div>
    <form method="post" action=""><!-- Colocar unique resource locator -->
			<table class="table table-bordered" width="100"  border="0" align="center">
        <tr>
        <!-- imagen -->
        <td colspan="2" align="center">
          <label for="img">
            <div>
            <p>Cambiar</p>
            </div>
          </label>
            <input id="img" type="file" accept="image/*" style="display: none;">
        </td>       
      </tr>

      <!-- usuario de acceso -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Usuario Acceso</b>
        </td>
        <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="text" name="usuario" value="<?php echo preg_split("/@/", $usuario->getCorreo())[0]; ?>" style="text-align: center;" disabled>            
        </td>
      </tr>

      <!-- Nombres -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Nombres:</b>
        </td>
        <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="text" name="Nombres" value="<?php echo $usuario->getNombre(); ?>" style="text-align: center;" >
        </td>
      </tr>

      <!-- Apellidos -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Apellidos:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input type="text" class="form-control" name="Apellidos" value="<?php echo $usuario->getApellido(); ?>" style="text-align: center;">
        </td>
      </tr>

    <!-- Telefono -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri;">
          <b>Telefono:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control"  type="" name="Telefono" value="<?php echo $usuario->getTelefono(); ?>" style="text-align: center;">
        </td>
      </tr>
  
  <!-- Extensión -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Extensión:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="" name="" value="<?php echo $usuario->getExtension(); ?>" 
            style="text-align: center;">
        </td>
      </tr>

  <!-- Contraseña -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Contraseña:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input  class="form-control" type="text" name="" value="<?php echo $usuario->getContrasena(); ?>" style="text-align: center;">
        </td>
      </tr>
  
  <!-- Correo -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Correo:</b>
        </td>
        <td class="form-control" type="text"  readonly="readonly" bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <?php echo $usuario->getCorreo(); ?></td>
      </tr>

  <!-- Estado -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Estado:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <select class="form-control" style="text-transform: capitalize;">
            <?php
            foreach ($estados as $estado) {
              if ($usuario->getEstado()->getId()==$estado->getId()) {
                echo '<option selected value="' . $estado->getId() . '">' . $estado->getNombre() . '</option>';
              } else {
                echo '<option value="' . $estado->getId(). '">' . $estado->getNombre(). '</option>';
              }
            }
           ?>
          </select>
        </td>
      </tr>

  <!-- Centro -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Centro:</b>
        </td>
        <td class="form-control" bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <?php echo $usuario->getCentro()->getNombre(); ?></td>
      </tr>

  <!-- Tipo Usuario -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Tipo Usuario:</b>
        </td>
        <td class="form-control" bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <?php echo $usuario->getTipo()->getNombre(); ?></td>
      </tr>
    </table>
</form>
<!-- botones finales -->
    <div class="container" align="center">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
      <a type="button" class="btn btn-success" href="../vista/Perfil.php">Guardar</a>
      <a type="button" class="btn btn-danger" href="../vista/Perfil.php">Cancelar</a>
    </div> <!-- Fin del contenido final-->
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
