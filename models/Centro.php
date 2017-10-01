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

		public function getNit(){
			return $this->nit;
		}

		public function getNombre(){
			return $this->nombre;
		}

		public function getMunicipio(){
			return $this->municipio;
		}

		// metodos
		private static function instance($data) {
			$municipio = Municipio::getOneById($data[3]);
			return new Centro($data[0], $data[1], $data[2], $municipio);
		}

		public static function crear($nit, $nombre, Municipio $municipio){
			$sql = "insert into centros (nit_centro, nombre_centro, id_municipio) values ($nit, '$nombre', $municipio->getId())";
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

		public static function obtenerTodos() {
			$sql = "select * from centros";
			try {
				if (!$centros = Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				$centrosArray = array();
				foreach ($centros as $cen) {
					$centrosArray[] = self::instance($cen);
				}
				return $centrosArray;
			}
			catch(Exception $e){
				return false;
			}
		}

		public static function getOneById($id) {
			$sql = "select * from centros where id_centro = $id";
			try {
				if (!$centro = Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return self::instance($centro[0]);
			}	catch(Exception $e) {
				return false;
			}
		}

	}

	?>