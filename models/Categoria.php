<?php 

class Categoria// OK
{

 	private $id;
 	private $nombre;

 	private	function __construct($id, $nombre)
 	{
 		$this->id=$id;
 		$this->nombre=$nombre;
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

 	public function setNombre($nombre) {
 		$this->nombre = $nombre;
 	}

 	// metodo
 	private static function instancia($data){
 		return new Categorias($data[0], $data[1]);
 	}

 	private static function getLastInserted() {
 		$sql = "select * from categorias where id_categoria = (select max(id_categoria) from categorias)";
 		try {
 			if (!$categoria = Bd::executeSql($sql)) {
 				throw new Exception("Error Processing Query");
 			}
 			return self::instancia($categoria[0]);
 		}	catch (Exception $e) {
 			return false;
 		}
 	}

 	public static function create($nombre){
 		$sql="insert into categorias (nombre_categoria) values ('" . $nombre . "')";
 		try{
 			if (!Bd::executeSql($sql)) {
 				throw new Exception("Error Processing Create");
 			}
 			return self::getLastInserted();
 		}	catch (Exception $e){
 			return false;
 		}
 	}

 	public function save(){
 		$sql="update categorias set nombre_categoria='" . $this->nombre . "' where id_categoria= " . $this->id;
 		try{
 			if(!Bd::executeSql($sql)){
 				// levantar una excepcion
 				throw new Exception("Error Processing Update");		  
 			}
 			return true;
 		}	catch(Exception $e){
 			return false;
 		}
 	}

 	public static function getAll(){
 		$sql="select * from categorias";
 		try{
 			if(!$categorias=Bd::fetchSql($sql)){
 				throw new Exception("Error Processing Query");
 				
 			}
 			$categoriasArray=array();
 			foreach ($categorias as $categoria) {
 				$categoriasArray[] =self::instancia($categoria);
 			}
 			return $categoriasArray;
 		}	catch(Exception $e){
 			return false;
 		}
 	}

 	public static function getOneById($id) {
 		$sql = "select * from categorias where id_categoria = " . $id;
 		try {
 			if (!$categoria = Bd::fetchSql($sql)) {
 				throw new Exception("Error Processing Query");
 			}
 			return self::instancia($categoria[0]);
 		}	catch (Exception $e) {
 			return false;
 		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}
 
?>