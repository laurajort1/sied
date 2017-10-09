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
  <table class="table table-bordered" style="width: 40%;" align="center">

    <!-- contenido superior -->
  <tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;">
      <b>CEDULA</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="cedula" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 30%;">
      <b>NOMBRES</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="nombres" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;">
      <b>APELLIDOS</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="apellidos" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;">
      <b>CORREO</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="corre" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;">
      <b>TELEFONO</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="date" name="telefono" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>FECHA</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>IMAGEN</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="file" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>CONTRASEÑA</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="password" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>ESTADO</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>TIPO</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 10%;">
      <b>CENTRO</b>
    </td>
    <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
        <input class="form-control" type="text" name="" value="" style="text-align: center;">            
    </td>
  </tr>
    <td colspan="2";></td>
  </tr>
</tr>       <!-- botones -->  
  <div>
      <td align="left">
        <a href="Elementos.php" type="button" class="btn btn-success btn-block">Guardar</a></td>
      <td align="left">
        <a href="crearElementos.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
    </td>
</div>
</table>
  <!-- fin de la tabla -->
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

