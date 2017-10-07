<?php 
 
 class Elemento// OK
 {
 	private $id;
 	private $serial;
 	private $placa;
 	private $nombre;
 	private $descripcion;
 	private $marca;
 	private $modelo;
 	private $valor;
 	private $fecha;
 	private $estado;
 	private $categoria;
 	private $ambiente;
 	
 	private function __construct($id, $serial, $placa, $nombre, $descripcion, $marca, $modelo, $valor, $fecha, Estado $estado, Categoria $categoria, Ambiente $ambiente)
 	{
 		$this->id = $id;
		$this->serial = $serial;
		$this->placa = $placa;
		$this->nombre = $nombre;
		$this->descripcion = $descripcion;
		$this->marca = $marca;
		$this->modelo = $modelo;
		$this->valor = $valor;
		$this->fecha = $fecha;
		$this->estado = $estado;
		$this->categoria = $categoria;
		$this->ambiente = $ambiente;
 	}

 	// Getters
 	public function getId() {
 		return $this->id;
 	}

 	public function getHash() {
 		return Crypto::encrypt($this->id);
 	}

	public function getSerial() {
		return $this->serial;
	}

	public function getPlaca() {
		return $this->placa;
	}

	public function getNombre() {
		return utf8_encode($this->nombre);
	}

	public function getDescripcion() {
		return utf8_encode($this->descripcion);
	}

	public function getMarca() {
		return utf8_encode($this->marca);
	}

	public function getModelo() {
		return utf8_encode($this->modelo);
	}

	public function getValor() {
		return $this->valor;
	}

	public function getFecha() {
		return $this->fecha;
	}

	public function getEstado() {
		return $this->estado;
	}

	public function getCategoria() {
		return $this->categoria;
	}

	// Setters
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	public function setEstado(Estado $estado) {
		$this->estado = $estado;
	}

	public function setAmbiente(Ambiente $ambiente) {
		$this->ambiente = $ambiente;
	}

	public function save() {
		$sql = "update elementos set nombre_elemento = '" . $this->nombre . "', descripcion_elemento = '" . $this->descripcion . "', id_estado = " . $this->estado->getId() . ", id_ambiente = " . $this->ambiente->getId() . " where id_elemento = " . $this->id;
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Update");
			}
			return true;
		}	catch(Exception $e) {
			return false;
		}
	}

	private static function instance($data) {
		$estado = Estado::getOneById($data[9]);
		$categoria = Categoria::getOneById($data[10]);
		return new Elemento($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $estado, $categoria);
	}

	private static function getLastInserted() {
		$sql = "select * from elementos where id_elemento = (select max(id_elemento) from elementos)";
		try {
			if (!$elemento = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($elemento[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function create($serial, $placa, $nombre, $descripcion, $marca, $modelo, $valor, $fecha, Estado $estado, Categoria $categoria, Ambiente $ambiente) {
		$sql = "insert into elementos (serial_elemento, placa_elemento, nombre_elemento, descripcion_elemento, marca_elemento, modelo_elemento, valor_elemento, fecha_elemento, id_estado, id_categoria, id_ambiente) values ('" . $serial . "', '" . $placa . "', '" . $nombre . "', '" . $descripcion . "', '" . $marca . "', '" . $modelo . "', " . $valor . ", '" . $fecha . "', " . $estado->getId() . ", " . $categoria->getId() . ", " . $ambiente->getId() . ")";
		try {
			if (!Bd::executeSql($sql)) {
				throw new Exception("Error Processing Creation");
			}
			return self::getLastInserted();
		}	catch(Exception $e) {
			return false;
		}
	}

	public static function getAllByAmbiente(Ambiente $ambiente) {
		$sql = "select * from elementos where id_ambiente = " . $ambiente->getId();
		try {
			if (!$elementos = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$elementosArray = array();
			foreach ($elementos as $elemento) {
				$elementosArray[] = self::instance($elemento);
			}
			return $elementosArray;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getAllByReporte(Reporte $reporte) {
		$sql = "select e.id_elemento, e.serial_elemento, e.placa_elemento, e.nombre_elemento, e.descripcion_elemento, e.marca_elemento, e.modelo_elemento, e.valor_elemento, e.fecha_elemento, e.id_estado, e.id_categoria, e.id_ambiente from elementos as e, elementos_reportes as er where e.id_elemento = er.id_elemento and er.id_reporte = " . $reporte->getId();
		try {
			if (!$elementos = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			$elementosArray = array();
			foreach ($elementos as $elemento) {
				$elementosArray[] = self::instance($elemento);
			}
			return $elementosArray;
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneById($id) {
		$sql = "select * from elementos where id_elemento = " . $id;
		try {
			if (!$elemento = Bd::fetchSql($sql)) {
				throw new Exception("Error Processing Query");
			}
			return self::instance($elemento[0]);
		}	catch (Exception $e) {
			return false;
		}
	}

	public static function getOneByHash($hash) {
		return self::getOneById(Crypto::uncrypt($hash));
	}

}

?>