<?php
session_start();
require_once("../autoload.php");

$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];

try {
	if (!$usuario = Usuario::iniciarSesion($correo, $contrasena)) {
		throw new Exception("Error Processing Login");
	}
	$_SESSION["token"] = $usuario->getHash();
	header("Location: ../vista/Administrador.php");
}	catch (Exception $e) {
	header("Location: ../index.php");
}

?>