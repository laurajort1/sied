<?php
require_once("../config.php");

class Backup {// Partial

	// Atributos
	private $hora;
	private $fecha;
	private $file;

	private function __construct($hora, $fecha, $file) {
		$this->hora = $hora;
		$this->fecha = $fecha;
		$this->file = $file;
	}

	// Getters
	public function getHora() {
		return $this->hora;
	}

	public function getFecha() {
		return $this->fecha;
	}

	public function getFile() {
		return $this->file;
	}

	// Metodos
	private static function instance($file) {
		return new Backup($hora, $fecha, $file);
	}

	public function restore() {
		// Code...
	}

	public static function getAll() {
		try {
			//
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneByFile($file) {
		//
	}

	public static function create() {
		try {
			$now = getdate();
			$fecha = $now["mday"] . "-" . $now["mon"] . "-" . $now["year"];

			$horas = $now["minutes"];
			$horas = (strlen($horas) > 1 ? $horas : "0" . $horas);
			$minutos = $now["minutes"];
			$minutos = (strlen($minutos) > 1 ? $minutos : "0" . $minutos);
			$segundos = $now["seconds"];
			$segundos = (strlen($segundos) > 1 ? $segundos : "0" . $segundos);

			$hora = $hora . ":" . $minutos . ":" . $segundos;

			$filename = 'backup_' . $fecha . '_' . $hora . '.sql';

			//$result = exec('mysqldump ' . BD . ' --password=' . PASSWORD . ' --user=' . USERNAME . ' --single-transaction > ' . $filename, $output);
			//
			//mysql -u user_name -p <file_to_read_from.sql

			if ($output != '') {
				throw new Exception($output);
			}
			
			return self::instance($filename);

		}	catch (Exception $e) {
			return false;
		}
	}

}

?>