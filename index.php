<?php
session_start();
require_once("autoload.php");
$regionales = Regional::getAll();
?>
<DOCTYPE html>
<html lang="es">
<head>
  <title>S.I.E.D | Sistemas de Información de Elementos Devolutivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1"/>
  <link rel="icon" href="../public/img/ico.png" type="image/x-icon" />
  <!-- estilos -->
  <link rel="stylesheet" href="public/css/Redes.css">
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/main.css">
</head>

<body>

<!-- contenedro de  todos los archivos del body -->
<div class="contenedor">

<!-- Banner de la pagina  -->
<div class="banner" id="inicio">
 <img src="public/img/banner-1.jpg" alt="">
</div>

<!-- linea separadora  -->
<div class="banner1">
 <img src="public//img/barracolores.PNG" alt="">
</div>

<!-- navegador de la pagina  -->
<header>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target= "#menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav navbar-right">

<li><a class="btn-inicio">INICIO</a></li>
<li><a class="btn-datos">QUIENES SOMOS</a></li> 
<li><a class="btn-equipo">NUESTRO EQUIPO</a></li>  
<li><a class="btn-contacto">CONTACTENOS</a></li>   
<li><a data-toggle="modal" data-target="#Ingreso">INGRESAR</a></li>       
<li > <a class="glyphicon glyphicon-envelope nav-link" data-toggle="modal" data-target="#Mensaje"></a></li>  

      </ul>
    </div>
  </div>
</nav>
</header>



<!-- Modal de Inicio de session -->

<div class="modal fade" id="Ingreso" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header" >
     <button type="button" class="close" data-dismiss="modal">
      &times;
     </button>
      <span class="glyphicon glyphicon-lock"></span>
     Iniciar Sesion
    </div>


    <div class="modal-body" >
     <form action="controllers/iniciarSesion.php" role="form" method="post" class="login">

  <label class="lblimg">
    <img src="public/img/usuarios.png" alt="" class="image">
  </label>
<input type="email" name="correo" placeholder="Correo Electronico" class="controles" required>
<input type="password" name="contrasena" placeholder="Contraseña" class="controles" required>
<input type="submit" value="Ingresar" class="controles">
</fieldset>
     </form>
    </div>

    <div class="modal-footer">
     <p>Olvido su <a href="#" class="link"> Contraseña?</a></p>
    </div>
    
   </div>
  </div>
 </div>



<!-- Modal de formulario de contacto  -->
<div class="modal fade" id="Mensaje" role="dialog">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header" >
     <button type="button" class="close" data-dismiss="modal">
      &times;
     </button>
     <span class="glyphicon glyphicon-lock"></span>
     Envianos tu Mensaje
    </div>

    <div class="modal-body" >
     <form action="" role="form" method="post" class="form-mensaje">

      <h2 class="titulo-form">Contacto:</h2>
  <input type="text" name="nombre" placeholder="Nombres" required class="controles-form" >
  <input type="text" name="correo" placeholder="Correo" required  class="controles-form">
  <select name="regional" id="regional" class="controles-form">
   <option value="" selected="">Selecione Regional</option>
    <?php
    foreach ($regionales as $regional) {
      echo '<option value="' . $regional->getHash() . '">Regional ' . $regional->getNombre() . '</option>';
    }
    ?>
  </select>
  <textarea name="mensaje" placeholder="Escriba su Mensaje" required class="controles-form" ></textarea>
   <input type="submit" value="Enviar" id="boton">
     
  
</form>

</fieldset>
     </form>
    </div>

    <div class="modal-footer">
     <p> Gracias por su mensaje </p>
    </div>
    
   </div>
  </div>
 </div>




<!-- Slider -->
<section class="slider" id="slider"> 
 
<div id="myCarousel" class="carousel slide " data-ride="carousel">
 <!-- Indicators -->
 <ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1" class="h"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
  <li data-target="#myCarousel" data-slide-to="3"></li>
  <li data-target="#myCarousel" data-slide-to="4"></li>
  <li data-target="#myCarousel" data-slide-to="5"></li>
  <li data-target="#myCarousel" data-slide-to="6"></li>

 </ol>

 <!-- Wrapper for slides -->
 <div class="carousel-inner">

  <div class="item active   container">
   <img src="public/Slider/img1.jpg" >
   <div class="carousel-caption">
    <h3></h3>
    <p></p>
   </div>
  </div>


  <div class="item   container">
   <img src="public/Slider/img2.jpg" >
   <div class="carousel-caption">
   <h3></h3>
   <p></p>
   </div>
  </div>


  <div class="item   container">
   <img src="public/Slider/img3.jpg" >
   <div class="carousel-caption">
   </div>
  </div>


  <div class="item   container">
   <img src="public/Slider/img4.jpg" >
   <div class="carousel-caption">
   </div>
  </div>


  <div class="item   container">
   <img src = "public/Slider/img5.jpg" >
   <div class="carousel-caption">
   </div>
 </div>



 <div class="item   container">
   <img src="public/Slider/img6.jpg">
   <div class="carousel-caption">
   </div>
 </div>
 

 <div class="item  container">
   <img src="public/Slider/img7.jpg" >
   <div class="carousel-caption">
   </div>
 </div>
</div>
</div>
</section>




<!-- informacion -->
<section class="info" id="info">
<div class="container-fluid">
 <div class="row">
 
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 <div class="logo"> 
  <img src="public/img/logoSena.png" alt="" class="img-responsive img-circle">
  </div>
 </div>

 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 <h1 class="info-tittle">VISION</h1>
 <hr>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cum blanditiis et porro placeat, voluptates praesentium error facilis vero nihil itaque vel aliquam dolorum harum distinctio, assumenda iste rem doloremque.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non architecto, maxime, dolore, quisquam officiis libero eius repellat adipisci molestias numquam iste id eaque rerum dolorem vero iusto! Blanditiis, et, soluta!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati rem adipisci maxime distinctio animi sapiente excepturi assumenda numquam architecto asperiores, minus maiores dolores odio doloribus libero temporibus! Perferendis, voluptatem, commodi!
 </div>

 </div>
</div>
</section>

<section  class="info">
<div class="container-fluid">
 <div class="row">


  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 <div class="logo"> 
  <img src="public/img/logoSena.png" alt="" class="img-responsive img-circle">
  </div>
 </div>
 
 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
 <h1 class="info-tittle">MISION</h1>
 <hr> 
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Qui cum blanditiis et porro placeat, voluptates praesentium error facilis vero nihil itaque vel aliquam dolorum harum distinctio, assumenda iste rem doloremque.
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Non architecto, maxime, dolore, quisquam officiis libero eius repellat adipisci molestias numquam iste id eaque rerum dolorem vero iusto! Blanditiis, et, soluta!
  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati rem adipisci maxime distinctio animi sapiente excepturi assumenda numquam architecto asperiores, minus maiores dolores odio doloribus libero temporibus! Perferendis, voluptatem, commodi!
 </div>

 </div>
</div>
</section>

<!-- Nuestro Equipo -->

<section class="nuestro-equipo" id="equipo">
  
  <div class="container-fluid">
    <h1 class="titulo-Equipo">NUESTRO EQUIPO</h1>
    <div class="row">


      <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 Separar ">
          <div class="fondo">
          <div class="img-equipo">
            <img src="public//img/laura.jpg" alt="">
          </div>
          <div class="Datos">

          <h1 class="nombre">Laura</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit natus commodi recusandae aspernatur ipsum a facere voluptatum veniam deserunt voluptatibus officia quisquam aliquid, iusto perspiciati
          </div>
          <div class="redes">
                    <a href="#" ><img src="public/img/facebook.png" alt="" width="30px" height="30px"></a>
          <a href="#"><img src="public/img/google-plus.png" alt=""  width="30px" height="30px"></a>
        </div>
        </div>
      </div>

       <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 Separar ">
          <div class="fondo">
          <div class="img-equipo">
            <img src="public//img/geovanni.jpg" alt="">
          </div>
          <div class="Datos">

          <h1 class="nombre">Geovanni</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit natus commodi recusandae aspernatur ipsum a facere voluptatum veniam deserunt voluptatibus officia quisquam aliquid, iusto perspiciati
          </div>
          <div class="redes">
                    <a href="#" ><img src="public/img/facebook.png" alt="" width="30px" height="30px"></a>
          <a href="#"><img src="public/img/google-plus.png" alt=""  width="30px" height="30px"></a>
        </div>
        </div>
      </div>

       <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 Separar ">
          <div class="fondo">
          <div class="img-equipo">
            <img src="public//img/ruth.JPG" alt="">
          </div>
          <div class="Datos">

          <h1 class="nombre">Ruth</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit natus commodi recusandae aspernatur ipsum a facere voluptatum veniam deserunt voluptatibus officia quisquam aliquid, iusto perspiciati
          </div>
          <div class="redes">
                    <a href="#" ><img src="public/img/facebook.png" alt="" width="30px" height="30px"></a>
          <a href="#"><img src="public/img/google-plus.png" alt=""  width="30px" height="30px"></a>
        </div>
        </div>
      </div>


       <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3 Separar ">
          <div class="fondo">
          <div class="img-equipo">
            <img src="public//img/gus.jpg" alt="">
          </div>
          <div class="Datos">

          <h1 class="nombre">Gustavo</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit natus commodi recusandae aspernatur ipsum a facere voluptatum veniam deserunt voluptatibus officia quisquam aliquid, iusto perspiciati
          </div>
          <div class="redes">
                    <a href="#" ><img src="public/img/facebook.png" alt="" width="30px" height="30px"></a>
          <a href="#"><img src="public/img/google-plus.png" alt=""  width="30px" height="30px"></a>
        </div>
        </div>
      </div>
  <!--  -->
    </div>
  </div>
</section>


<!-- Pie de  pagina  -->

<footer class="contacto">

<h1>Contactenos</h1>

<div class="container-fliud">

  <!-- Mapa -->
<div id="map"></div>     
</div>


  <div class="container-fluid derechos" >
  <br>Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500
  <br>Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270
  <br>Horario de atención: lunes a viernes de 8:00 am a 5:30 pm
  <br>Correo electrónico para notificaciones judiciales: notificacionesjudiciales@sena.edu.co
  <br>Todos los derechos reservados © 2017 
  </div>
</footer>



<!-- Redes sociales -->

<div class="social-bar">

  <a href="https://www.facebook.com/SENAColombiaOficial/" class="icon icon-facebook " target="_blank" title="Ir a Facebook"></a>
  <a href="http://instagram.com/senacomunica" class="icon icon-instagram " target="_blank" title="Ir a Instagram"></a>
  <a href="https://www.youtube.com/user/SENATV"  class="icon icon-youtube " target="_blank" title="Ir a You Tube"></a>
  <a href="https://twitter.com/SENAComunica"  class="icon icon-twitter"   target="_blank" title="Ir a Twitter"></a>

</div>
<!--<img src="public/img/subir.png" class="subir" width="40px" height="40px" title="Subir">-->
<svg style="width: 50px; height: 50px; border-radius: 50%; background: linear-gradient(#ff9933,#fc7323); box-shadow: 0px 5px 10px lightgray;" class="subir">
  <line x1="10" y1="30" x2="25" y2="15" style="stroke: white; stroke-width: 2;" />
  <line x1="25" y1="15" x2="40" y2="30" style="stroke: white; stroke-width: 2;" />
</svg>




</div>
<script src="public/Js/jquery-3.2.1.min.js"></script>
<script src="public/Js/bootstrap.min.js"></script>
<script src="public/Js/main.js"></script>
<script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7Kre3gQHTeXFi85xSIPvoQot6t-DVBiA&callback=initMap">
    </script>
</body>
 </html>