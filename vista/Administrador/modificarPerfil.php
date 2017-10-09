<?php 
session_start();
$_SESSION["id"] = 1;
require_once("../../autoload.php");
$tipoEstado = TipoEstado::getOneByName("usuario");
$estados = $tipoEstado->getEstados();
$usuario = Usuario::getOneById($_SESSION["id"]);
$centros = Centro::getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title> S.I.E.D | Administrador </title>
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <link rel="icon" href="../../public/img/ico.png" type="image/x-icon" />
 <!-- estilos -->
 <link rel="stylesheet" type="text/css" href="../public/css/bootstrap.min.css">
 <script src="../public/js/jquery-3.2.1.min.js"></script>
 <script src="../public/js/bootstrap.min.js"></script>
  
</head>
<body>
 <style>
  body {
   position: relative; 
  }

    .prin{
    width: 900px;
    max-width:400px;
    max-width:100%;
   
    }

    label[for="img"] {
      width: 100px;
      height: 100px;
      background-repeat: no-repeat;
      background-size: contain;
      background-image: url('../../public/img/user.png');
      background-position: center;
      border-radius: 50%;
      overflow: hidden;
    }

    label[for="img"] > div {
      width: 100%;
      height: 100%;
      display: flex;
      flex-flow: row;
      justify-content: center;
      align-items: center;
      transition: background-color 0.3s;
    }

    label[for="img"]:hover > div {
      background-color: rgba(0, 0, 0, 0.4);
      cursor: pointer;
    }

    label[for="img"]:hover p {
      display: block;
    }

    label[for="img"] p {
      font-family: sans-serif;
      font-size: 16px;
      color: white;
      padding: 7.5px 10px;
      border: 1px solid white;
      border-radius: 5px;
      display: none;
    }
 
  </style>

<!-- header -->
<?php echo include_once '../../Componentes/EncabezadoAdministrador.php' ?>
<!-- fin del contenido superior -->

<!-- contenido central -->
  <div>
  	<table class="table table-bordered" style="width: 500px;" align="center">
        <tr>
        <!-- imagen -->
        <td colspan="2" align="center">
          <label for="img">
            <div>
            <p>Cambiar</p>
            </div>
          </label>
            <input id="img" type="file" accept="image/*" style="display: none;">
        </td>       
      </tr>

      <!-- usuario de acceso -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Usuario Acceso</b>
        </td>
        <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="text" name="usuario" value="<?php echo preg_split("/@/", $usuario->getCorreo())[0]; ?>" style="text-align: center;" disabled>            
        </td>
      </tr>

      <!-- Nombres -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Nombres:</b>
        </td>
        <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="text" name="Nombres" value="<?php echo $usuario->getNombres(); ?>" style="text-align: center;" >
        </td>
      </tr>

      <!-- Apellidos -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Apellidos:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input type="text" class="form-control" name="Apellidos" value="<?php echo $usuario->getApellidos(); ?>" style="text-align: center;">
        </td>
      </tr>

    <!-- Telefono -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri;">
          <b>Telefono:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control"  type="" name="Telefono" value="<?php echo $usuario->getTelefono(); ?>" style="text-align: center;">
        </td>
      </tr>

  <!-- Contraseña -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Contraseña:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input  class="form-control" type="text" name="" value="<?php echo Crypto::uncrypt($usuario->getContrasena()); ?>" style="text-align: center;">
        </td>
      </tr>
  
     <!-- Correo -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Correo:</b>
        </td>
        <td bgcolor="#eaeaea" style="color: #000; font-family: Calibri; font-weight: bold;">
          <input class="form-control" type="text" name="correo" value="<?php echo $usuario->getCorreo(); ?>" style="text-align:center;" disabled>            
        </td>
      </tr>

  <!-- Estado -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Estado:</b>
        </td>
        <td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <select class="form-control" style="text-transform: capitalize;">
            <?php
            foreach ($estados as $estado) {
              if ($usuario->getEstado()->getId()==$estado->getId()) {
                echo '<option selected value="' . $estado->getId() . '">' . $estado->getNombre() . '</option>';
              } else {
                echo '<option value="' . $estado->getId(). '">' . $estado->getNombre(). '</option>';
              }
            }
           ?>
          </select>
        </td>
      </tr>

  <!-- Centro -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Centro:</b>
        </td>
        <td  bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <select class="form-control" style="text-transform: capitalize;">
            <?php
            foreach ($centros as $centro) {
              if ($usuario->getCentro()->getId()==$centro->getId()) {
                echo '<option selected value="' . $centro->getId() . '">' . $centro->getNombre() . '</option>';
              } else {
                echo '<option value="' . $centro->getId(). '">' . $centro->getNombre(). '</option>';
              }
            } 
           ?>
          </select> 
        </td>
      </tr>

  <!-- Tipo Usuario -->
      <tr>
        <td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
          <b>Tipo Usuario:</b>
        </td>
        <td class="form-control" bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
          <?php echo $usuario->getTipo()->getNombre(); ?></td>
      </tr>
    </table>
</form>

<!-- botones finales -->
  <p class="container" align="center">
    <a type="button" class="btn btn-success btn-lg active" href="Perfil.php">Guardar</a>    
    <a  type="button" class="btn btn-danger btn-lg" href="Perfil.php">Cancelar</a>
   </p> <!-- Fin del contenido final-->
</div>
<!-- fin del contenido central -->

  
  <footer>
    <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
  </footer>

  <!-- Acciones para el funcionamiento de la imagen -->
  <script type="text/javascript">
    
    document.querySelector('#img').addEventListener('change', function(e) {
      let file = this.files[0];
      let reader  = new FileReader();

      reader.onloadend = function () {
        document.querySelector('label[for="img"]').style.backgroundImage = 'url(' + reader.result + ')';
      }

      if (file) {
        reader.readAsDataURL(file);
      }
    });

  </script>
  
</body>
</html>
