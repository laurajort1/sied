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
 	// get
 	public function getId(){
 		return $this->id;
 	}

 	public function getNombre(){
 		return $this->nombre;
 	}

 	// set
 	public function setNombre(){
 		return $this->nombre;
 	}

 	// metodo
 	private static function instancia($data){
 		// instancia
 		return new Categorias($data[0], $data[1]);
 	}

 	public static function crear($nombre){
 		$sql="insert into categorias(nombre_categorias) values ('$nombre')";
 		try{
 			if (!Bd::ejeSql($sql)) {
 				throw new Exception("Error Processing Request", 1);
 			}
 			return true;
 		}
 		catch (Exception $e){
 			return false;
 		}
 	}

 	public function actualizar(){
 		$sql="update categorias set nombre_categorias='$this->nombre where id_categoria= $this-id";
 		try{
 			if(!Bd::ejeSql($sql)){
 				// levantar una excepcion
 				throw new Exception("Error Processing Request", 1);		  
 			}
 			return true;
 		}
 		catch(Exception $e){
 			return false;
 		}
 	}

 	public static function obtenerTodos(){
 		$sql="select * from categorias";
 		try{
 			if(!$categorias=Bd::retornarDatos($sql)){
 				throw new Exception("Error Processing Request", 1);
 				
 			}
 			$categoriasArray=array();
 			foreach ($categorias as $cate => $value) {
 				$categoriasArray[] =self:: instancia($cate);
 			}
 			return $categoriasArray;
 		}
 		catch(Exception $e){
 			return false;
 		}
 	}

 	public static function getOneById($id) {
 		$sql = "select * from categorias where id_categoria = $id";
 		try {
 			if (!$categoria = Bd::retornarDatos($sql)) {
 				throw new Exception("Error Processing Request", 1);
 			}
 			return self::instancia($categoria[0]);
 		}	catch (Exception $e) {
 			return false;
 		}
 	}

 }
 
?>