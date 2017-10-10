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
  <table class="table table-bordered table-responsive"; align="center"; style="width: 98%; text-align: center;">
    <!-- contenido superior -->
  <tr>
    <!-- id -->
    <td bdcolor="#eaeaea" align="center" style="font-family: calibri"><b>Id</b></td>
     <!-- Serial -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Serial</b></td> 
    <!-- Placa -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Placa</td>
    <!-- Nombre  -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Nombre</td>
    <!-- Descripción -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Descripción</b></td>
    <!-- Marca -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Marca</b></td>
    <!-- Modelo -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Modelo</b></td>
    <!-- Valor -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Valor</b></td>
    <!-- FechaInicial -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>FechaInicial</b></td>
    <!-- Estado -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Estado</b></td>
    <!-- Categoria -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Categoria</td>
    <!-- Ambiente -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Ambiente</b></td>
    <!-- Acciones -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;" colspan="2"><b>Acciones</b></td>

  <tr>  
    <!-- id -->
    <td style=" color: #000; font-family: Calibri; font-weight: bold;">1</td>
    <!-- serial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">123456789</td>
    <!-- Placa -->         
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">A2D3D3</td>
    <!-- Nombre -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">Silla</td>
    <!-- Descripción -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"> Blanca de ruedas</td>    
    <!-- Marca -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">Rimax</td>
    <!-- Modelo -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">AG23</td> 
    <!-- Valor -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">25.000</td>    
    <!-- FechaInicial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">01/07/2012</td>
    <!-- Estado -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">Activo</td>    
    <!-- Categoria -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">Otros</td>
    <!-- Ambiente -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;">Ambiente 0</td>

    </td>
     <td align="center">
      <a href="../Elementos/editarElemento.php" type="button" class="btn btn-info btn-block">Editar</a></td>
    <td align="center">
      <a href="InactivarElemento.php" type="button" class="btn btn-danger btn-block">Inactivar</a></td>
    </td>
  </tr>
</tr>

  <!-- paginación -->
  <tr>
    <td colspan="14" align="center">
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