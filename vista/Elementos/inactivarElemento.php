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

<tr>
    <!-- id -->
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><b>Id</b></td> 
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
    <td bgcolor="#eaeaea" align="center" style="font-family: calibri;"><input class="form-control" type="text" name="serial" value="1"; disabled></td> 
    <!-- serial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input class="form-control" type="text" name="serial" value="123456789"; disabled ></td>
    <!-- Placa -->         
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="placa" value="A2D3D3"; disabled ></td>
    <!-- Nombre -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input class="form-control" type="text" name="nombre" value="Silla"; disabled ></td>
    <!-- Descripción -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input class="form-control" type="text" name="nombre" value="Blanca de ruedas"; disabled ></td>    
    <!-- Marca -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input class="form-control" type="text" name="nombre" value="Rimax"; disabled ></td>
    <!-- Modelo -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input class="form-control" type="text" name="nombre" value="AG23"; disabled ></td> 
    <!-- Valor -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="25.000"; disabled ></td>    
    <!-- FechaInicial -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="01/07/2012"; disabled ></td>
    <!-- Estado -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="Activo"; disabled ></td>    
    <!-- Categoria -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="Otros"; disabled ></td>
    <!-- Ambiente -->
    <td  style=" color: #000; font-family: Calibri; font-weight: bold;"><input  class="form-control" type="text" name="nombre" value="Ambiente 0"; disabled ></td>
     </td>
     <!-- botones -->
    <td align="center">
      <a href="../Elementos/Elementos.php" type="button" class="btn btn-info btn-block">Activar</a></td>
    <td align="center">
      <a href="../Elementos/Elementos.php" type="button" class="btn btn-danger btn-block">Cancelar</a></td>
    </td>
  </tr>
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

