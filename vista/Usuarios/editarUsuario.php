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
<!-- boton de Agregar Nuevo -->

<br>
<!-- tabla -->
<div>
  <table class="table table-bordered table-responsive"; align="center"; style="width: 100%; overflow: scroll;">

  <tr>
    <!-- id -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Cedula
    </b></td> 
     <!-- Serial -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Nombres</b></td> 
    <!-- Placa -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Apellidos</td>
    <!-- Nombre  -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Correo</td>
    <!-- Descripción -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Telefono</b></td>
    <!-- Marca -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Fecha</b></td>
    <!-- Modelo -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Imagen</b></td>
    <!-- Valor -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Contraseña</b></td>
    <!-- Estado -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Estado</b></td>
    <!-- Categoria -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Tipo</td>
    <!-- Ambiente -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Centro</b></td>
    <!-- Acciones -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;" colspan="2"><b>Acciones</b></td>

  <tr>  
    <!-- id -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;">
      <input  class="form-control" type="text" name="serial" value="1098724235";></td> 
    <!-- serial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="serial" value="Felipe Nickolas";></td>
    <!-- Placa -->         
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="placa" value="fgarcia243@misena.edu.co";></td>
    <!-- Nombre -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="3166229030";></td>
    <!-- Descripción -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="03/06/1992";></td>    
    <!-- Marca -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="img.png";></td>
    <!-- Modelo -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="12345";></td> 
    <!-- Valor -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="Activo";></td>    
    <!-- FechaInicial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="Cuentadante";></td>
    <!-- Estado -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="Centro de Atención al sector Agropecuario";></td>  
    <!-- Ambiente -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="Ambiente 0";></td>
     <td align="center">
      <a href="../Usuarios/Usuarios.php" type="button" class="btn btn-success btn-block">Guardar</a></td>
    <td align="center">
      <a href="../Usuarios/Usuarios.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
    </td>
  </tr>
</tr>

   
  
  <!-- paginación -->
  <tr>
    <td colspan="7" align="center">
      <div class="pagination-wrap">
        <ul class="pagination">
          <li><a style='color:red;'>1</a></li></ul>
      </div>
    </td>
  </tr>
  </table>
 </div>

          
        </div>
      </div>
    </div>
<!-- fin del contenido central -->
  <footer>
    <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
  </footer> 
</body>
</html>