	<?php

	class Ambientes// OK
	{
		private $id;
		private $nombre;
		private $cuentadante;
		private $estado;
		private $centro;
		
		function __construct($id, $nombre, Cuentadante $cuentadante, Estado $estado, Centro $centro) {
			$this->id = $id;
			$this->nombre = $nombre;
			$this->cuentadante = $cuentadante;
			$this->estado = $estado;
			$this->centro = $centro;
		}

		public function getId() {
			return $this->id;
		}

		public function getNombre() {
			return $this->nombre;
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

		public function setCuentadante(Cuentadante $cuentadante) {
			$sql = "update ambientes set id_cuentadante = $cuentadante->getId()";
			try {
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				$this->cuentadante = $cuentadante;
				return true;
			}	catch(Exception $e) {
				return false;
			}
		}

		public function desactivar() {
			$estado = Estado::obtenerInactivo();
			$sql = "update ambientes set id_estado = $estado->getId()";
			try {
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				$this->estado = $estado;
				return true;
			}	catch(Exception $e) {
				return false;
			}
		}

		private static function instance($data) {
			$cuentadante = Cuentadante::getOneById($data[2]);
			$estado = Estado::getOneById($data[3]);
			$centro = Centro::getOneById($data[4]);
			return new Ambientes($data[0], $data[1], $data[2], $cuentadante, $estado, $centro);
		}

		public static function create($nombre, Cuentadante $cuentadante, Centro $centro) {
			$estado = Estado::obtenerActivo();
			$sql = "insert into (nombre_ambiente, id_cuentadante, id_estado, id_centro) values ('$nombre', $cuentadante->getId(), $estado->getId(), $centro->getId())";
			try {
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return true;
			}	catch(Exception $e) {
				return false;
			}
		}

		public static function getAll() {
			$sql = "select * from ambientes";
			try {
				if (!$ambientes = Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				$ambientesArray = array();
				foreach ($ambientes as $amb) {
					$ambientesArray[] = self::instance($amb);
				}
				return $ambientesArray;
			}	catch(Exception $e) {
				return false;
			}
		}

		public static function getOneById($id) {
			$sql = "select * from ambientes where id_ambientes = $id";
			try {
				if (!$ambiente = Bd::retornarDatos($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return self::instance($ambiente[0]);
			}	catch(Exception $e) {
				return false;
			}
		}

	}  

	?>
