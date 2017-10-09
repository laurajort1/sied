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
  <table class="table table-bordered table-responsive"; align="center"; style="width: 200%; overflow: scroll;">

    <!-- contenido superior -->
  <tr>
     <!-- Serial -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Serial</b></td>   
    <td  style=" width: 10%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="serial" value="";></td>
  
    <!-- Placa -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Placa</td>       
    <td style="width: 10%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="placa" value="";></td>

    <!-- Nombre -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Nombre</td>
      <td style="width: 50%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="";></td>
   </tr>
  
   <tr>
    <!-- Valor -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Valor</b></td>
    <td  style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="valor" value="";></td>
    
    <!-- FechaInicial -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>FechaInicial</b></td>
    <td style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="fecha" value="";></td>

    <!-- Estado -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Estado</b></td>
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

    </tr>
   <tr>
    <!-- Categoria -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Categoria</td>
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
    <!-- Ambiente -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Ambiente</b></td>
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
    
      <td align="left">
        <a href="Elementos.php" type="button" class="btn btn-success btn-block">Guardar</a></td>
      <td align="left">
        <a href="crearElementos.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
    </td>
</tr>

  <!-- contenido texto-->
  <tr>

  <!-- paginación -->
  <tr>
    <td colspan="13" align="center">
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

