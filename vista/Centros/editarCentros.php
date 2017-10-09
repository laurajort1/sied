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
<div class="container">
  <table class="table table-bordered table-responsive"; align="center"; style="width: 100%; border-radius: 2px #000;text-align: center; border: 0px;">

    <!-- contenido superior -->
  <tr>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>nit</b></td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 30%;"><b>Nombre</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>Regional</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;"><b>Municipio</td>
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri; width: 20%;" colspan="2";><b>Acciones</b></td>
  </tr>

  <!-- contenido texto-->
  <tr>
    <!-- nit -->
    <td  style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nit" value="<?php echo $usuario->getCentro()->getId(); ?>";></td>

    <!-- nombre -->
    <td style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nit" value="<?php echo $usuario->getCentro()->getNombre(); ?>";></td>
    
    <!-- regional -->
    <td align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
        <select class="form-control" style="text-transform: capitalize;">
          <?php
          foreach ($municipio as $municipio) {
            if ($centros->getNombre()->getId()==$estado->getId()) {
              echo '<option selected value="' . $estado->getId() . '">' . $estado->getNombre() . '</option>';
            } else {
              echo '<option value="' . $estado->getId(). '">' . $estado->getNombre(). '</option>';
            }
          }
         ?>
        </select>
      </td>

    <!-- Municipios -->
    <td align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
        <select class="form-control" style="text-transform: capitalize;">
          <?php
          foreach ($municipio as $municipio) {
            if ($centros->getNombre()->getId()==$estado->getId()) {
              echo '<option selected value="' . $estado->getId() . '">' . $estado->getNombre() . '</option>';
            } else {
              echo '<option value="' . $estado->getId(). '">' . $estado->getNombre(). '</option>';
            }
          }
         ?>
        </select>
      </td>

    <!-- botones -->
    <td align="center">
      <a href="../Centros/Centros.php" type="button" class="btn btn-info btn-block">Guardar</a></td>
    <td align="center">
      <a href="../Centros/Centros.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
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

