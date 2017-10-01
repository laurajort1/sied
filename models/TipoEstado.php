<?php

class TipoEstado {// OK

	// Atributo
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
		$sql = "update tipos_estados set nombre_tipo_estado = '" . $this->nombre . "' where id_tipo_estado = " . $this->id;
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	public function addEstado(Estado $estado) {
		$sql = "insert into estados_tipos_estados (" . $estado->getId() . ", " . $this->id . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Insert");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	// Obtener todos los estados segun el tipo actual
	public function getEstados() {
		try {
			if (!$estados = Estado::getAllByTipo($this)) {
				throw new Exception("Error Processing Query");
			}
			return $estados;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre) {
		$sql = "insert into tipos_estados (nombre_tipo_estado) values ('" . $nombre . "')";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function instance($data) {
		return new TipoEstado($data[0], $data[1]);
	}

	public static function getLastInserted() {
		$sql = "select * from tipos_estados where id_tipo_estado = (select max(id_tipo_estado) from tipos_estados)";
		try {
			if (!$tipo = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($tipo[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getAll() {
		$sql = "select * from tipos_estados";
		try {
			if (!$tipos = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$tiposArray = array();
			foreach ($tipos as $tipo) {
				$tiposArray[] = self::instance($tipo);
			}
			return $tiposArray;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from tipos_estados where id_tipo_estado = " . $id;
		try {
			if (!$tipo = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($tipo[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

	// Obtener todos los tipos segun el estado
	public static function getAllByEstado(Estado $estado) {
		$sql = "select te.id_tipo_estado, te.nombre_tipo_estado from tipos_estados as te, estados_tipos_estados as ete where te.id_tipo_estado = ete.id_tipo_estado and ete.id_estado = " . $estado->getId();
		try {
			if (!$tipos = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$tiposArray = array();
			foreach ($tipos as $tipo) {
				$tiposArray[] = self::instance($tipo);
			}
			return $tiposArray;
		}
	}

}

?>