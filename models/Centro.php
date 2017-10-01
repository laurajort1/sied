<?php

class Centro{// OK

	private $id;
	private $nit;
	private $nombre;
	private $municipio;
	
	private function __construct($id, $nit, $nombre, Municipio $municipio)
	{
		$this->id = $id;
		$this->nit = $nit;
		$this->nombre = $nombre;
		$this->municipio = $municipio;
	}

	// getters
	public function getId(){
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getNit(){
		return $this->nit;
	}

	public function getNombre(){
		return utf8_encode($this->nombre);
	}

	public function getMunicipio(){
		return $this->municipio;
	}

	// Setters
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	// Metodos
	public function save() {
		$sql = "update centros set nombre_centro = '" . $this->nombre . "'";
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
		$municipio = Municipio::getOneById($data[3]);
		return new Centro($data[0], $data[1], $data[2], $municipio);
	}

	private static function getLastInserted() {
		$sql = "select * from centros where id_centro = (select max(id_centro) from centros)";
		try {
			if (!$centro = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($centro[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nit, $nombre, Municipio $municipio){
		$sql = "insert into centros (nit_centro, nombre_centro, id_municipio) values (" . $nit . ", '" . $nombre . "', " . $municipio->getId() . ")";
		try{
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}
		catch(Exception $e){
			return false;
		}
	}

	public static function getAll() {
		$sql = "select * from centros";
		try {
			if (!$centros = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$centrosArray = array();
			foreach ($centros as $centro) {
				$centrosArray[] = self::instance($centro);
			}
			return $centrosArray;
		}	catch(Exception $e){
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from centros where id_centro = " . $id;
		try {
			if (!$centro = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($centro[0]);
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}

?>