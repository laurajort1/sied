<DOCTYPE html>
<html lang="es">
<head>

<title>S.I.E.D | Sistemas de Información de Elementos Devolutivos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, minimum-scale=1"/>
  <link rel="icon" href="public/img/ico.png">
  <link rel="stylesheet" href="public/css/Redes.css">
  <link rel="stylesheet" href="public/css/bootstrap.css">
  <link rel="stylesheet" href="public/css/main.css">
 </head>

<body>

<!-- contenedro de  todos los archivos del body -->
<div class="contenedor">

<!-- Banner de la pagina  -->
<div class="banner">
 <img src="public/img/banner-1.jpg" alt="">
</div>

<!-- linea separadora  -->
<div class="banner">
 <img src="public//img/barracolores.PNG" alt="">
</div>

<!-- navegador de la pagina  -->
<header>
<nav class =  "navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target= "#menu">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand  app-link">S.I.E.D</a>
    </div>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="nav navbar-nav navbar-right">

<li><a href="#">INICIO</a></li>
<li><a href="#">QUIENES SOMOS</a></li> 
<li><a href="#">NUESTRO EQUIPO</a></li>  
<li><a href="#">CONTACTENOS</a></li>   
<li><a href="#" data-toggle="modal" data-target="#Ingreso"> Ingresar</a></li>       
<li > <a href="" class="glyphicon glyphicon-envelope nav-link" data-toggle="modal" data-target="#Mensaje"></a></li>  

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
     <form action="" role="form" method="post" class="login">

      <fieldset class="login-container">
<form action="" method="post" name="usuario-login">
  
  <label class="lbl-img"><img src="public/img/user.png" alt="" class="imagen"></label>
  
  <label for=""class="login-label" > Correo:</label>
  <input type="text" name="usuario" class="input-login " placeholder="correo@misena.edu.co" id="correo">
  
  <label for=""class="login-label " >Contraseña:</label>
  <input type="password" name="contrasena" class="input-login" placeholder="**********">
  
  <button type="submin" class="btn-ingresar"> Ingresar</button>
  
</form>
</fieldset>
     </form>
    </div>

    <div class="modal-footer">
     <p>Olvido su <a href="#"> Contraseña?</a></p>
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
   <option value="">2</option>
   <option value="">3</option>
   <option value="">4</option>
   <option value="">5</option>
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
<section class="slider"> 
 
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
    <h3>img</h3>
    <p>imagen</p>
   </div>
  </div>


  <div class="item   container">
   <img src="public/Slider/img2.jpg" >
   <div class="carousel-caption">
   <h3>Imagen</h3>
   <p>Wallpaper</p>
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

<!-- Left and right controls -->
  <!-- <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a> -->

</div>
</div>
</section>




<!-- informacion -->
<section class="info">
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

<section class="nuestro-equipo">
  <div class="container-fluid">
    <h1 class="titulo-Equipo">Conoce al Equipo</h1>
    <div class="row">

      <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="container-equipo">
          <div class="img-equipo">
            <img src="public//img/laura.png" alt="">
          </div>
          <h1 class="nombre">Laura</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit fugit natus commodi recusandae aspernatur ipsum a facere voluptatum veniam deserunt voluptatibus officia quisquam aliquid, iusto perspiciati
        </div>
      </div>

      <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="container-equipo">
          <div class="img-equipo">
            <img src="public/img/geovanni.png" alt="">
          </div>
          <h1 class="nombre">Geovanni</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus ducimus repellat illum autem cumque corporis velit enim laboriosam excepturi est commodi ab qui, consequatur omnis aperiam, vero eius facilis.
        </div>
      </div>

      <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="container-equipo">
          <div class="img-equipo">
            <img src="public/img/ruth.png" alt="">
          </div>
          <h1 class="nombre">Ruth</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quaerat, perspiciatis sequi minima, ratione natus iure quibusdam eaque est rem et veritatis corporis, ea dolor aut adipisci. Nisi, sit, rerum!
        </div>
      </div>

       <div class=" col-xs-12 col-sm-6 col-md-3 col-lg-3">
        <div class="container-equipo">
          <div class="img-equipo">
            <img src="public/img/gustavo.png" alt="">
          </div>
          <h1 class="nombre">gustavo</h1>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque quaerat, perspiciatis sequi minima, ratione natus iure quibusdam eaque est rem et veritatis corporis, ea dolor aut adipisci. Nisi, sit, rerum!
        </div>
      </div>


     

    </div>
  </div>
</section>

<!-- Pie de  pagina  -->

<footer>
  <div class=" container-fluid">
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
       <br>Servicio Nacional de Aprendizaje SENA – Dirección General Calle 57 No. 8-69, Bogotá D.C - PBX (57 1) 5461500
  <br>Línea gratuita de atención al ciudadano Bogotá 5925555 – Resto del país 018000 910270
  <br>Horario de atención: lunes a viernes de 8:00 am a 5:30 pm
  <br>Correo electrónico para notificaciones judiciales: notificacionesjudiciales@sena.edu.co
  <br>Todos los derechos reservados © 2017 ::. 
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">

     
      </div>
    </div>
  </div>
</footer>









<!-- Redes sociales -->

<div class="social-bar">

  <a href="https://www.facebook.com/SENAColombiaOficial/" class="icon icon-facebook " target="_blank" title="Ir a Facebook"></a>
  <a href="http://instagram.com/senacomunica" class="icon icon-instagram " target="_blank" title="Ir a Instagram"></a>
  <a href="https://www.youtube.com/user/SENATV"  class="icon icon-youtube " target="_blank" title="Ir a You Tube"></a>
  <a href="https://twitter.com/SENAComunica"  class="icon icon-twitter"   target="_blank" title="Ir a Twitter"></a>

</div>

</div>
<script src="public/Js/jquery-3.2.1.min.js"></script>
<script src="public/Js/bootstrap.min.js"></script>
<script src="public/Js/main.js"></script>        
</body>
 </html>