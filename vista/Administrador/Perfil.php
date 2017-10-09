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
 <link rel="stylesheet" type="text/css" href="../../public/css/bootstrap.min.css">
 <script src="../../public/js/jquery-3.2.1.min.js"></script>
 <script src="../../public/js/bootstrap.min.js"></script>

</head>
<body>
 <style>
	body {
	 position: relative; 
	}
 </style>

<!-- header -->
<?php echo include_once '../../Componentes/EncabezadoAdministrador.php' ?>

<!-- contenido central --> 
<div>      
 <table class="table table-bordered" style="width: 500px;" align="center" >
 <!-- imagen -->
 <tr>        
	<td colspan="2" align="center">
	 <img src="../../public/img/user.png" width="100" height="100">
	</td>       
 </tr>

<!-- usuario de acceso -->
 <tr>
	<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
	 <b>Usuario Acceso</b>
	</td>
	<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
	 <?php echo preg_split("/@/", $usuario->getCorreo())[0]; ?></td>
 </tr>

	<!-- Nombres -->
 <tr>
	<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
	 <b>Nombres:</b>
	</td>
	<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
	<?php echo $usuario->getNombres(); ?></td>
 </tr>

	<!-- Apellidos -->
	<tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Apellidos:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
		 <?php echo $usuario->getApellidos(); ?></td>
	</tr>

	<!-- Telefono -->
	<tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri;">
			<b>Telefono:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
			<?php echo $usuario->getTelefono(); ?></td>
	</tr>
 
 <!-- Extensión -->
	<tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Extensión:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
			<?php echo $usuario->getExtension(); ?></td>
	 </tr>

 <!-- Contraseña -->
	<tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
			<b>Contraseña:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
			<?php
			$password = $usuario->getContrasena();
			$passwordAst = preg_replace('/(.)/', '*', Crypto::uncrypt($password));
			echo $passwordAst;
			?>  
		</td>
	</tr>
 
 <!-- Correo -->
	 <tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Correo:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
		 <?php echo $usuario->getCorreo(); ?></td>
	 </tr>

 <!-- Estado -->
	 <tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Estado:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
		 <?php echo $usuario->getEstado()->getNombre(); ?></td>
	 </tr>

 <!-- Centro -->
	 <tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Centro:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
		 <?php echo $usuario->getCentro()->getNombre(); ?></td>
	 </tr>

 <!-- Tipo Usuario -->
	 <tr>
		<td bgcolor="#eaeaea" align="center" style="font-family: Calibri";>
		 <b>Tipo Usuario:</b>
		</td>
		<td bgcolor="#eaeaea" align="center" style="color: #000; font-family: Calibri; font-weight: bold;">
		 <?php echo $usuario->getTipo()->getNombre(); ?></td>
	 </tr>
	</table>
	<!--contenido final  -->
</div><!-- fin del contenido central -->
	
	 <p class="container" align="center">
		<a type="button" class="btn btn-success btn-lg active" href="modificarPerfil.php">
		Modificar</a>
		<a  type="button" class="btn btn-danger btn-lg" href="Administrador.php">Cancelar</a>
	 </p> <!-- Fin del contenido final-->
  
<!-- footer  -->
<footer>
 <?php echo include_once '../../Componentes/FooterAdministrador.php' ?>
</footer>
 
</body>
</html>
