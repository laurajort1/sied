<?php

class Regional {// OK

	// Atributos
	private $id;
	private $nombre;

	private function __construct($id, $nombre) {
		$this->id = $id;
		$this->nombre = $nombre;
	}

	// Getters
	public function getId() {
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getNombre() {
		return utf8_encode($this->nombre);
	}

	// Setters
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	// Metodos
	public function save() {
		$sql = "update regionales set nombre_regional = '" . $this->nombre . "' where id_regional = " . $this->id;
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function instance($data) {
		return new Regional($data[0], $data[1]);
	}

	private static function getLastInserted() {
		$sql = "select * from regionales where id_regional = (select max(id_regional) from regionales)";
		try {
			if (!$regional = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($regional[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre) {
		$sql = "insert into regionales (nombre_regional) values ('" . $nombre . "')";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from regionales where id_regional = " . $id;
		try {
			if (!$regional = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($regional[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

	public static function getAll() {
		$sql = "select * from regionales";
		try {
			if (!$regionales = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$regionalesArray = array();
			foreach ($regionales as $regional) {
				$regionalesArray[] = self::instance($regional);
			}
			return $regionalesArray;
		}	catch (Exception $e) {
			return false;
		}
	}

}

?>