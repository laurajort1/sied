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
<div class="container">
  <table class="table table-bordered table-responsive"; align="center"; style="width: 100%; border-radius: :2px  #000;text-align: center; border: 0px;">
    <!-- contenido superior -->
  <tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>Nit</b></td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 30%;"><b>Nombre</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>Regional</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>Municipios</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;" colspan="2";><b>Acciones</b></td>
  </tr>
  <tr>
    <!-- contenido -->
    <td><?php echo $usuario->getCentro()->getId(); ?></td>
    <td><?php echo $usuario->getCentro()->getNombre(); ?></td>
    <td>Regional Santander</td>
    <td>Piedecuesta</td>
    <td align="center">
      <a href="../Centros/editarCentros.php" type="button" class="btn btn-info btn-block">Editar</a></td>
    <td align="center">
      <a href="InactivarCentro.php" type="button" class="btn btn-danger btn-block">Inactivar</a></td>
    </td>
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