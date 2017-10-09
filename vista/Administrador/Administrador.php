<?php 
session_start();
require_once("../../autoload.php");
// include_once '../Componentes/EncabezadoAdministrador.php';
// include_once '../Componentes/FooterAdministrador.php';
$usuario = Usuario::getOneByHash($_SESSION["token"]);
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
  <style type="text/css">
    body {
      position: relative; 
  }
  </style>
  
<?php echo include_once '../../Componentes/EncabezadoAdministrador.php' ?>
<!-- contenido central -->
    <div class="container">
      <!-- <div class="jumbotron"> -->
        <div class="container">
          <img src="../../public/img/mantenimiento_invitados_15al17sep.png" style="width: 90%">
        </div>
      <!-- </div> -->  
    </div>
<!-- fin del contenido central -->
&nbsp;

 <footer>
   <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
 </footer>
</body>
</html>
