<?php

class Ambiente// OK
{
	private $id;
	private $nombre;
	private $cuentadante;
	private $estado;
	private $centro;
	
	function __construct($id, $nombre, Usuario $cuentadante, Estado $estado, Centro $centro) {
		$this->id = $id;
		$this->nombre = $nombre;
		$this->cuentadante = $cuentadante;
		$this->estado = $estado;
		$this->centro = $centro;
	}

	public function getId() {
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getNombre() {
		return utf8_encode($this->nombre);
	}

	public function getCuentadante() {
		return $this->cuentadante;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function getCentro() {
		return $this->centro;
	}

	public function setCuentadante(Usuario $cuentadante) {
		$this->cuentadante = $cuentadante;
	}

	public function setEstado(Estado $estado) {
		$this->estado = $estado;
	}

	public function save() {
		$sql = "update ambientes set id_cuentadante = " . $this->cuentadante->getId() . " and id_estado = " . $this->estado->getId();
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	public function getElementos() {
		try {
			if (!$elementos = Elemento::getAllByAmbiente($this)) {
				throw new Exception("Error Processing Query");
			}
			return $elementos;
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function instance($data) {
		$cuentadante = Usuario::getOneById($data[2]);
		$estado = Estado::getOneById($data[3]);
		$centro = Centro::getOneById($data[4]);
		return new Ambientes($data[0], $data[1], $data[2], $cuentadante, $estado, $centro);
	}

	private static function getLastInserted() {
		$sql = "select * from ambientes where id_ambiente = (select max(id_ambiente) from ambientes)";
		try {
			if (!$ambiente = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($ambiente[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre, Usuario $cuentadante, Centro $centro) {
		$estado = Estado::getActivo();
		$sql = "insert into (nombre_ambiente, id_cuentadante, id_estado, id_centro) values ('" . $nombre . "', " . $cuentadante->getId() . ", " . $estado->getId() . ", " . $centro->getId() . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getAll() {
		$sql = "select * from ambientes";
		try {
			if (!$ambientes = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$ambientesArray = array();
			foreach ($ambientes as $ambiente) {
				$ambientesArray[] = self::instance($ambiente);
			}
			return $ambientesArray;
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from ambientes where id_ambiente = " . $id;
		try {
			if (!$ambiente = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($ambiente[0]);
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}  

?>
