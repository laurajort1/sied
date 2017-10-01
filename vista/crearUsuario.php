<!DOCTYPE html>
<html lang="en">
<head>
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
<style>
body {
position: relative; 
}
#section41 {padding-top:;height:100px;margin-top:10px;font-size: 12px;
margin-bottom: auto;color: #fff; background-color:#ff9933; text-align: center;}

</style>
<nav class="navbar navbar-default">
<div class="navbar-header  navbar-right ">  

  <p class="navbar-text pull-right">
    <a href=""><img src="../public/img/conet.png"></a>
    &nbsp;Bienvenido(a) &nbsp;<b>Laura Julieth Ortegon</b>
    <button>Cerrar Sesión</button>&nbsp;&nbsp;&nbsp;
  </p>
  <img src="../public/img/small_header.png">
  <img src="../public/img/barracolores.PNG">
</div>
<div class="container">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>            
    </button>
    <a class="navbar-brand" href="#"></a>
  </div>

  <!-- menu -->     
  <div class="collapse navbar-collapse" id="myNavbar">
    &nbsp;
    <ul class="nav navbar-nav">
      <li class="container-fluid">
        <a href="../vista/Administrador.php">Inicio
          <span class="sr-only">(current)</span></a></li>
          <li>
            <a href="../vista/perfil.php">Perfil</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> Registros 
                <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="../vista/Centros.php">Centros</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../vista/Usuarios.php">Usuarios</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../vistas/Ambientes.php">Ambientes</a></li>
                  <li role="separator" class="divider"></li>
                  <li><a href="../vistas/Elementos.php">Elementos</a></li>
                </ul>
              </li>
              <li>
                <a href="#">Inventarios</a></li>
                <li>
                  <a href="#">Reportes</a></li>
                </ul>
                <!-- buscar -->
                <form class="navbar-form navbar-right">
                  <div class="form-group">
                    <input type="text" class="form-control">
                  </div>
                  <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                 <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Configuración <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="#">Backup</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="jumbotron">
              <div class="container">
                <div class="clearfix"></div>
                
                <div class="clearfix"></div><br>
                <div class="container">
                 <form method="post">
                  <table class="table table-bordered">
                   <tr>
                    <td>Nombres:</td>
                    <td><input type="text" name="nombres" class="form-control" required=""></td>
                  </tr>
                  <tr>
                    <td>Apellidos:</td>
                    <td><input type="text" name="apellidos" class="form-control" required=""></td>
                  </tr>
                  <tr>
                    <td>Correo:</td>
                    <td><input type="text" name="email" class="form-control" required=""></td>
                  </tr>
                  <tr>
                    <td>Celular:</td>
                    <td><input type="text" name="celular" class="form-control" required=""></td>
                  </tr>
                  <tr>
                    <td colspan="2">
                     <button type="submit" class="btn-primary" name="btn-save">
                     Crear Nuevo</button>
                     <a href="../public/vista/Usuarios.php" class="btn btn-large btn-success">
                       <i class="glyphicon glyphicon-backward"></i>
                       &nbsp;
                       Regresar al Inicio
                     </a>
                   </td>
                 </tr>
               </table>
             </form>
           </div>


         </div>
       </div>
     </div>
   </nav>
   <footer>
    <p class="bg-success">
      <div id="section41" class="container-fluid">
       <br>.::Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500
       <br>Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270
       <br>Horario de atención: lunes a viernes de 8:00 am a 5:30 pm
       <br>Correo electrónico para notificaciones judiciales: notificacionesjudiciales@sena.edu.co
       <br>Todos los derechos reservados © 2017 ::.
     </p>
   </div>
 </footer> 
</body>
</html>
