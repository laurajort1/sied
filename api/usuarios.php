	<?php
	require_once("../autoload.php");
	$verbo = $_POST["method"];

	header("HTTP/1.1 200 OK");
	header('Access-Control-Allow-Origin: *');

	if ($verbo == "GET") {
		$tipo = $_POST["type"];

		if ($tipo == "login") {
			try {
				$correo = $_POST["correo"];
				$contrasena = $_POST["contrasena"];

				if (!$usuario = Usuario::iniciarSesion($correo, $contrasena)) {
					throw new Exception("Error Processing Request", 1);
				}

				exit('{"code": 200, "status": "OK", "data": {
					"id": ' . $usuario->getId() . ',
					"nombre": "' . $usuario->getNombre() . ' ' . $usuario->getApellido() . '",
					"tipo": "' . $usuario->getTipo()->getNombre() . '"
				}}');
			}	catch(Exception $e) {
				exit('{"code": 500, "status": "Internal Server Error", "message": "' . $e->getMessage() . '"}');
			}
		}
	}

	?>