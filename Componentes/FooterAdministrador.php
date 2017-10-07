<?php 
session_start();
require_once("../autoload.php");
$usuario = Usuario::getOneByHash($_SESSION["token"]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="UTF-8">
	<title> S.I.E.D | Administrador </title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="icon" href="../public/img/ico.png" type="image/x-icon" />
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
  #section41 {padding-top:;height:100px;margin-top:10px;font-size: 12px;
    margin-bottom: auto;color: #fff; background-color:#ff9933; text-align: center;}

  </style>

   <footer>
    <div id="section41" class="container-fluid">
      <br>.::Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500
      <br>Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270
      <br>Horario de atención: lunes a viernes de 8:00 am a 5:30 pm
      <br>Correo electrónico para notificaciones judiciales: notificacionesjudiciales@sena.edu.co
      <br>Todos los derechos reservados © 2017 ::.
    </div>
  </footer>
  <script type="text/javascript">
  	function disableselect(e){
      return false
      }

    function reEnable(){
    return true
      }

    document.onselectstart=new Function ("return false")
    document.oncontextmenu=new Function ("return false")

    if (window.sidebar){
    document.onmousedown=disableselect
    document.onclick=reEnable
    }
    </script>
  
</body>
</html>