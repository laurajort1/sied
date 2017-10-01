	<?php 

	class Municipio{// OK

		private $id;
		private $nombre;

		private function __construct($id, $nombre)
		{
			$this->id=$id;
			$this->nombre=$nombre;
		}

		public function getId(){
			return $this->id;
		}

		public function getNombre(){
			return $this->nombre;
		}

		// set
		public function setNombre($nombre){
			$this->nombre= $nombre;
		}

		// metodo
		private static function instancia($data){
			// instancia
			return new Municipio($data[0],$data[1]);
		}

		public static function crear($nombre){
			$sql="insert into municipios(nombre_municipios) values ('$nombre')";
			try{
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return true;
			}
			catch(Exception $e){
				return false;
			}
		}

		public function actualizar(){
			$sql="update municipios set nombre_municipios= '$this->nombre' where id_municipio= $this->id";

			try{
				if(!Bd::ejeSql($sql)) {
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
			$sql="select * from municipios";
			try{
				if (!$municipios=Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
					
				}
				$municipiosArray=array();
				foreach ($municipios as $mun) {
					$municiosArray[] = self::instancia($mun);
				}
				return $municipiosArray;
			}
			catch(Exception $e){
				return false;
			}
		}

		// obtener uno por el id
		public static function getOneById($id){
			$sql = "select * from municipios where id_municipio = $id";
			try{
				if (!$municipio=Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
					
				}
				return self::instancia($municipio[0]);
			}
			catch(Exception $e){
				return false;
			}
		}

	}

	 ?>