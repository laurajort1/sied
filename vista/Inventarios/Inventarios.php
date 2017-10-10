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

    .prin{
    width: 900px;
    max-width:400px;
    max-width:100%;
   
    }
 
  </style>

<!-- header -->
<?php echo include_once '../../Componentes/EncabezadoAdministrador.php' ?>;
<!-- fin del header -->

<!-- contenido central -->
    <div class="container">
      <div class="jumbotron">
        <div class="container">
          <div class="col-6 col-sm-3">
          <div class="thumbnail">
            &nbsp;&nbsp;
            <a href="../../vista/Centros/Centros.php">
              <img src="../../public/img/Centros.png" style="width:100%">
              <p style="text-align: center; color: #000;">Centros</p>
            </a>
          </div>
        </div>

        <!-- boton 2 -->
         <div class="col-6 col-sm-3">
          <div class="thumbnail">
            &nbsp;&nbsp;
            <a href="../../vista/Ambientes/Ambientes.php">
              <img src="../../public/img/Ambientes.png" style="width:100%">
                <p style="text-align: center;color: #000;">Ambientes</p>
            </a>
          </div>
        </div>

        <!-- boton 3 -->
         <div class="col-6 col-sm-3">
          <div class="thumbnail">
            &nbsp;&nbsp;
            <a href="../../vista/Elementos/Elementos.php">
              <img src="../../public/img/Elementos.png" style="width:100%">
                <p style="text-align: center; color:#000;">Elementos</p>
            </a>
          </div>
        </div>

        <!-- boton 4 -->
        <div class="col-6 col-sm-3">
          <div class="thumbnail">
            &nbsp;&nbsp;
            <a href="../../vista/Usuarios/Usuarios.php">
              <img src="../../public/img/usuarios.png" style="width:100%">
                 <p style="text-align: center; color:#000; ">Usuarios</p>
            </a>
          </div>
        </div>
        </div>
      </div>
    </div>
<!-- fin del contenido central -->
  
  <footer>
   <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
  </footer> 
</body>
</html>../