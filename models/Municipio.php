<?php 

class Municipio{// OK

	private $id;
	private $nombre;
	private $regional;

	private function __construct($id, $nombre, Regional $regional)
	{
		$this->id=$id;
		$this->nombre=$nombre;
		$this->regional=$regional;
	}

	public function getId(){
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getNombre(){
		return utf8_encode($this->nombre);
	}

	public function getRegional() {
		return $this->regional;
	}

	// set
	public function setNombre($nombre){
		$this->nombre= $nombre;
	}

	// metodo
	private static function instancia($data){
		return new Municipio($data[0],$data[1], $data[2]);
	}

	private static function getLastInserted() {
		$sql = "select * from municipios where id_municipio = (select max(id_municipio) from municipios)";
		try {
			if (!$municipio = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instancia($municipio[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($nombre, Regional $regional){
		$sql="insert into municipios (nombre_municipio, id_regional) values ('" . $nombre . "', " . $regional->getId() . ")";
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

	public function save() {
		$sql = "update municipios set nombre_municipio = '" . $this->nombre . "' where id_municipio = " . $this->id;
		try{
			if(!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch(Exception $e){
			return false;
		}
	}

	public static function getAll(){
		$sql = "select * from municipios";
		try{
			if (!$municipios=Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
				
			}
			$municipiosArray=array();
			foreach ($municipios as $municipio) {
				$municiosArray[] = self::instancia($municipio);
			}
			return $municipiosArray;
		}	catch(Exception $e){
			return false;
		}
	}

	public static function getOneById($id){
		$sql = "select * from municipios where id_municipio = $id";
		try{
			if (!$municipio=Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Request", 1);
				
			}
			return self::instancia($municipio[0]);
		}
		catch(Exception $e){
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}

?>