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
  <!-- contenido superior -->
  <tr>
     <!-- Serial -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Serial</b></td>   
    <td  style=" width: 10%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="serial" value="123456789" disabled></td>
  
    <!-- Placa -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Placa</td>       
    <td style="width: 10%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="serial" value="A2D3D3" disabled></td>

    <!-- Nombre -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri;"><b>Nombre</td>
      <td style="width: 50%; color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="nombre" value="Silla"; disabled></td>
   </tr>
  <tr>
<tr>
    <!-- Descripción -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; "><b>Descripción</b></td>
    <td style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="descripcion" value="blanca de ruedas" disabled;></td>
    
    <!-- Marca -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; "><b>Marca</b></td>
    <td  style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="marca" value="rimax"; disabled ></td>

   <!-- Modelo -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Modelo</b></td>
    <td style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="modelo" value="AG23"; disabled></td>
  </tr>
   <tr>
    <!-- Valor -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>Valor</b></td>
    <td  style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="text" name="modelo" value="25.000"; disabled></td>
    
    <!-- FechaInicial -->
    <td bgcolor="#eaeaea" align="left" style="font-family: calibri; width: 20%;"><b>FechaInicial</b></td>
    <td style="color: #000; font-family: Calibri; font-weight: bold;">
      <input  class="form-control" type="date" name="modelo"; disabled></td>

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
    </td>

    <!-- botones -->
    <td align="center">
      <a href="../Elementos/Elementos.php" type="button" class="btn btn-info btn-block">Activar</a></td>
    <td align="center">
      <a href="../Elementos/Elementos.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
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

