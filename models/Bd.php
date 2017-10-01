<?php 
require_once("../config.php");

class Bd {
	
	// Atributos
	private static $host = HOST;
	private static $username = USERNAME;
	private static $contrasena = PASSWORD;
	private static $database = BD;
	private static $conexion;


	private function __construct() {
		// Code...
	}

	// Conectar
	private static function getConnection()
	{
		try {
			if (!self::$conexion = new PDO("mysql:host=".self::$host.";dbname=".self::$database, self::$username, self::$contrasena)) {
				throw new Exception("Error Connecting To Database");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	// Desconectar 
	private static function disconnect()
	{
		self::$conexion = null;
	}

	// ejecutar
	public static function executeSql($sql)
	{
		try{
			// Conectando
			if (!self::getConnection()) {
				throw new Exception("Error Connecting To Database");
			}
			// Consultar
			$resultado = self::$conexion->query($sql);
			self::disconnect();
			if (!$resultado) {
				throw new Exception("Error Processing Query");
			}
			return $resultado;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function fetchSql($sql)
	{
		try{
			// Condicional
			if (!$resultado= self::executeSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$resultadoArray = $resultado->fetchAll();

			if (sizeof($resultadoArray) == 0) {
				// Levantar excepcion
				throw new Exception("Empty Set");
			}
			return $resultadoArray;
		}
		catch (Excepcion $e) {
			return false;
		}
	}
	
}

?>