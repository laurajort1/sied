<?php

class Reporte {

	private $id;
	private $texto;
	private $fecha;
	private $hora;
	private $instructor;

	private function __construct($id, $texto, $fecha, $hora, Usuario $instructor) {
		$this->id = $id;
		$this->texto = $texto;
		$this->fecha = $fecha;
		$this->hora = $hora;
		$this->instructor = $instructor;
	}

	// Getters
	public function getId() {
		return $this->id;
	}

	public function getHash() {
		return Crypto::encrypt($this->id);
	}

	public function getTexto() {
		return utf8_encode($this->texto);
	}

	public function getFecha() {
		return $this->fecha;
	}

	public function getHora() {
		return $this->hora;
	}

	public function getInstructor() {
		return $this->instructor;
	}

	// Metodos
	public function addImagen($extension) {
		return ImagenReporte::create($extension, $this);
	}

	public function addElemento(Elemento $elemento) {
		$sql = "insert into elementos_reportes values (" . $elemento->getId() . ", " . $this->id . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Insert");
			}
			return true;
		}	catch (Exception $e) {
			return false;
		}
	}

	public function getImagenes() {
		try {
			if (!$imagenes = ImagenReporte::getAllByReporte($this)) {
				throw new Exception("Error Processing Query");
			}
			return $imagenes;
		}	catch (Exception $e) {
			return false;
		}
	}

	public function getElementos() {
		try {
			if (!$elementos = Elemento::getAllByReporte($this)) {
				throw new Exception("Error Processing Query");
			}
			return $elementos;
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function getLastInserted() {
		$sql = "select * from reportes where id_reporte = (select max(id_reporte) from reportes)";
		try {
			if (!$reporte = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($reporte[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($texto, Usuario $instructor) {
		$sql = "insert into reportes (texto_reporte, fecha_reporte, hora_reporte, id_instructor) values ('" . $texto . "', curdate(), curtime(), " . $instructor->getId() . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::getLastInserted();
		}	catch (Exception $e) {
			return false;
		}
	}

	private static function instance($data) {
		$instructor = Usuario::getOneById($data[4]);
		return new Reporte($data[0], $data[1], $data[2], $data[3] $instructor);
	}

	public static function getAllByCuentadante(Usuario $cuentadante) {
		$sql = "select rep.id_reporte, rep.texto_reporte, rep.fecha_reporte, rep.hora_reporte, rep.id_instructor from reportes as rep, elementos_reportes as er, elementos as ele, ambientes as amb, usuarios as usu where rep.id_reporte = er.id_reporte and er.id_elemento = ele.id_elemento and ele.id_ambiente = amb.id_ambiente and amb.id_cuentadante = usu.id_usuario and usu.id_usuario = " . $cuentadante->getId();
		try {
			if (!$reportes = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$reportesArray = array();
			foreach ($reportes as $reporte) {
				$reportesArray[] = self::instance($reporte);
			}
			return $reportesArray;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getAllByAmbiente(Ambiente $ambiente) {
		$sql = "select rep.id_reporte, rep.texto_reporte, rep.fecha_reporte, rep.hora_reporte, rep.id_instructor from reportes as rep, elementos_reportes as er, elementos as ele, ambientes as amb where rep.id_reporte = er.id_reporte and er.id_elemento = ele.id_elemento and ele.id_ambiente = amb.id_ambiente and amb.id_ambiente = " . $ambiente->getId();
		try {
			if (!$reportes = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$reportesArray = array();
			foreach ($reportes as $reporte) {
				$reportesArray[] = self::instance($reporte);
			}
			return $reportesArray;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from reportes where id_reporte = " . $id;
		try {
			if (!$reporte = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($reporte[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}

?>