<?php 

class Estado// OK
{
	private $id;
	private $nombre;
	
	private function __construct($id, $nombre)
	{
	 	$this->id = $id;
	 	$this->nombre = $nombre;
	}

	// Getters
	public function getId(){
		return $this->id;
	}

	public function getNombre(){
		return $this->nombre;
	}

	// Setters
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	// metodos
	public function save() {
		$sql = "update estados set nombre_estado = '" . $this->nombre . "' where id_estado = " . $this->id;
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	public function addTipo(TipoEstado $tipo) {
		$sql = "insert into estados_tipos_estados (" . $this->id . ", " . $tipo->getId() . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Insert");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	// Obtener todos los tipos de este objeto estado
	public function getTipos() {
		try {
			if (!$tipos = TipoEstado::getAllByEstado($this)) {
				throw new Exception("Error Processing Query");
			}
			return $tipos;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre) {
		$sql = "insert into estados (nombre_estado) values ('" . $nombre . "')";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function getLastInserted() {
		$sql = "select * from estados where id_estado = (select max(id_estado) from estados)";
		try {
			if (!$estado = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instancia($estado[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function instancia($data){
		return new Estado($data[0],$data[1]);
	}

	public static function getOneById($id){
		$sql="select * from estados where id_estado=" . $id;
		try{
			if(!$estado=Bd::fetchSql($sql)){
				throw new Exception("Error Processing Request", 1);
			}
			return self::instancia($estado[0]);
		}	catch(Exception $e){
			return false;
		}
	}

	private static function getOneByName($nombre){
		$sql="select * from estados where nombre_estado='" . $nombre . "'";
		try{
			if(!$estado=Bd::fetchSql($sql)){
				throw new Exception("Error Processing Request", 1);
			}
			return self::instancia($estado[0]);
		}	catch(Exception $e){
			return false;
		}
	}

	public static function getActivo() {
		return self::getOneByName("activo");
	}

	public static function getInactivo() {
		return self::getOneByName("inactivo");
	}

	// Obtener todos los estados segun el tipo
	public static function getAllByTipo(TipoEstado $tipo) {
		$sql = "select e.id_estado, e.nombre_estado from estados as e, estados_tipos_estados as ete where e.id_estado = ete.id_estado and ete.id_tipo_estado = " . $tipo->getId();
		try {
			if (!$estados = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$estadosArray = array();
			foreach ($estados as $estado) {
				$estadosArray[] = self::instancia($estado);
			}
			return $estadosArray;
		}	catch (Exception $e);
	}
	
}

?>