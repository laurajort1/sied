<?php

class TipoUsuario {// OK

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
	private static function instance($data) {
		return new TipoUsuario($data[0], $data[1]);
	}

	public function save() {
		$sql = "update tipos_usuarios set nombre_tipo_usuario = '" . $this->nombre . "' where id_tipo_usuario = " . $this->id;
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre) {
		$sql = "insert into tipos_usuarios (id_tipo_usuario) values ('" . $nombre . "')";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getLastInserted() {
		$sql = "select * from tipos_usuarios where id_tipo_usuario = (select max(id_tipo_usuario) from tipos_usuarios)";
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
		$sql = "select * from tipos_usuarios";
		try {
			if (!$tipos = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$tiposArray = array();
			foreach ($tipos as $tipo) {
				$tiposArray[] = self::instance($tipo);
			}
			return $tiposArray;
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from tipos_usuarios where id_tipo_usuario = " . $id;
		try {
			if (!$tipo = Bd::retornarDatos($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($tipo[0]);
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}

?>