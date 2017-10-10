<?php 
session_start();
$_SESSION["id"] = 1;
require_once("../../autoload.php");
$usuario = Usuario::getOneById($_SESSION["id"]);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title> S.I.E.D | Administrador </title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <link rel="icon" href="../../public/img/ico.png" type="image/x-icon" />
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

  </style>
<!-- header -->
<?php echo include_once '../../Componentes/EncabezadoAdministrador.php' ?>
<!-- fin del header -->

<!-- contenido central -->
<br>
<!-- tabla -->
<div>
  <table class="table table-bordered table-responsive"; align="center"; style="width: 100%; overflow: scroll;">
  <!-- contenido superior -->
  <!-- contenido superior -->
  <tr>
     <!-- Serial -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Cedula</b></td> 
    <!-- Placa -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Nombres</td>
    <!-- Nombre  -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Apellidos</td>
    <!-- Descripción -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Correo</b></td>
    <!-- Marca -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Telefono</b></td>
    <!-- Modelo -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>FechaInicial</b></td>
    <!-- Valor -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Imagen</b></td>
    <!-- FechaInicial -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>contraseña</b></td>
    <!-- Estado -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Estado</b></td>
    <!-- Categoria -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Tipo</td>
    <!-- Ambiente -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Centro</b></td>
    <!-- Acciones -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;" colspan="2"><b>Acciones</b></td>

  <tr>  
    <!-- cedula -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="serial" value="";></td>
    <!-- Nombres -->         
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="placa" value="";></td>
    <!-- Apellidos -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>
    <!-- Correo -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>    
    <!-- Telefono -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>
    <!-- Fecha Incial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td> 
    <!-- Imagen -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>    
    <!-- Contraseña -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>
    <!-- Estado -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>    
    <!-- Tipo -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>
    <!-- Centro -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="";></td>
    <!-- botones -->
    <td align="left">
      <a href="Usuarios.php" type="button" class="btn btn-success btn-block">Guardar</a></td>
    <td align="left">
      <a href="crearUsuario.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
  </tr>
  </table>
  <!-- fin de la tabla -->
 </div>
<!-- fin del contenido central -->
  <footer>
    <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
  </footer> 
</body>
</html>

