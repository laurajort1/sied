	<?php 
	 
	 class Elemento// OK
	 {
	 	private $id;
	 	private $serial;
	 	private $codigo;
	 	private $placa;
	 	private $nombre;
	 	private $descripcion;
	 	private $marca;
	 	private $modelo;
	 	private $valor;
	 	private $fecha;
	 	private $estado;
	 	private $categoria;
	 	
	 	private function __construct($id, $serial, $codigo, $placa, $nombre, $descripcion, $marca, $modelo, $valor, $fecha, Estado $estado, Categoria $categoria)
	 	{
	 		$this->id = $id;
			$this->serial = $serial;
			$this->codigo = $codigo;
			$this->placa = $placa;
			$this->nombre = $nombre;
			$this->descripcion = $descripcion;
			$this->marca = $marca;
			$this->modelo = $modelo;
			$this->valor = $valor;
			$this->fecha = $fecha;
			$this->estado = $estado;
			$this->categoria = $categoria;
	 	}

	 	public function getId() {
	 		return $this->id;
	 	}

		public function getSerial() {
			return $this->serial;
		}

		public function getCodigo() {
			return $this->codigo;
		}

		public function getPlaca() {
			return $this->placa;
		}

		public function getNombre() {
			return $this->nombre;
		}

		public function getDescripcion() {
			return $this->descripcion;
		}

		public function getMarca() {
			return $this->marca;
		}

		public function getModelo() {
			return $this->modelo;
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

		public function setEstado(Estado $estado) {
			$this->estado = $estado;
		}

		public function actualizar() {
			$sql = "update elementos set id_estado = $this->estado->getId() where id_elemento = $this->id";
			try {
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return true;
			}	catch(Exception $e) {
				return false;
			}
		}

		private static function instance($data) {
			$estado = Estado::getOneById($data[10]);
			$categoria = Categoria::getOneById($data[11]);
			return new Elemento($data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $estado, $categoria);
		}

		public static function create($serial, $codigo, $placa, $nombre, $descripcion, $marca, $modelo, $valor, $fecha, Estado $estado, Categoria $categoria) {
			$sql = "insert into elementos (serial_elementos, codigo_elementos, placa_elementos, nombre_elementos, descripcion_elementos, marca_elementos, modelo_elementos, valor_elementos, fecha_elementos, id_estado, id_categoria) values ($serial, $codigo, $placa, '$nombre', '$descripcion', '$marca', '$modelo', $valor, '$fecha', $estado->getId(), $categoria->getId())";
			try {
				if (!Bd::ejeSql($sql)) {
					throw new Exception("Error Processing Request", 1);
				}
				return true;
			}	catch(Exception $e) {
				return false;
			}
		}

	}

	?>